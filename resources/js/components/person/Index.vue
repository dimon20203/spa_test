<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="(person, index) in people" :key="index">
                <td>
                    <router-link :to="{ name: 'person.show', params: { id: person.id } }">
                        {{ person.name }}
                    </router-link>
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>
                    <router-link :to="{name:'person.edit', params:{id:person.id}}" class="btn btn-outline-primary mr-2">Edit</router-link>
                </td>
                <td>
                    <button @click="deletePerson(person.id)" class="btn btn-outline-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "Index",
        data() {
            return {
                people: [],
                editPersonId: null,
                name: null,
                age: null,
                job: null,
            };
        },
        mounted() {
            this.getPeople();
        },
        methods: {
            getPeople() {
                axios
                    .get("/api/people")
                    .then((res) => {
                        this.people = res.data.data;
                    })
                    .catch((error) => {
                        console.error(error);
                    });
            },
            deletePerson(id) {
                axios.delete(`/api/people/${id}`)
                    .then(() => {
                        this.getPeople();
                    })
                    .catch(error => {
                        console.error(error);
                    });
            },
        },
    };
</script>

<style scoped>
    /* Стилі для компонента Index */
</style>
