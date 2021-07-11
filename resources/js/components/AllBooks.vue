<template>
    <div>
        <h3 class="text-center">All Books</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books">
                <td>{{ book.name }}</td>
                <td>{{ book.author }}</td>
                <td>{{ book.created_at }}</td>
                <td>{{ book.updated_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    setup(){
        let books = [];

        function getBooks(){
            axios.get('api/books')
                .then(response => {
                    this.books = response.data;
                    console.log(response.data);
                });
        }
       getBooks();
        return {books}
    },
}
</script>
