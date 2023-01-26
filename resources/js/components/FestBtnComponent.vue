<template>
    <div>
        <button class="btn4" @click="openModel">Участвовать</button>
        <div class="fests" v-if="modelOpen">
            <div class="fests-bac" @click="closeModel"></div>
            <div class="fests-con">
                <div class="fests-header" style="background-color: white;">
                    <img src="/img/fest.png" alt="" class="img-fest">
                </div>
                <div class="contents">
                    <div class="form-grup">
                        <div class="form-name">
                            <div>
                                <div>
                                    <h6>Имя</h6>
                                </div>
                                <div>
                                    <input type="text" name="name" id="name" v-model="name">
                                </div>
                            </div>
                            <div class="form-name-f">
                                <div><h6>Фамилия</h6></div>
                                <div>
                                    <input type="text" name="lastname" id="lastname"
                                           v-model="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="form-name">
                            <div>
                                <div>
                                    <h6>Номер Телефона</h6>
                                </div>
                                <div>
                                    <input type="tel" name="phone"
                                           id="phone" v-model="phone">
                                </div>
                            </div>
                            <div class="form-name-f">
                                <div><h6>ID Telegram</h6></div>
                                <div>
                                    <input type="text" name="telegafets" id="telegafets"
                                           v-model="telegafets"
                                           placeholder="@">
                                </div>
                            </div>
                        </div>
                        <div class="fut-grup">
                            <div class="fut">
                                <div><h6>Размер футболки</h6></div>
                                <div>
                                    <select name="fut" id="fut"  v-model="fut">
                                        <option>XS</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XХL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grup">
                                <div><h6>Выбрать категорию</h6></div>
                                <div>
                                    <select name="category" id="category" v-model="category">
                                        <option>Групповой</option>
                                        <option>Партнёрка</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-info">
                        </div>
                        <div class="form-team">
                            <div class="form-team-d">
                                <div class="cityfest">
                                    <div><h6>Город</h6></div>
                                    <div>
                                        <input type="text" name="city" id="city" v-model="city">
                                    </div>
                                </div>
                            </div>
                            <div class="form-team-d">
                                <div><h6>Команда</h6></div>
                                <div>
                                    <select name="team" id="team" v-model="team">
                                        <option>NCT</option>
                                        <option>G-FAME</option>
                                        <option>Zachet</option>
                                        <option>Fenomen-A</option>
                                        <option>NO-NAME</option>
                                        <option>Titans</option>
                                        <option>Grand-Arena</option>
                                        <option>LEGION</option>
                                        <option>NO-LIMIT</option>
                                        <option>Power</option>
                                        <option>Destiny</option>
                                        <option>Groove</option>
                                        <option>Insight</option>
                                        <option>Фаворит</option>
                                        <option>Кодекс</option>
                                        <option>United</option>
                                        <option>Husky</option>
                                        <option>Другое</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-team-d">
                                <div><h6>Название гуппового</h6></div>
                                <div>
                                    <input  name="titelfest" id="titelfest" v-model="titelfest">
                                </div>
                            </div>
                        </div>
                        <div class="contakt">
                            <div class="name">
                                <div><h6>ФИ контактного лица</h6></div>
                                <div>
                                    <input  id="namecoch" name="namecoch" placeholder="Иванов Иван"
                                            v-model="namecoch">
                                </div>
                            </div>
                            <div class="telcoch">
                                <div><h6>Телефо контактного лица</h6></div>
                                <div>
                                    <input  id="phonecoch" name="phonecoch" v-model="phonecoch">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns">
                    <div>
                        <button @click="addFest()" onclick="document.location='/mests/fest'"
                                type="submit" class="button" id="submit">
                <span>
                    Отправить
                </span>
                            <i>v</i>
                        </button>
                    </div>
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
        addFest(){
            axios.post('/mests/fest', {name: this.name, lastname: this.lastname, phone: this.phone,
                telegafets: this.telegafets, fut: this.fut,
                category: this.category, city: this.city, titelfest: this.titelfest, team: this.team,
                namecoch: this.namecoch, phonecoch: this.phonecoch,} )
                .then(res => {
                    console.log(res);
                })
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

</style>
