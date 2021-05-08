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
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="form-check">
                                        

                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    سلام خوبی
                                                </label>
                                            

                                            <div class="float-end">

                                                <ul class="list-group">

                                                    <li class="list-group-item">
                                                        <i id="star" class="fa fa-star-o mx-2" aria-hidden="true"></i>
                                                        <i class="fa fa-trash mx-2" aria-hidden="true"></i>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
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
        $('#star').click(function() {
            $(this).toggleClass('fa-star-o');
            $(this).toggleClass('fa-star');
        });

    </script>
@endsection
