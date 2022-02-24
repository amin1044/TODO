<li class='kt-menu__item  kt-menu__item--submenu
{{ \App\Http\Helpers\Menu::routeIsActive('admin.attendance.index', 'kt-menu__item--open kt-menu__item--active') }}
{{ \App\Http\Helpers\Menu::routeStartsWith('admin.admin_attendance.index', 'kt-menu__item--open kt-menu__item--active') }}'
    aria-haspopup='true' data-ktmenu-submenu-toggle='hover'>
    <a href='javascript:;' class='kt-menu__link kt-menu__toggle'>
        <i class='kt-menu__link-icon fa-solid fa-user-check'></i>
        <span class='kt-menu__link-text'>..........</span>
        <i class='kt-menu__ver-arrow la la-angle-left'></i>
    </a>
    <div class='kt-menu__submenu'>
        <ul class='kt-menu__subnav'>
            <li class='kt-menu__item'>
                <a href='{{route('admin.attendance.index')}}' class='kt-menu__link'>
                    <i class='kt-menu__link-icon fa-solid fa-user'>
                        <span></span>
                    </i>
                    <span
                        class='kt-menu__link-text {{ \App\Http\Helpers\Menu::routeIsActive('admin.attendance.index', 'text-danger') }}'>
                       ...........
                    </span>
                </a>
            </li>
            @if(auth()->user()->id == 1)
                <li class='kt-menu__item'>
                    <a href='{{ route('admin.admin_attendance.index') }}' class='kt-menu__link'>
                        <i class='kt-menu__link-icon fa-solid fa-user-lock'>
                            <span></span>
                        </i>
                        <span
                            class='kt-menu__link-text {{ \App\Http\Helpers\Menu::routeIsActive('admin.admin_attendance.index', 'text-danger') }}'>
                        ..........
                    </span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</li>

