<template>
    <div>
        <button class="setting-b" @click="openModel">Сообщение</button>
        <div class="model" v-if="modelOpen">
            <div class="model-bac" @click="closeModel"></div>
            <div class="model-con">
                <div class="modal-header">
                    <h6 class="modal-title">Новое сообщение</h6>
                    <div class="a">
                        <a href="">Перейти к диалогу с ... </a>
                    </div>
                    <button title="Закрыть" class="close" @click="closeModel">×</button>
                </div>
                <div class="model-name">
                    <div class="avatar-icon">
                        <img src="/img/1_NCTnew.png" class="img-2">
                        <div class="model-full"><h5>{{ person.name }} {{ person.lastname }}</h5>
                        </div>
                    </div>
                </div>
                <div class="dsc">
                    <textarea name="comment" cols="40" rows="3"></textarea>
                </div>
                <button class="setting-b b" @click="closeModel">Отправить</button>
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
    data() {
        return {
            modelOpen: false,
            person: null
        }
    },
    mounted() {
        // this.getPers()
        this.getSlug()
        console.log('Component mounted.')
    },
    methods: {
        // getPers() {
        //     axios.get('/person')
        //         .then(res => {
        //             this.person = res.data
        //         })
        // },
        getSlug() {
            axios.get(`/persons/damir`)
                .then(res => {
                    this.person = res.data
                })
        },
        openModel() {
            this.modelOpen = true

        },
        closeModel() {
            this.modelOpen = false
        },

    }
}
</script>
<style>
.model, .model-bac {
    position: fixed;
    left: 0;
    top: 0;
    width: 100vw;
    height: 100vh;
    z-index: 1000;
}

.model-bac {
    background-color: rgba(10, 10, 10, 0.5);
    z-index: 40;
}

.model {
    display: flex;
    align-items: center;
    justify-content: center;
}

.model-con {
    justify-content: center;
    margin-top: -100px;
    background-color: white;
    z-index: 50;
    width: 500px;
    height: auto;
    border-radius: 15px;
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
}

.modal-header {
    border-radius: 15px 15px 0px 0px;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 2px solid #eceeef;
    background-color: #FAFBFC;
}

.modal-title {
    margin-top: 0;
    margin-bottom: 0;
    color: #474747;
    margin-left: 5px;
}

.close {
    border-radius: 15px;
    border-color: #FAFBFC;
    float: right;
    font-family: sans-serif;
    font-size: 24px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
    text-decoration: none;
}



.model-name {
    padding: 10px;
    display: flex;
    align-items: center;
}

.avatar-icon {

    display: flex;
    align-items: center;
}

.img-2 {
    margin-left: 10px;
    width: 50px;
    height: 50px;
    border-radius: 50px;
    border: 1px solid grey;
}

.model-full {
    margin-left: 20px;
}

.dsc {
    padding: 10px;
    width: 480px;
    height: 170px;
}

textarea {
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
    resize: none;
    padding: 2px;
    width: 100%;
    height: 100%;
    align-items: center;
    border-radius: 4px;
}

textarea:focus {
    outline: none;
}

.setting-b {
    margin-left: 200px;
    margin-bottom: 10px;
}

</style>
