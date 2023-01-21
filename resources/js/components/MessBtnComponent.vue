<template>
    <div>
        <button class="setting-b" @click="openModel">Сообщение</button>
        <div class="model" v-if="modelOpen">
            <div class="model-bac" @click="closeModel"></div>
            <div class="model-con">
                <div class="modal-header">
                    <h6 class="modal-title">Новое сообщение</h6>
                    <a href="">Перейти к диалогу с ... </a>
                    <a title="Close" class="close" @click="closeModel">×</a>
                </div>
                <div class="model-name">
                    <div class="avatar-icon">
                        <img src=""  class="img-1">
                            <div class="table-a" ><h4>Я - </h4><h4>дата</h4></div>
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
    data() {
        return {
            modelOpen: false,
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
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
    background-color: rgba(10, 10, 10, 0.8);
    z-index: 40;
}

.model {
    display: flex;
    align-items: center;
    justify-content: center;
}

.model-con {
    margin-top: -100px;
    background-color: white;
    z-index: 50;
    width: 500px;
    height: auto;
    border-radius: 15px;
    font-family: -apple-system,system-ui,Helvetica Neue,Roboto,sans-serif;
}

.modal-header {
    justify-content: space-between;
    padding: 5px;
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
.model-name{
    padding: 10px;
    display: flex;
    align-items: center;
}
.avatar-icon{

    display: flex;
    align-items: center;
}
.img-1{
    width: 50px;
    height: 50px;
    border-radius: 10px;
}
.table-a{
    margin-left: 20px;

}

</style>
