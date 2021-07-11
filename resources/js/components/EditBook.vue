<template>
    <div class="bg-light d-flex justify-content-center align-items-center flex-column p-5 rounded shadow">
        <h3 class="text-center">Edit Book</h3>
        <div class="row col-12">
            <div class="col-12 d-flex justify-content-center align-items-center p-5">
                <form @submit.prevent="updateBook" class="col-12 d-flex justify-content-center flex-column">
                    <div class="form-group col-12">
                        <label>title</label>
                        <input type="text" class="form-control" v-model="book.title">
                    </div>
                    <div class="form-group col-12">
                        <label>Author</label>
                        <input type="text" class="form-control" v-model="book.author">
                    </div>
                    <button type="submit" class="btn col-8 align-self-center btn-primary">Update Book</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import {ref} from "vue";
import {useRouter,useRoute} from "vue-router";

export default {
    setup() {

   const book = ref({});
   const router = useRouter();
   const route = useRoute();

       axios.get('http://appname.local/api/book/edit/'+route.params.id)
            .then((response) => {
                book.value = response.data.book;
            });

        function updateBook() {
            axios.post('http://appname.local/api/book/update/'+ route.params.id,
                {'title' : book.value.title,'author':book.value.author})
                .then((response)=>{
                    swal(response.data);
                    router.push('/index');
                })

        }
        return {updateBook,book}
    },
}
</script>
