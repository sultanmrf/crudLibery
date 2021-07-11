<template>
    <div>
        <h3 class="text-center text-light">All Books</h3><br/>

        <table class="table bg-light table-bordered text-center">
            <thead>
            <tr>
                <th>نام کتاب</th>
                <th>نویسنده</th>
                <th>تاریخ ثبت</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books" :key="book.id" :data-id="book.id" class="tr">
                <td>{{ book.title }}</td>
                <td>{{ book.author }}</td>
                <td>{{ book.created_at }}</td>
                <td class="d-flex justify-content-around align-items-center">
                    <router-link class="btn btn-primary col-5" :to="{name:'edit',params:{id:book.id}}">edit</router-link>
                    <button class="btn btn-danger btn-remove col-5" @click="deleteBook(book.id)">delete</button>
                </td>
            </tr>
            </tbody>
        </table>
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
                        $(".tr[data-id="+`${id}`+"]").remove();
                    });
            }
        return {books,deleteBook}
    },
}
</script>
