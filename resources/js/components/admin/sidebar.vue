<template>
    <section>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </form>
        </nav>
         <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ asset('index3.html') }}" class="brand-link">
            <img src="{{ asset('assets/img/logo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3"
                style="margin-left: -0.2rem;max-height: 25px;">
            <span class="brand-text font-weight-light">Organic</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
            </div> --}}

            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                <router-link to="/admin/dashboard" class="nav-link"><i class="nav-icon fas fa-chart-bar"></i>
                    <p>
                    Dashboard
                    </p>
                </router-link>
                </li>
                <li class="nav-item">
                <router-link to="/admin/category" class="nav-link"><i class="nav-icon fas fa-tags"></i>
                <p>
                    Category
                </p>
                </router-link>
                </li>
                <li class="nav-item">
                <router-link to="/admin/products" class="nav-link"><i class="nav-icon fas fa-tags"></i>
                <p>
                    Products
                </p>
                </router-link>
                </li>
                <li class="nav-item">
                <router-link to="/admin/enquiry" class="nav-link"><i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Enquiry
                </p>
                </router-link>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Sign Out
                </p>
                </a>
                </li>
            </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
        </aside>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
    </section>
</template>
<script>
export default {
    
}
</script>