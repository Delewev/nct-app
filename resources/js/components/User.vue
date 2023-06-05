<template>
    <div class="col-md-4 mx-auto rounded m-4 ">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Имя</label>
                <input type="text" class="form-control" name="name" id="name" v-model="thisUser.name" placeholder="Имя" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Фамилия</label>
                <input type="text" class="form-control" name="lastname" id="lastname" v-model="thisUser.lastname" placeholder="Фамилия"
                       required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Имя пользователя</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" name="slug" id="slug" v-model="thisUser.slug" placeholder="Имя пользователя"
                           aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">Номер Телефона</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">+7</span>
                    </div>
                    <input type="text" class="form-control" id="phone" maxlength="10" v-model="thisUser.phone" required>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">Пол</label>
                <select class="form-select" name="person" id="person" v-model="thisUser.person">
                    <option>Мужской</option>
                    <option>Женский</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Город</label>
                <input type="text" class="form-control" name="city" id="city" v-model="thisUser.city" placeholder="Город" required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="update"
                id="submit" onClick="submit" @click="sendData()">Submit form</button>
        <!--        <div>-->
        <!--            <div class="form-name">-->
        <!--                <div>-->
        <!--                    <div>-->
        <!--                        <h6>Имя</h6>-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <input type="text" class="form-contact" name="name" id="name" v-model="thisUser.name">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="form-name-f">-->
        <!--                    <div><h6>Фамилия</h6></div>-->
        <!--                    <div>-->
        <!--                        <input type="text" name="lastname" id="lastname" v-model="thisUser.lastname"-->
        <!--                               placeholder="Фамилия">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="form-name">-->
        <!--                <div>-->
        <!--                    <div>-->
        <!--                        <h6>Номер Телефона</h6>-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <input type="tel" name="phone" id="phone" v-model="thisUser.phone">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="form-name-f">-->
        <!--                    <div><h6>ID</h6></div>-->
        <!--                    <div>-->
        <!--                        <input type="text" name="slug" id="slug" v-model="thisUser.slug"-->
        <!--                               placeholder="ID">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="form-info">-->
        <!--                <div class="form-pol">-->
        <!--                    <div><h6>Пол</h6></div>-->
        <!--                    <div>-->
        <!--                        <select name="person" id="person" v-model="thisUser.person">-->
        <!--                            <option>Мужской</option>-->
        <!--                            <option>Женский</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="form-info-data">-->
        <!--                    <div><h6>Дата рождения</h6></div>-->
        <!--                    <div class="form-age">-->
        <!--                        <div class="form-age-inter">-->
        <!--                            <select name="day" id="day" v-model="thisUser.day">-->
        <!--                                <option>1</option>-->
        <!--                                <option>2</option>-->
        <!--                                <option>3</option>-->
        <!--                                <option>4</option>-->
        <!--                                <option>5</option>-->
        <!--                                <option>6</option>-->
        <!--                                <option>7</option>-->
        <!--                                <option>8</option>-->
        <!--                                <option>9</option>-->
        <!--                                <option>10</option>-->
        <!--                                <option>11</option>-->
        <!--                                <option>12</option>-->
        <!--                                <option>13</option>-->
        <!--                                <option>14</option>-->
        <!--                                <option>15</option>-->
        <!--                                <option>16</option>-->
        <!--                                <option>17</option>-->
        <!--                                <option>18</option>-->
        <!--                                <option>19</option>-->
        <!--                                <option>20</option>-->
        <!--                                <option>21</option>-->
        <!--                                <option>22</option>-->
        <!--                                <option>23</option>-->
        <!--                                <option>24</option>-->
        <!--                                <option>25</option>-->
        <!--                                <option>26</option>-->
        <!--                                <option>27</option>-->
        <!--                                <option>29</option>-->
        <!--                                <option>30</option>-->
        <!--                                <option>31</option>-->
        <!--                            </select>-->
        <!--                        </div>-->
        <!--                        <div>-->
        <!--                            <select name="month" id="month" v-model="thisUser.month">-->
        <!--                                <option>Январь</option>-->
        <!--                                <option>Февраль</option>-->
        <!--                                <option>Март</option>-->
        <!--                                <option>Апрель</option>-->
        <!--                                <option>Май</option>-->
        <!--                                <option>Июнь</option>-->
        <!--                                <option>Июль</option>-->
        <!--                                <option>Август</option>-->
        <!--                                <option>Сентябрь</option>-->
        <!--                                <option>Октябрь</option>-->
        <!--                                <option>Ноябрь</option>-->
        <!--                                <option>Декабрь</option>-->
        <!--                            </select>-->
        <!--                        </div>-->
        <!--                        <div class="form-age-god">-->
        <!--                            <select name="year" id="year" v-model="thisUser.year">-->
        <!--                                <option>1991</option>-->
        <!--                                <option>1992</option>-->
        <!--                                <option>1993</option>-->
        <!--                                <option>1994</option>-->
        <!--                                <option>1995</option>-->
        <!--                                <option>1996</option>-->
        <!--                                <option>1997</option>-->
        <!--                                <option>1998</option>-->
        <!--                                <option>1999</option>-->
        <!--                                <option>2000</option>-->
        <!--                                <option>2001</option>-->
        <!--                                <option>2002</option>-->
        <!--                                <option>2003</option>-->
        <!--                                <option>2004</option>-->
        <!--                                <option>2005</option>-->
        <!--                                <option>2006</option>-->
        <!--                            </select>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="form-team">-->
        <!--                <div class="form-team-d">-->
        <!--                    <div><h6>Город</h6></div>-->
        <!--                    <div>-->
        <!--                        <select name="city" id="city" v-model="thisUser.city">-->
        <!--                            <option>Москва</option>-->
        <!--                            <option>Казань</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="form-team-d">-->
        <!--                    <div><h6>Команда</h6></div>-->
        <!--                    <div>-->
        <!--                        <select name="team" id="team" v-model="thisUser.team">-->
        <!--                            <option>NCT</option>-->
        <!--                            <option>G-FAME</option>-->
        <!--                            <option>Zachet</option>-->
        <!--                            <option>Fenomen-A</option>-->
        <!--                            <option>NO-NAME</option>-->
        <!--                            <option>Titans</option>-->
        <!--                            <option>Grand-Arena</option>-->
        <!--                            <option>LEGION</option>-->
        <!--                            <option>NO-LIMIT</option>-->
        <!--                            <option>Power</option>-->
        <!--                            <option>Destiny</option>-->
        <!--                            <option>Groove</option>-->
        <!--                            <option>Insight</option>-->
        <!--                            <option>Фаворит</option>-->
        <!--                            <option>Кодекс</option>-->
        <!--                            <option>United</option>-->
        <!--                            <option>Husky</option>-->
        <!--                            <option>Другое</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="form-team-d">-->
        <!--                    <div><h6>Позиция</h6></div>-->
        <!--                    <div>-->
        <!--                        <select name="cheer" id="cheer" v-model="thisUser.cheer">-->
        <!--                            <option>База</option>-->
        <!--                            <option>Маутер</option>-->
        <!--                            <option>Флаер</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="btns">-->
        <!--            <div>-->
        <!--                <button type="submit" class="button" name="update" id="submit" onClick="submit" @click="sendData()">-->
        <!--                <span>-->
        <!--                    <b>Сохранить</b>-->
        <!--                </span>-->
        <!--                    <i>v</i>-->
        <!--                </button>-->
        <!--            </div>-->
        <!--            <div>-->
        <!--                <button type="submit" class="button2" name="update" id="submit" onClick="submit" @click="openModel()">-->
        <!--                <span>-->
        <!--                   <b>Удалить аккаунт</b>-->
        <!--                </span>-->
        <!--                </button>-->

        <!--            </div>-->
        <!--        </div>-->
    </div>

</template>

<script>
export default {
    props: {
        user: Object,
        dataupdate: String,
        delete: String,
    },
    data() {
        return {
            thisUser: this.user
        }
    },
    mounted() {
        this.thisUser()
    },
    methods: {


        sendData() {
            axios
                .get(this.dataupdate, {
                    params: {user: this.thisUser},
                })
                .then((response) => {
                    this.thisUser = response.data;
                    console.log(response.data);
                });
        },
        openModel() {
            this.modelOpen = true
        },
    },
};
</script>
