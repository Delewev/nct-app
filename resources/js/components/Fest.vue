<template>
    <div class="bradcam_area bradcam_bg_1 row">
        <div class="row col-md-6 mx-auto rounded">
            <div class="col align-self-center">
                <div class="row ">
                    <div class="mb-3">
                        <div class="bradcam_text text-white">
                            <h2> Cheer Stunt Fest 2023 </h2>
                        </div>
                    </div>
                    <button type="button" class="col-md-6 btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                        Добавить
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Добавить Команду</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Название</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Город</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Логотип (PNG)</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Назад</button>
                                    <button type="button" class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ml-2">
                    <img class="img-fluid" src="../../../public/img/Login-foto.png" alt="" style="width: 500px" >
                </div>
            </div>
        </div>


    </div>
</template>

<script>
export default {
    name: "Admin"
}
</script>

<style scoped>

</style>
