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
                <button :disabled="!isDisabled" @click.prevent="update" class="btn btn-primary">UPDATE</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Edit",
        data() {
            return {
                name: null,
                age: null,
                job: null,
            };
        },
        mounted() {
            this.getPerson();
        },
        methods: {
            getPerson() {
                axios.get(`/api/people/${this.$route.params.id}`)
                    .then(res => {
                        this.name = res.data.data.name;
                        this.age = res.data.data.age;
                        this.job = res.data.data.job;
                    })
                    .catch(error => {
                        console.error('Error fetching person:', error);
                    });
            },
            update() {
                axios.put(`/api/people/${this.$route.params.id}`, { name: this.name, age: this.age, job: this.job })
                    .then(() => {
                        this.$router.push({ name: 'person.show', params: { id: this.$route.params.id } })
                            .catch(error => {
                                console.error('Error navigating to person.show:', error);
                            });
                    })
                    .catch(error => {
                        console.error('Error updating person:', error);
                    });
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
    /* стилі компонента Edit */
</style>
