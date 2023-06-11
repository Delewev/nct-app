<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Команды</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавить Команду</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div v-if="validationErrors" class="alert alert-danger">
                                <ul>
                                    <li v-for="(value, index) in validationErrors"
                                        :key="index">
                                        {{ value }}
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Название</label>
                                <input type="text" class="form-control" id="name" v-model="name"
                                       placeholder="Example input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Город</label>
                                <input type="text" class="form-control" id="city" v-model="city"
                                       placeholder="Another input">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Логотип (PNG)</label>
                                <div ref="dropzone" type="button" class="btn d-block bg-dark"
                                     id="exampleFormControlFile1">Лого
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button @click="addTeams" class="btn btn-primary">Добавить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Логотип</th>
                    <th scope="col">Город</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </section>
        <!-- /.content -->
    </div>
</template>

<script>
import Users from "./users.vue";
import Dropzone from 'dropzone';

export default {
    name: "team",
    components: {Users},
    data() {
        return {
            dropzone: null,
            name: '',
            city: '',
            errors: false,
            validationErrors: '',
            showModal: null
        }
    },
    mounted() {
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: 'shdjhsjd',
            autoProcessQueue: false,
        })
    },

    methods: {

        addTeams() {
            const data = new FormData()
            const files = this.dropzone.getAcceptedFiles()
            files.forEach(file => {
                data.append('images[]', file)
            })
            data.append('name', this.name)
            data.append('city', this.city)
            axios.post('/teams', data)
                .catch(error => {
                    if (error.response.status === 422) {
                        this.validationErrors = error.response.data.errors
                    }
                })
        },
    },
    computed: {
        validationErrors() {
            let errors = Object.values(this.errors)
            errors = errors.flat()
            return errors
        }
    }
}
</script>

<style scoped>

</style>
