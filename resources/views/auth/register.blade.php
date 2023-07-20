@extends('frontend.master')

@section('content')


<!-- Main content Start -->
<div class="main-content" style="padding: 200px 0px 100px 0px">
    <!-- Register Section -->
    <section class="register-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-10 mx-auto p-4" style="border: 1px solid #bf9456">
                    <div class="register-box">

                        <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Create New Account</h2>
                        </div>

                        <!-- Login Form -->
                        <div class="styled-form">
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 mb-25">
                                        <input id="name" type="text" class="form-control" name="name" type="text" placeholder="Username" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input id="email" type="email"  class="form-control"  name="email" type="text" placeholder="Email" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input id="pwd" name="password" class="form-control"  placeholder="Password" type="password" >
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input id="pwd_2" name="password_confirmation" class="form-control"  placeholder="Confirm Password"  type="password" >
                                    </div>


                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="ttm-btn ttm-btn-style-fill ttm-btn-color-skincolor"><span class="txt">Sign Up</span></button>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users text-center">Already have an account? <a href="{{route('login')}}">Sign In</a></div>
                                    </div>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Login Section -->

</div>
<!-- Main content End -->
@endsection
