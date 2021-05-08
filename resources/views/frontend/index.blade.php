@extends('frontend.layouts.main')


@section('main')

    <div class="container-fluid mb-5">
        @include('frontend.index.layouts.slider')
    </div>
    <hr>
    <div class="container mt-5">
        <div class="row">

            <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                <div class="card mb-3">
                    <img src="{{ asset('assets/images/blog.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">عنوان مطلب</h5>
                        <p class="card-text">طرح‌نما یا لورم ایپسوم به نوشتاری آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و
                            طراحی گرافیک گفته می‌شود. طراح گرافیک از این نوشتار به‌عنوان عنصری از ترکیب‌بندی برای پُر کردن
                            صفحه و ارائهٔ اولیهٔ شکل ظاهری و کلیِ طرح سفارش‌گرفته‌شده‌استفاده می‌کند، تا ازنظر گرافیکی
                            نشانگر چگونگی نوع و اندازهٔ قلم و ظاهرِ متن باشد</p>
                        <div class="row">
                            <div class="col-md-3 col-4">
                                <a href="#" class="btn btn-primary">ادامه مطلب</a>
                            </div>
                            <div class="col-md-3 d-none d-md-block"></div>
                            <div class="col-md-6 col-8 details-blog">
                                <div class="row">
                                    <div class="col-md-4 col-5">
                                        <p class="card-text">
                                            <small class="text-muted">سه دیقه پیش <i class="fa fa-pencil"
                                                    aria-hidden="true"></i></small>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <p class="card-text">
                                            <small class="text-muted">24,000 <i class="fa fa-eye"
                                                    aria-hidden="true"></i></small>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <p class="card-text">
                                            <small class="text-muted">24,00<i class="fa fa-comment-o" aria-hidden="true"></i></small>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                @include('frontend.index.layouts.sidebar')
            </div>



        </div>
    </div>
@endsection
