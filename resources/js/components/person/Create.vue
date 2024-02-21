<!-- Create.vue -->
<template>
    <div>
        <div class="w-25">
            <div class="form-group w-75 ms-5 mt-5">
                <label for="name">Name:</label>
                <input v-model="name" type="text" class="form-control" id="name" placeholder="name">
            </div>
            <div class="form-group w-75 ms-5">
                <label for="age">Age:</label>
                <input v-model="age" type="number" class="form-control" id="age" placeholder="age">
            </div>
            <div class="form-group w-75 ms-5">
                <label for="job">Job:</label>
                <input v-model="job" type="text" class="form-control" id="job" placeholder="job">
            </div>
            <div class="form-group w-75 ms-5 mt-3">
                <button :disabled="!isDisabled" @click.prevent="store" class="btn btn-primary">Add User</button>
            </div>
        </div>
    </div>
</template>

<script>


    export default {
        name: "Create",
        data() {
            return {
                name: null,
                age: null,
                job: null,
            };
        },
        methods: {
            store() {
                axios.post('/api/people', { name: this.name, age: this.age, job: this.job })
                    .then(res => {

                        this.$router.push({ name: 'person.index' });

                    })

            },
        },
        computed: {
            isDisabled() {
                return this.name && this.age && this.job;
            },
        },
    };
</script>

<style scoped>
    /* стилі компонента Create */
</style>
