@extends('backend.layouts.main')



@section('main')
    <div class="col-md-10 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4>داشبورد</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-3">
                            <div class="card">
                                <div class="card-header text-center">
                                    <a href="{{ route('messages') }}" class="nav-link">
                                        <h5>پیام ها <i class="fa fa-envelope" aria-hidden="true"></i> (30)</h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="card">
                                <div class="card-header text-center">
                                    <a href="#" class="nav-link">
                                        <h5>خرید ها <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> (30)</h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="card">
                                <div class="card-header text-center">
                                    <a href="#" class="nav-link">
                                        <h5>یادداشت ها <i class="fa fa-pencil-square-o" aria-hidden="true"></i> (30)
                                        </h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="card">
                                <div class="card-header text-center">
                                    <a href="#" class="nav-link">
                                        <h5>مطالب <i class="fa fa-address-card" aria-hidden="true"></i> (30)</h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mt-5">
                        <div class="card">

                            <div class="card-header border-bottom-0">

                                <ul class="nav nav-tabs" id="dashboard-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="true">مشخصات</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="custom-tab" data-bs-toggle="tab"
                                            data-bs-target="#custom" type="button" role="tab" aria-controls="custom"
                                            aria-selected="true">شخصی سازی</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="setting-tab" data-bs-toggle="tab"
                                            data-bs-target="#setting" type="button" role="tab" aria-controls="setting"
                                            aria-selected="false">تنظیمات</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <form id="form-edit" action="">
                                            <a href="javascript:void(0)" id="image-avatar" class="c-auto">
                                                <img src="{{ asset('assets/images/avatar.png') }}" alt="avatar"
                                                    class="rounded-pill">
                                            </a>
                                            <a href="javascript:void(0)" id="editPencil" class="float-end">
                                                <h1>
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                </h1>
                                            </a>
                                            <input type="file" name="image" id="file-input" class="d-none">
                                            <div class="row">
                                                <div class="col-md-6 col-12 mb-3">
                                                    <label for="fname" class="form-label">نام</label>
                                                    <input type="text" class="form-control" name="fname" id="fname"
                                                        value="علی" disabled>
                                                </div>
                                                <div class="col-md-6 col-12 mb-3">
                                                    <label for="lname" class="form-label">نام خانوادگی</label>
                                                    <input type="text" class="form-control" name="lname" id="lname"
                                                        value="خوشکار" disabled>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-12 mb-3">
                                                    <label for="fname" class="form-label">ایمیل</label>
                                                    <input type="text" class="form-control" name="fname" id="fname"
                                                        value="immagerishere@gmail.com" disabled>

                                                </div>
                                                <div class="col-md-6 col-12 mb-3">
                                                    <label for="lname" class="form-label">آدرس</label>
                                                    <input type="text" class="form-control" name="lname" id="lname"
                                                        value="تهران خیابان کوچه پلاک" disabled>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary py-2 px-2 d-none"
                                                id="editBtn">ویرایش
                                                پروفایل</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade d-flex justify-content-between" id="custom" role="tabpanel"
                                        aria-labelledby="custom-tab">

                                        <button type="button" class="btn btn-light border theme-color-set"
                                            data-value="default">پیش فرض</button>
                                        <button type="button" class="btn btn-primary theme-color-set"
                                            data-value="bg-primary text-light border-light"> آبی پررنگ</button>
                                        <button type="button" class="btn btn-danger theme-color-set"
                                            data-value="bg-danger text-light border-light">قرمز</button>
                                        <button type="button" class="btn btn-warning theme-color-set"
                                            data-value="bg-warning text-dark border-dark">زرد</button>
                                        <button type="button" class="btn btn-info theme-color-set"
                                            data-value="bg-info text-dark border-dark">آبی
                                            کمرنگ</button>
                                        <button type="button" class="btn btn-success theme-color-set"
                                            data-value="bg-success text-light border-light">سبز</button>
                                        <button type="button" class="btn btn-secondary theme-color-set"
                                            data-value="bg-secondary text-light border-light">طوسی</button>
                                        <button type="button" class="btn btn-dark theme-color-set"
                                            data-value="bg-dark text-light border-light">مشکی</button>


                                    </div>
                                    <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                                        <form action="">
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="username" class="form-label">نام کاربری</label>
                                                <input type="text" class="form-control" name="username" id="username">
                                            </div>
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="oldPassword" class="form-label">رمزعبور فعلی</label>
                                                <input type="text" class="form-control" name="oldPassword" id="oldPassword">
                                            </div>
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="password" class="form-label">رمزعبور جدید</label>
                                                <input type="text" class="form-control" name="password" id="password">
                                            </div>
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="password_confirmation" class="form-label">تکرار رمزعبور
                                                    جدید</label>
                                                <input type="text" class="form-control" name="password_confirmation"
                                                    id="password_confirmation">
                                            </div>

                                            <button type="submit" class="btn btn-primary py-2 px-2">ویرایش رمزعبور</button>
                                            <span class="text-danger">پس از ثبت ویرایش به صورت خودکار از اکانت خارج میشوید
                                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </div>
@endsection


@section('footer')
    <script>
       
        $('#editPencil').click(function() {
                $(this).hide();
                $('.c-auto').removeClass('c-auto');
                $('#editBtn').removeClass('d-none');
                $('.form-control').each(function() {
                    $(this).attr('disabled', false);
                });
            }),

            $('#image-avatar').click(function() {
                $('#editPencil').is(':hidden') && $('#file-input').click();
            });

        /* Themes Handler */
        $('.theme-color-set').click(function() {
            const oldColor = localStorage.getItem('theme-color');
            const newColor = $(this).data('value');
            $('.card-header').each(function() {
                $(this).removeClass(oldColor);
                newColor != 'default' && $(this).addClass(newColor);
            });
            $('.nav-link').each(function() {
                $(this).removeClass(oldColor);
                newColor != 'default' && $(this).addClass(newColor);
            });
            $('.nav').each(function() {
                $(this).removeClass(oldColor);
                newColor != 'default' && $(this).addClass(newColor);
            });
            newColor == 'default' ? localStorage.removeItem('theme-color') : localStorage.setItem('theme-color',
                newColor);
        });

    </script>
@endsection
