@extends('admin.master')
@section('body')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">

            @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="card-body">
                <form class="form-horizontal" action="{{route('update.banner.title',['id'=>$banner_title->id])}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" rows="5" value="{{$banner_title->title}}" name="title" id="name" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Small Details</label>
                        <textarea  class="form-control" rows="10" name="small_details">{{$banner_title->small_details}}</textarea>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label>Image</label>--}}
{{--                        <input type="file" name="image" class="form-control">--}}
{{--                        <img src="{{asset($banner_title->image)}}" height="100" width="400" alt="">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Select Page for the title and banner</label>
                        <select class="form-control" name="page">
                            <option value="" disabled selected>Select Page</option>
                            <option value="service" {{$banner_title->page == 'service'?'selected':''}}>Service</option>
                            <option value="category" {{$banner_title->page == 'category'?'selected':''}}>Category</option>
                            <option value="products" {{$banner_title->page == 'products'?'selected':''}}>Products</option>
                            <option value="blogs" {{$banner_title->page == 'blogs'?'selected':''}}>Blogs</option>
                            <option value="contacts" {{$banner_title->page == 'contacts'?'selected':''}}>Contacts</option>
                            <option value="login" {{$banner_title->page == 'login'?'selected':''}}>Login</option>
                            <option value="register {{$banner_title->page == 'register'?'selected':''}}">Register</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea#default'
    });
</script>
@endsection
