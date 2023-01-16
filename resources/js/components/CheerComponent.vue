<template>
    <div>
        <table class="table">


            <div v-for="user in users">
                <td>{{ user.name }}</td>
                <td>{{ user.day }}</td>

            </div>

        </table>
    </div>
</template>

<script>
export default {

    data() {
        return {
            users: null
        }
    },
    mounted() {
        this.getUser()
    },
    methods: {
        getUser() {
            axios.get('')
                .then(res => {
                    this.users = res.data
                });
        },
    },
};
</script>
