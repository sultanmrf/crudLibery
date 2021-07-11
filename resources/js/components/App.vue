<template>
    <div class="container mt-5">
        <nav class="ml-4 navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/index" class="nav-item nav-link font-weight-bold">کتاب ها </router-link>
                    <router-link to="/create" class="nav-item nav-link font-weight-bold">ثبت کتاب</router-link>
                    <router-link to="/category" class="nav-item nav-link disabled font-weight-bold">دسته بندی ها</router-link>
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
<style>
body{
    height: 99vh;
    background: #140A49;
}
body::before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(#ff00ff,#DA0A99);
    clip-path: circle(20% at 100% 60%);
    z-index: -1;
}
body::after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:radial-gradient(#a019ff
    ,#9300fa);
    clip-path: circle(20% at 0% 30% );
    z-index: -1;
    opacity: 0.8;

}
.box-shadow-master{
    border: 1px solid #e8e402;
    box-shadow: 0 3px 6px rgba( 253,249,21,1), 0 3px 6px #e8e402;
}
</style>
