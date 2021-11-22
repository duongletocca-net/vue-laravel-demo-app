<template>
<header>
<nav class="navbar navbar-expand-lg navbar-red navbar-dark">
    <div class="wrapper"> </div>
    <div class="container-fluid all-show"> <router-link class="navbar-brand" to="/">Home<i class="fa fa-codepen"></i></router-link>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0 h2">
                <li class="nav-item"><router-link class="nav-link active" aria-current="page" to="/about">About me</router-link> </li>
                <li class="nav-item"><router-link class="nav-link" to="/products">Products</router-link></li>
                <li class="nav-item"><router-link class="nav-link" to="#">Contact</router-link></li>
                <li class="nav-item"><div class="nav-link"><i class="fa fa-search"></i></div></li>
            </ul>
        </div>
    </div>
</nav>
<div class="logo">
    <h1>Logo</h1>
</div>
</header>
</template>
<style scoped>
    body {
        background-color: #eee
    }
    .logo {
        height: 15em;
        text-align: center;
        background: powderblue;
    }
    .navbar-nav>li>a {
        text-transform: uppercase;
        font-size: 12px;
        margin-right: 20px;
        color: #fff
    }

    .navbar-toggler {
        padding: .20rem .50rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid white
    }

    .nav-link {
        color: #fff !important
    }

    .wrapper {
        width: 100%;
        position: absolute;
        height: 100%;
        background-color: #000;
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
        transition: 1s all
    }

    .navbar-brand {
        color: #fff;
        font-family: 'Allerta Stencil', sans-serif;
        margin-bottom: 4px;
        font-size: 27px
    }

    .navbar-red:hover .wrapper {
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 65% 100%)
    }

    .navbar-brand:hover {
        color: #fff
    }

    .navbar-red {
        background-color: red;
        color: #fff
    }

    .all-show {
        z-index: 10
    }
</style>
