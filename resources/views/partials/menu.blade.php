<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('encuestum_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/agentes-educativos*") ? "menu-open" : "" }} {{ request()->is("admin/cats-owners-anwers*") ? "menu-open" : "" }} {{ request()->is("admin/dogs-owners-anwers*") ? "menu-open" : "" }} {{ request()->is("admin/vet-answers*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-list">

                            </i>
                            <p>
                                {{ trans('cruds.encuestum.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('agentes_educativo_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.agentes-educativos.index") }}" class="nav-link {{ request()->is("admin/agentes-educativos") || request()->is("admin/agentes-educativos/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-graduate">

                                        </i>
                                        <p>
                                            {{ trans('cruds.agentesEducativo.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cats_owners_anwer_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cats-owners-anwers.index") }}" class="nav-link {{ request()->is("admin/cats-owners-anwers") || request()->is("admin/cats-owners-anwers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-github">

                                        </i>
                                        <p>
                                            {{ trans('cruds.catsOwnersAnwer.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('dogs_owners_anwer_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.dogs-owners-anwers.index") }}" class="nav-link {{ request()->is("admin/dogs-owners-anwers") || request()->is("admin/dogs-owners-anwers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-paw">

                                        </i>
                                        <p>
                                            {{ trans('cruds.dogsOwnersAnwer.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('vet_answer_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.vet-answers.index") }}" class="nav-link {{ request()->is("admin/vet-answers") || request()->is("admin/vet-answers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-md">

                                        </i>
                                        <p>
                                            {{ trans('cruds.vetAnswer.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('departamento_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.departamentos.index") }}" class="nav-link {{ request()->is("admin/departamentos") || request()->is("admin/departamentos/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-map-marked-alt">

                            </i>
                            <p>
                                {{ trans('cruds.departamento.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('ciudade_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.ciudades.index") }}" class="nav-link {{ request()->is("admin/ciudades") || request()->is("admin/ciudades/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-map-pin">

                            </i>
                            <p>
                                {{ trans('cruds.ciudade.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>