<template>
    <div>
        <div class="col-md-4 mx-auto rounded">
            <div class="col">
                <div class="ml-2">
                    <img class="img-fluid" src="../../../public/img/cheer.png" alt="" style="width: 500px">
                </div>
            </div>
        </div>
        <div class="col-md-4 mx-auto rounded m-4 text-light ">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Команда</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Команда"
                           required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Город</label>
                    <input type="text" class="form-control" name="lastname" id="lastname"
                           placeholder="Город"
                           required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Дисциплина</label>
                    <select class="form-select" name="person" id="person">
                        <option>Групповой стант</option>
                        <option>Партнёрский стант</option>
                        <option>Гость</option>
                    </select>
                </div>
            </div>
            <div class="form-row ml-4"><label for="validationCustom03"><h4>Состав</h4></label></div>
            <div class="form-row" v-for="(phone, index) in thisUser.pthones"
                 v-bind:key="index">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">ФИО</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="full_name"
                               v-model="phone.full_name"
                        >
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="validationCustom04">Футболка</label>
                    <select class="form-select" name="person" id="person"
                            v-model="phone.size"
                    >
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>2XL</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom03">ID telegram</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="phone" placeholder="@delewev"
                               v-model="phone.idTel"
                               required>
                    </div>
                </div>

                <div class="col-md-1 mb-3">
                    <label for="validationCustom03"></label>
                    <div class="input-group">
                        <button type="button" class="btn btn-success form-control mt-2" @click.prevent="sendData()">+</button>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="inputDate">Дата рождения</label>
                    <input type="date" class="form-control" name="full_name" id="day">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Команда</label>
                    <select class="form-select" name="person" id="person">
                        <option>Мужской</option>
                        <option>Женский</option>
                    </select>
                </div>
            </div>
            <button
                type="button"
                class="btn btn-outline-danger"
                @click="delPhone(index)"
            >
                -
            </button>
            <button class="btn btn-primary" type="submit" name="update"
                    id="submit" onClick="submit">
                Submit form
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "FestStore",
    props: {
        user: Object,
        festurl: String,
    },
    data() {
        return {
            thisUser: this.user,
            downloads: [],
            fileProgress: 0,
            fileCurrent: "",
        }
    },
    mounted() {
        this.sendData, console.log("Component mounted.");
    },

    methods: {
        addPhone() {
            if (this.thisUser.pthones == null) {
                this.thisUser.pthones = [{full_name: "", size: "", idTel: ""}];
            } else {
                this.thisUser.pthones.push({full_name: "", size: "", idTel: ""});
            }
        },
        delPhone(item) {
            console.log(item)
            this.thisUser.pthones.splice(item, 1)
        },
        sendData() {
            axios
                .get(this.dataupdate, {params: {user: this.thisUser}})
                .then((response) => {
                    // this.thisUser = response.data;
                    console.log(response.data);
                });
        },
    }
}
</script>

<style scoped>

</style>
