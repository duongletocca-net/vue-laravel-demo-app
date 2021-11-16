<template>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link to="/" class="navbar-brand">
                            <span>Home</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/products" class="navbar-brand">
                            <span>Products</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/about" class="navbar-brand">
                            <span>About Us</span>
                        </router-link>
                    </li>
                </ul>
            </div>
            <div class="btn btn-outline-success my-2 my-sm-0">Pick Items (0)</div>
        </div>
    </nav>
    <div class="logo">
    </div>
</header>
<main>
    <div class="container">
        <router-view />
    </div>
</main>
</template>
<style scoped>
    .logo {
        width: auto;
        height: 20em;
        background: powderblue;
    }
</style>
