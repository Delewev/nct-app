<template>
    <div>
        <button class="btn4" @click="openModel">Участвовать</button>
        <div class="fests" v-if="modelOpen">
            <div class="fests-bac" @click="closeModel"></div>
            <div class="fests-con">
                <div class="fests-header" style="background-color: white;">
                    <img src="/img/fest.png" alt="" class="img-fest">
                </div>
                <div class="btn-op">
                    <button class="btn4" onclick="document.location='/ments/grup'">Гупповай</button>
                    <button class="btn4" onclick="document.location='/ments/part'">Партнёрка</button>
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
            // person: null
        }
    },
    mounted() {
    },
    methods: {
        openModel() {
            this.modelOpen = true

        },
        closeModel() {
            this.modelOpen = false
        },
        openGrup(){
            axios.get('/my')
        }

    }
}
</script>
<style>
.fests, .fests-bac {
    position: fixed;
    left: 0;
    top: 0;
    width: 100vw;
    height: 100vh;
    z-index: 1000;
}

.fests-bac {
    background-color: rgba(10, 10, 10, 0.5);
    z-index: 40;
}

.fests {
    display: flex;
    align-items: center;
    justify-content: center;
}

.fests-con {
    border-radius: 15px;
    justify-content: center;
    margin-top: -100px;
    background-color: white;
    z-index: 50;
    width: 400px;
    height: auto;
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
}

.fests-header {
    border-radius: 15px;
    justify-content: space-between;
    padding: 15px;

}

.img-fest{
    margin-left: 100px;
    width: 150px;
}
.btn-op{
    justify-content: space-between;
    margin-top: 5px;
    margin-left: 30px;
}

</style>
