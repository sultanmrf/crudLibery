<template>
    <div class="bg-light bg-t d-flex justify-content-center align-items-center flex-column p-5 rounded shadow">
        <h3 class="text-center">Add Book</h3>
        <div class="row col-12">
            <div class="col-12 d-flex justify-content-center align-items-center p-5">
                <form @submit.prevent="addBook" class="col-12 d-flex justify-content-center flex-column">
                    <div class="form-group col-12">
                        <label>title</label>
                        <input type="text" class="form-control" v-model="books.title">
                    </div>
                    <div class="form-group col-12">
                        <label>Author</label>
                        <input type="text" class="form-control" v-model="books.author">
                    </div>
                    <button type="submit" class="btn col-8 align-self-center btn-primary">Add Book</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import {useRoute,useRouter} from "vue-router";

export default {
    setup(){
        let books = {
            title : "",
            author : ""
        }

        const router = useRouter();
        const route = useRoute();

        function addBook(){
            axios.post('api/book/create', {title : books.title,author : books.author})
                .then((response)=>{
                        swal(response.data);
                        router.push('/index');
                })
        }
        return {addBook,books}
    }
}
</script>
<style>
.bg-t{
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}
@keyframes example {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
</style>
