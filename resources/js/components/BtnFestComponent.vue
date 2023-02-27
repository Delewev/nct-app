<template>
    <div>
        <button class="btn4" @click="openModel">Заявка</button>
        <div class="fests" v-if="modelOpen">
            <div class="fests-bac" @click="closeModel"></div>
            <div class="fests-con">
                <div class="contents">
                    <button onclick="document.location='/ments/grup'"
                            type="submit" class="btn4" > Групповой
                    </button>
                    <button onclick="document.location='/ments/fest'"
                            type="submit" class="btn4" > Партнёрский
                    </button>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            modelOpen: false,
            name: null,
            lastname: null,
            phone: null,
            telegafets: null,
            fut: null,
            category: null,
            city: null,
            team: null,
            titelfest: null,
            namecoch: null,
            phonecoch: null,

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
    width: auto;
    height: auto;
    padding: 10px;
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
}

.fests-header {
    border-radius: 15px;
    justify-content: space-between;
    padding: 15px;

}

.img-fest {
    margin-left: 100px;
    width: 150px;
}

.btn-op {
    justify-content: space-between;
    margin-top: 5px;
    margin-left: 30px;
}
.contents{
    display: inline-block;
    position: relative;
    padding: 10px;
}


</style>
