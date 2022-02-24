@if(auth()->user()->id == 1)
    <button type="button" class="btn btn-danger btn-sm" action-method="POST" button-type="delete"
            data-link="{{ route('admin.attendance.ajax.destroy', $atten -> id) }}">
        حذف
    </button>
@endif
