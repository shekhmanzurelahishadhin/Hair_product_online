@extends('admin.master')
@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('update.product')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="id">

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" rows="5" name="name" value="{{$product->name}}" id="service_title" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control"  id="cars">
                                <option selected disabled>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$product->category_id==$category->id?'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" min="0" class="form-control" rows="5" name="price" value="{{$product->price}}" id="service_title" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="main_image" class="form-control">
                            <img src="{{asset($product->main_image)}}" width="100px" height="100px">
                        </div>

                        <div class="form-group">
                            <label>Product Small Details</label>
                            <textarea  id="tinymce" class="editor form-control" col="10" row="3" name="product_details_small">{{$product->product_details_small}}</textarea>
                        </div>
                        <h3>Details page information</h3>

                        <div class="form-group">
                            <label>Details Image one</label>
                            <input type="file" name="details_image1" class="form-control">
                            <img src="{{asset($product->details_image1)}}" width="100px" height="100px">

                        </div>
                        <div class="form-group">
                            <label>Details Image two</label>
                            <input type="file" name="details_image2" class="form-control">
                            <img src="{{asset($product->details_image2)}}" width="100px" height="100px">

                        </div>
                        <div class="form-group">
                            <label>Details Image three</label>
                            <input type="file" name="details_image3" class="form-control">
                            <img src="{{asset($product->details_image3)}}" width="100px" height="100px">

                        </div>



                        <div class="form-group">
                            <label>Product Long Details one</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="product_details1">{{$product->product_details1}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Long Details two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="product_details2">{{$product->product_details2}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Long Details three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="product_details3">{{$product->product_details3}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1" {{$product->add_home==1?'selected':''}}>Yes</option>
                                <option value="0" {{$product->add_home==0?'selected':''}}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="status">
                                <option value="1" @if ($product->status == 1) selected @endif>Active</option>
                                <option value="0" @if ($product->status == 0) selected @endif>Deactive</option>
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
