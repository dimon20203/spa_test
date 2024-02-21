<template>
    <div>
        <h1>This is the Index component</h1>
        <div><router-link :to="{name:'person.index'}">People</router-link></div>
        <div><router-link :to="{name:'person.create'}">Add</router-link></div>

        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: 'Index',
    };
</script>

<style scoped>
    /* стилі компонента Index */
</style>
