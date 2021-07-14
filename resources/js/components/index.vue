<template>
    <div class="row col-12 flex-row flex-wrap justify-content-center">
        <div class="card-c wobble skew animate__animated animate__flipInY animate__delay-1s"
             v-for="book in books" :key="book.id" :data-id="book.id">
            <div class="content p-1">
                <div class="w-100 px-2 py-1 pt-1">
                    <img src="img/44.jpg" style="width: 100%;height: 200px">
                </div>
                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap">
                    <h5 class="text-light my-3">{{book.title}}</h5>
                    <p class="mt-3">نویسنده : {{ book.author}}</p>
                    <router-link class="btn col-10 align-items-center btn-warning hvr-grow -radial-in"
                                 :to="{name:'show',params:{id:book.id}}">  نمایش کتاب</router-link>
                    <div class="d-flex justify-content-around col-12">
                        <router-link class="btn btn-primary col-6" :to="{name:'edit',params:{id:book.id}}">ویرایش کتاب</router-link>
                        <a class="btn btn-danger btn-remove col-5" @click="deleteBook(book.id)">حذف کتاب</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>


<script>
import {ref} from 'vue'
export default {
    setup(){
        const books = ref({});
        axios.get('api/books')
            .then(response => {
                books.value = response.data.books;
            });
        function deleteBook(id){
            axios.delete('api/book/delete/'+id)
                .then(response => {
                    swal(response.data);
                    $("div[data-id="+`${id}`+"]").remove();
                });
        }
        return {books,deleteBook}
    },
}
</script>
<style scoped>
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
