@extends('backend.layouts.main')


@section('main')
    <div class="col-md-10 col-12">
        <div class="card">
            <div class="card-header text-center">
                <h4>پیام ها</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-2">

                        @include('backend.messages.layouts.sidebar')
                    </div>

                    <div class="col-md-10">
                        <div class="card list-messages">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <img src="{{ asset('assets/images/avatar.png') }}" alt="avatar"
                                                class="rounded-pill d-inline-block message-sender-image">
                                            <h5 class="d-inline-block message-sender">علی خوشکار </h5>

                                            <span class="message-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                                چاپگرها ...
                                            </span>


                                            <div class="float-end">
                                                <i class="fa fa-star-o mx-2 star" aria-hidden="true"></i>
                                                <i class="fa fa-trash mx-2" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                    </li>

                                    <li class="list-group-item">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <img src="{{ asset('assets/images/avatar.png') }}" alt="avatar"
                                                class="rounded-pill d-inline-block message-sender-image">
                                            <h5 class="d-inline-block message-sender">محمود </h5>

                                            <span class="message-body">
                                                امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان
                                       
                                            </span>


                                            <div class="float-end">
                                                <i id="star" class="fa fa-star-o mx-2 star" aria-hidden="true"></i>
                                                <i class="fa fa-trash mx-2" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>

                        @include('backend.messages.layouts.message')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    <script>
        $('.star').click(function(e) {
            e.stopPropagation();
            $(this).toggleClass('fa-star-o');
            $(this).toggleClass('fa-star');
        });

        $('input[type="checkbox"]').click(function(e) {
            e.stopPropagation();
            $(this).parent().parent().toggleClass('checked');
        });

        $('.list-group-item').click(function(e) {
            $('.list-messages').hide();
            $('#message').show();
            const sender = $(this).find('.message-sender').text();
            const body = $(this).find('.message-body').text();
            const image = $(this).find('.message-sender-image').attr('src');
            console.log(image);
            $('#message').find('#message-sender').text(sender)
            $('#message').find('#message-sender-image').attr('src', image)
            $('#message').find('#message-body').text(body)

        });

        $('.fa-arrow-left').click(function() {
            $('#message').hide();
            $('.list-messages').show();
        });

    </script>
@endsection
