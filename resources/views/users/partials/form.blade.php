<div class="form-group row mb-30">
    {{--Begin name inputs--}}
    <div class="col-lg-6">
        <label for="title-input">نام کاربری</label>
        <input type="text" class="form-control" placeholder="لطفا نام کاربری را وارد نمایید."
               title="لطفا نام کاربری را وارد نمایید."
               name="name" id="name-input" value="{{ old('name') ?? $users -> name }}" required>
    </div>
    {{--End name inputs--}}

    {{--Begin mobile inputs--}}
    <div class="col-lg-6">
        <label for="mobile-input">شماره تماس</label>
        <input type="number" class="form-control" placeholder="لطفا شماره تماس را وارد نمایید."
               title="لطفا شماره تماس را وارد نمایید."
               name="mobile" id="mobile-input" value="{{ old('mobile') ?? $users -> mobile }}" required>
    </div>
    {{--End mobile inputs--}}

    {{--Begin email inputs--}}
    <div class="col-lg-6">
        <label for="title-input">ایمیل</label>
        <input type="email" class="form-control" placeholder="لطفا ایمیل را وارد نمایید."
               title="لطفا ایمیل را وارد نمایید."
               name="email" id="email-input" value="{{ old('email') ?? $users -> email }}" required>
    </div>
    {{--End email inputs--}}

    {{--Begin: password input--}}
    <div class="col-lg-6">
        <label for="password-input">رمزعبور</label>
        <input type="password" class="form-control" placeholder="لطفا رمزعبور کاربر را وارد نمایید."
               id="password-input" name="password" value="{{ old('password') }}">
    </div>
    <div class="col-lg-6">
        <label for="confirm-password-input">رمزعبور</label>
        <input type="password" class="form-control" placeholder="لطفا رمزعبور کاربر را تکرار وارد نمایید."
               id="name-input"
               name="confirm-password" value="{{ old('confirm-password') }}">
    </div>
    {{--End: password input--}}

    {{--Begin: roles input--}}
    <div class="col-lg-6">
        <label for="category-input">نقش ها</label> <br>
        <select class="form-control kt-select2" name="roles[]" multiple="multiple"
                data-placeholder="لطفا نقش کاربر را انتخاب نمایید." title="لطفا نقش کاربر را انتخاب نمایید." required>

            @foreach($roles as $item)
                <option value="{{ $item->id }}"
                @foreach($userRole as $item2)
                    {{ (old('roles') ?? $item2->id == $item->id) ? 'selected': '' }}
                    @endforeach
                >{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    {{--    End roles inputs--}}
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
