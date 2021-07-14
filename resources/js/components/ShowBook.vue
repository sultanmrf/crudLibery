<template>
    <div class=" d-flex justify-content-center align-items-center flex-column p-5 rounded shadow">
        <div class="row col-12 row-reverse">
            <div class="col-6 d-flex justify-content-start flex-column align-items-center p-5">
                <h5 class="mt-2 text-light">عنوان کتاب : {{book.title}}</h5>
                <h5 CLASS="text-light mt-1">نویسنده کتاب : {{book.author}}</h5>
                <h5 CLASS="text-light mt-1">توصیف کتاب : {{book.description}}</h5>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column align-items-center p-5">
                <img src="/img/44.jpg" style="width: 60%;height: 300px">
            </div>
        </div>
    </div>
</template>

<script>
import {ref} from "vue";
import {useRoute} from "vue-router";

export default {
    setup() {

        const book = ref({});
        const route = useRoute();

        axios.get('http://appname.local/api/book/show/'+route.params.id)
            .then((response) => {
                book.value = response.data.book;
            });

        return {book}
    },
}
</script>
