<li class="kt-menu__item
{{ \App\Http\Helpers\Menu::routeIsActive('todo.index', 'kt-menu__item--open kt-menu__item--active') }}"
    aria-haspopup="true">
    <a href="{{ route('todo.index') }}" class="kt-menu__link ">
        <i class="kt-menu__link-icon far fa-comment-dots"></i>
        <span class="kt-menu__link-text"> کار هاا</span>
    </a>
</li>
