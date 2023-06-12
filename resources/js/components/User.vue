<template>
    <div class="col-md-4 mx-auto rounded m-4 text-light  ">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Имя</label>
                <input type="text" class="form-control" name="name" id="name" v-model="thisUser.name" placeholder="Имя"
                       required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Фамилия</label>
                <input type="text" class="form-control" name="lastname" id="lastname" v-model="thisUser.lastname"
                       placeholder="Фамилия"
                       required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Имя пользователя</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" name="slug" id="slug" v-model="thisUser.slug"
                           placeholder="Имя пользователя"
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
                <input type="text" class="form-control" name="city" id="city" v-model="thisUser.city"
                       placeholder="Город" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="inputDate">Дата рождения</label>
                <input type="date" class="form-control" name="day" id="day" v-model="thisUser.date">
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom04">Команда</label>
                <select class="form-select" name="person" id="person">
                    <option>Мужской</option>
                    <option>Женский</option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="update"
                id="submit" onClick="submit" @click="sendData()">
            Submit form
        </button>
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
