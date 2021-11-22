<template>
    <h1>CRUD</h1>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <router-link class="nav-link" to="/crud" :class="{ active: $route.name === 'crud.list' }">List</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link" to="/crud/create" :class="{ active: $route.name === 'crud.create' }">Create</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link" to="/crud/edit" :class="{ active: $route.name === 'crud.edit' }">Edit</router-link>
        </li>
    </ul>
</template>
