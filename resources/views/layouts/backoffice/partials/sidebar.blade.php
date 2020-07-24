<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('application.create') }}" class="brand-link">
        <img src="{{ asset('front/img/ainfp-ftf.png') }}"
         class="brand-image"
         style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size: .9em;">
            {{ config('app.name') }}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('application.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Applications</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>