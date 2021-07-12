<template>
    <div class=" d-flex justify-content-center align-items-center flex-column p-5 rounded shadow">
        <h3 class="text-center text-light"> کتاب</h3>
        <div class="row col-12">
            <div class="col-12 d-flex justify-content-center flex-column align-items-center p-5">
                <img src="/img/44.jpg" style="width: 60%;height: 300px">
                <h3 class="mt-2 text-light">{{book.title}}</h3>
                <h3 CLASS="text-light mt-1">{{book.author}}</h3>
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

        axios.get('http://appname.local/api/book/show/'+route.params.id)
            .then((response) => {
                book.value = response.data.book;
            });

        return {book}
    },
}
</script>
