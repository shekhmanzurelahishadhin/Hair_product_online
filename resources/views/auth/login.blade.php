@extends('frontend.master')

@section('content')

<!-- Main content Start -->
<div class="main-content" style="padding: 200px 0px 100px 0px">


    <!-- My Account Section Start -->
    <div class="rs-login">
        <div class="container" >
            <div class="noticed">
                <div class="main-part">
                    <div class="row">
                        <div class="col-md-6 col-10 mx-auto p-4" style="border: 1px solid #bf9456">
                            <div class="method-account">
                                <h2 class="login">Login</h2>
                                @if(session('error'))
                                    <p class="text-danger">{{session('error')}}</p>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    {{--                            <input type="email" name="E-mail" placeholder="E-mail" required="">--}}
                                    <input id="email" type="email" placeholder="email" class="form-control my-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    <input id="password" type="password" placeholder="password" class="form-control my-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <button type="submit" class="ttm-btn ttm-btn-style-fill ttm-btn-color-skincolor my-3">login</button>
                                    <div class="last-password">
                                        <p>Not registered? <a href="{{route('register')}}">Create an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- My Account Section End -->

</div>
<!-- Main content End -->
<!-- Content wrapper end -->
@endsection
