<div class="profile-address">
    <div class="middle-container">
        <form method="post" action="{{route('FrontEnd.user.update_user',['id'=>$users->id])}}" class="form-checkout">
            @csrf
            @method('post')
            <div class="form-checkout-row">
                <label for="namefirst">نام <abbr class="required" title="ضروری"
                                                 style="color:red;">*</abbr></label>
                <input type="text" id="namefirst"
                       name="name"
                       value="{{ old('name') ?? $users -> name }}"
                       class="input-namefirst-checkout form-control">
                <label for="email">ایمیل <abbr class="required" title="ضروری"
                                               style="color:red;">*</abbr></label>
                <input type="email" id="email" name="email" value="{{ old('email') ?? $users -> email }}"
                       class="input-email-checkout form-control">

                <label for="mobile">موبایل <abbr class="required" title="ضروری"
                                                 style="color:red;">*</abbr></label>
                <input type="number" id="mobile" name="mobile" value="{{ old('mobile') ?? $users -> mobile }}"
                       class="input-email-checkout form-control">

                <label for="password">رمز عبور جدید <abbr class="required"
                                                          title="ضروری" style="color:red;">*</abbr></label>
                <input type="text" id="password" name="password" placeholder="رمزعبور خود را وارد کنید"
                       class="input-password-checkout form-control">


                <div class="AR-CR">
                    <button class="btn-registrar"> ثبت تغییرات</button>
                    <a href="{{route('FrontEnd.user.users')}}" class="cancel-edit-address" data-dismiss="modal"
                       aria-label="Close">بازگشت</a>
                </div>
            </div>
        </form>
    </div>
</div>

