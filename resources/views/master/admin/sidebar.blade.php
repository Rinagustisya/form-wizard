<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- link icon -->
        @can('role','admin')
        <x-nav-item label="Dashboard" icon="fas fa-tachometer-alt" :link="route('dashboard')"/>
        <x-nav-item label="Monitoring" icon="fas fa-desktop" :link="route('admin.monitoring')"/>
        @endcan

        @can('role','pengelola')
        <x-nav-item label="Dashboard" icon="fas fa-tachometer-alt" :link="route('dashboard')"/>
        <x-nav-item label="Monitoring" icon="fas fa-desktop" :link="route('pengelola.monitoring')"/>
        @endcan
        <!-- end link icon -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>