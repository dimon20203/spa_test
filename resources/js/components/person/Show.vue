<template>
    <div v-if="person">
        <div>
            Name: {{ person.name }}
        </div>
        <div>
            Age: {{ person.age }}
        </div>
        <div>
            Job: {{ person.job }}
        </div>
        <router-link :to="{ name: 'person.edit', params: { id: person.id } }">Edit</router-link>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: 'Show',
        data() {
            return {
                person: null,
            };
        },
        async mounted() {
            await this.getPerson();
        },
        methods: {
            async getPerson() {
                try {
                    const response = await axios.get(`/api/people/${this.$route.params.id}`);
                    this.person = response.data.data;
                } catch (error) {
                    console.error('Error fetching person:', error);
                }
            },
        },
    };
</script>

<style scoped>
    /* Ваші стилі можна додати тут */
</style>
