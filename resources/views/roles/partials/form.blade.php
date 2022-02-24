<div class="form-group row mb-30">
    {{--Begin name inputs--}}
    <div class="col-lg-6">
        <label for="title-input">نام</label>
        <input type="text" class="form-control" placeholder="لطفا نام را وارد نمایید." title="لطفا نام را وارد نمایید."
               name="name" id="name-input" value="{{ old('name') ?? $roles -> name }}" required>
    </div>
    {{--End name inputs--}}


    {{--Begin permission inputs--}}
    <div class="col-lg-6">
        <label for="category-input">دسترسی ها</label> <br>
        <select class="form-control kt-select2" name="permission[]" multiple="multiple"
                data-placeholder="لطفا دسترسی ها را انتخاب نمایید." title="لطفا دسترسی ها را انتخاب نمایید." required>

            @foreach($permission as $item)
                <option value="{{ $item->id }}"
                @if($rolePermissions != null)
                    @foreach($rolePermissions as $item2)
                        {{ (old('permission') ?? $item2->permission_id == $item->id) ? 'selected': '' }}
                        @endforeach
                @endif
                >{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    {{--End permission inputs--}}
</div>

@component('Components.Dashboard.Form.submit-button')@endcomponent

@push('scripts')
    {{--Select2 scripts--}}
    <script type="text/javascript">
        $(document).ready(function () {
            $('.kt-select2').select2({});
            $('.tags').select2({
                tags: true
            });
            $('#related-tag-selector').select2({
                tags: true
            });
        });
    </script>
@endpush
