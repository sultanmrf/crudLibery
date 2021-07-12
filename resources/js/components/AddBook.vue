<template>
    <div class="bg-light bg-t d-flex justify-content-center align-items-center flex-column p-5 rounded shadow">
        <h3 class="text-center">ایجاد کتاب</h3>
        <div class="row col-12">
            <div class="col-12 d-flex justify-content-center align-items-center  p-5">
                <form @submit.prevent="addBook" class="col-12 d-flex text-right justify-content-center flex-column">
                    <div class="form-group col-12">
                        <label>عنوان کتاب </label>
                        <input type="text" class="form-control" v-model="books.title">
                    </div>
                    <div class="form-group col-12">
                        <label>نویسنده کتاب</label>
                        <input type="text" class="form-control" v-model="books.author">
                    </div>
                    <button type="submit" class="btn col-8 align-self-center btn-primary">ویرایش کتاب</button>
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
.container .card-c{
    position: relative;
    width: 308px;
    height:500px;
    margin: 20px;
    box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 1px solid rgba(255,255,255,0.5);
    border-left: 1px solid rgba(255,255,255,0.5);
    backdrop-filter: blur(5px);
}
.container .card-c .content{
    padding: 25px;
    text-align: center;
    transition: 0.5s;
}
.container .card-c .content h2 {
    position: absolute;
    top: -80px;
    right: 30px;
    font-size: 8em;
    color: rgba(255,255,255,0.05);
    pointer-events: none;

}
.container .card-c .content h3 {
    font-size: 1.8em;
    color: white;
    z-index: 1;
}
.container .card-c .content p{
    font-size: 1em;
    color: white;
    font-weight: 300;
}
.container .card-c .content a{
    position: relative;
    display: inline-block;
    padding: 8px 20px;
    margin-top: 15px;
    background: #fff;
    color: #000;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 500;
    box-shadow: 0 5px 15px rgba(0,0,0,0.5);
}

</style>
