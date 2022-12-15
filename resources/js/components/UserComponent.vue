<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Профиль</div>

                    <div class="card-body">

                        <div> Я - {{ thisUser.name }}</div>
                        <input v-model="thisUser.name" type="text" />
                        <div>Фамилия - {{thisUser.lastname}}</div>
                        <input v-model="thisUser.lastname" type="text" />
                        <button @click="sendData()">Изменить</button>


                        <br />
                        <hr />

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        user: Object,
        dataupdate: String,
    },
    data(){
        return{
            thisUser : this.user
        }
    },
    mounted() {
        // this.thisUser = this.thisUser;
    },
    methods: {
        sendData() {
            axios
                .get(this.dataupdate, {params: {user: this.thisUser},
                })
                .then((response) => {
                    this.thisUser = response.data;
                    console.log(response.data);
                });
        },
    },
};
</script>
