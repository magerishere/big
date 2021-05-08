@extends('frontend.layouts.main')


@section('main')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-12 mb-5">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#register" type="button" role="tab" aria-controls="login"
                                    aria-selected="true">ثبت نام</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#login"
                                    type="button" role="tab" aria-controls="register" aria-selected="false">ورود</button>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="register" role="tabpanel"
                                aria-labelledby="register-tab">
                                <form id="form-register">
                                    <div class="mb-3">
                                        <label class="form-label" for="fname">نام</label>
                                        <input type="text" name="fname" class="form-control rounded-pill" placeholder="علی">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="lname">نام خانوادگی</label>
                                        <input type="text" name="lname" class="form-control rounded-pill"
                                            placeholder="خوشکار">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username">نام کاربری</label>
                                        <input type="text" name="username" class="form-control rounded-pill"
                                            placeholder="نام کاربری">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">رمزعبور</label>
                                        <input type="password" name="password" id="password"
                                            class="form-control rounded-pill" placeholder="بیشتر از 8 رقم">

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password_confirmation">تکرار رمزعبور</label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control rounded-pill">

                                    </div>
                                    <button id="registerBtn" type="submit" class="btn btn-primary py-2 px-4 mx-2">ثبت
                                        نام</button>
                                </form>

                            </div>
                            <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <form id="form-login">

                                    <div class="mb-3">
                                        <label class="form-label" for="username">نام کاربری</label>
                                        <input type="text" name="username" class="form-control rounded-pill">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">رمزعبور</label>
                                        <input type="password" name="password" class="form-control rounded-pill">
                                    </div>

                                    <button id="loginBtn" type="submit" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample"
                                        class="btn btn-primary py-2 px-4">ورود</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="card bg-aliceblue">
                    <div class="card-header">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item mx-auto" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#register" type="button" role="tab" aria-controls="login"
                                    aria-selected="true">
                                    <h5>امکانات سایت</h5>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">

                        <ul class="list-group">
                            <li class="list-group-item border-0 mb-2 fw-bold bg-aliceblue"><i
                                    class="fa fa-check text-primary" aria-hidden="true"></i>چت روم آنلاین (میتونی با دوستات
                                ساعت ها صحبت کنی بدون حتی یک ریال هزینه)</li>
                            <li class="list-group-item border-0 mb-2 fw-bold bg-aliceblue"><i
                                    class="fa fa-check text-primary" aria-hidden="true"></i>فروشگاه (خرید سریع و تحویل آنی
                                کالا با بهترین کیفیت و ضمانت! هزینه ارسالم رایگانه)</li>
                            <li class="list-group-item border-0 mb-2 fw-bold bg-aliceblue"><i
                                    class="fa fa-check text-primary" aria-hidden="true"></i>بلاگ (میتونی مطلب ایجاد کنی و
                                امتیاز بگیری تا بتونی تو امتیاز کلاب استفاده کنی)</li>
                            <li class="list-group-item border-0 mb-2 fw-bold bg-aliceblue"><i
                                    class="fa fa-check text-primary" aria-hidden="true"></i>ایمیل (این هم مثل چت روم کاملا
                                رایگانه و میتونی استفادش کنی!)</li>
                            <li class="list-group-item border-0 mb-2 fw-bold bg-aliceblue"><i
                                    class="fa fa-check text-primary" aria-hidden="true"></i>امتیاز کلاب (میتونی باهاش کد
                                تحفیف، دنبال کننده و کلی چیزای دیگه بگیری)</li>
                        </ul>


                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection


@section('footer')
    <script>
        $(document).ready(function() {
            $('#form-register').validate({
                rules: {
                    fname: {
                        required: true,
                        minlength: 3,
                        "persian-letters": /^[آ-ی]+$/,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                    },
                    lname: {
                        required: true,
                        minlength: 3,
                        "persian-letters": /^[آ-ی]+$/,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                    },
                    username: {
                        required: true,
                        minlength: 3,
                        "letters": /^[A-Za-zآ-ی]+$/,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        "white-space": /\S+/,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: "#password",
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                    },
                },

            });
            $('#form-login').validate({
                rules: {
                    username: {
                        required: true,
                        "white-space": /\S+/,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                    },
                    password: {
                        required: true,
                        "white-space": /\S+/,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                    },
                },
            });
            jQuery.extend(jQuery.validator.messages, {
                required: "الزامیست",
                remote: "votre message",
                email: "ایمیل معتبر وارد کنید",
                url: "votre message",
                date: "votre message",
                dateISO: "votre message",
                number: "votre message",
                digits: "votre message",
                creditcard: "votre message",
                equalTo: "رمزعبور با تکرار آن همخوانی ندارد",
                accept: "votre message",
                maxlength: jQuery.validator.format("votre message {0} caractéres."),
                minlength: jQuery.validator.format("باید بیشتر از {0} کاراکتر باشد."),
                rangelength: jQuery.validator.format("votre message  entre {0} et {1} caractéres."),
                range: jQuery.validator.format("votre message  entre {0} et {1}."),
                max: jQuery.validator.format("votre message  inférieur ou égal à {0}."),
                min: jQuery.validator.format("votre message  supérieur ou égal à {0}.")
            });

            jQuery.validator.addMethod(
                "letters",
                function(value, element, regexp) {
                    if (regexp.constructor != RegExp)
                        regexp = new RegExp(regexp);
                    else if (regexp.global)
                        regexp.lastIndex = 0;
                    return this.optional(element) || regexp.test(value);
                }, "بدون شماره و بدون فاصله وارد کنید"
            );
            jQuery.validator.addMethod(
                "persian-letters",
                function(value, element, regexp) {
                    if (regexp.constructor != RegExp)
                        regexp = new RegExp(regexp);
                    else if (regexp.global)
                        regexp.lastIndex = 0;
                    return this.optional(element) || regexp.test(value);
                }, "به صورت فارسی و بدون فاصله وارد کنید"
            );
            jQuery.validator.addMethod(
                "white-space",
                function(value, element, regexp) {
                    if (regexp.constructor != RegExp)
                        regexp = new RegExp(regexp);
                    else if (regexp.global)
                        regexp.lastIndex = 0;
                    return this.optional(element) || regexp.test(value);
                }, "بدون فاصله وارد کنید"
            );


        });

    </script>
@endsection
