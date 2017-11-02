<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">GESTIÓN</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-user'></i> <span>Trabajador</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Gestionar Trabajador</a></li>
                    <li><a href="#">Datos Laborales</a></li>
                    <li><a href="#">Documentos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-archive'></i> <span>Documentación</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Carga de Documentos</a></li>
                    <li><a href="#">Lista Documentación</a></li>
                    <li><a href="#">Informes Documentales</a></li>
                </ul>
            </li>
            <li class="header">ADMINISTRACIÓN</li>
            <li class><a href="#"><i class='fa fa-building'></i> <span>Empresa</span></a></li>
            <li class><a href="#"><i class='fa fa-folder'></i> <span>Categorías</span></a></li>
            <li class="header">SISTEMA</li>
            <li class><a href="#"><i class='fa fa-gear'></i> <span>Usuarios / Accesos</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
