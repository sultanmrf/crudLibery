<template>
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/index" class="nav-item nav-link">index</router-link>
                    <router-link to="/create" class="nav-item nav-link">Add Book</router-link>
                    <router-link to="/category" class="nav-item nav-link disabled">category</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    setup(){
        let img="public/img/unnamed.jpg";
        return {img}
    }
}
</script>

