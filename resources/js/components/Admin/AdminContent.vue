<template>
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-door-open"></i> <span>Выход</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <span class="brand-text font-weight-light mx-auto rounded">MILLENNIUM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                               aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2"
                     :class="isLoading ? 'item-disabled' : ''">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">ADMIN PANEL</li>
                        <li class="nav-item"
                            :class="isActive('team')"
                            @click="selecteBord('team')">
                            <a  class="nav-link">
                                <div class="nav-custom-item mr-3 text-nowrap "
                                >Команды
                                </div>
                            </a>
                        </li>
                        <li class="nav-item"
                            :class="isActive('users')"
                            @click="selecteBord('users')"
                        >
                            <a class="nav-link">
                                <div class="nav-custom-item mr-3 text-nowrap "

                                >Пользователи
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div>
                    <team v-if="selectedBord == 'team'"/>


                    <users v-if="selectedBord == 'users'"/>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

</template>

<script>
import Team from "./team.vue";
import Users from "./users.vue";

export default {
    name: "Admin",
    components: {Users, Team},



    data(){
        return {
            selectedBord: "team",
            isLoading: false,
        }
    },

    methods: {
        selecteBord(key) {
            if (!this.isLoading) {
                this.selectedBord = key;
            }
        },

        isActive(tab) {
            let nameClass = "";
            if (this.isLoading) nameClass = "item-disabled";
            if (tab == this.selectedBord)
                nameClass += " nav-custom-item-active";
            return nameClass;
        },
    }

}
</script>

<style scoped>

</style>
