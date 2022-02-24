@if(!$roles->deleted_at)
    <button type="button" class="btn btn-danger btn-sm" action-method="POST" button-type="delete"
            data-link="{{ route('admin.roles.ajax.destroy', $roles -> id) }}">
        حذف
    </button>
    <a href="{{ route('admin.roles.edit', $roles -> id) }}" class="btn btn-primary btn-sm">
        ویرایش
    </a>
@elseif($roles->deleted_at)
    <button type="button" class="btn btn-primary btn-block btn-sm" action-method="POST" button-type="restore"
            data-id="{{ $roles -> id }}" data-link="{{ route('admin.roles.ajax.restore') }}">
        بازگردانی
    </button>
@endif
