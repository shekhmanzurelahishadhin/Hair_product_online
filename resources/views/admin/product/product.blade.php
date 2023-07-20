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
                    <form class="form-horizontal" action="{{route('store.product')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" rows="5" name="name" id="service_title" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control"  id="cars">
                                <option selected disabled>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" min="0" class="form-control" rows="5" name="price" id="service_title" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="main_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Product Small Details</label>
                            <textarea  id="tinymce" class="editor form-control" col="10" row="3" name="product_details_small"></textarea>
                        </div>
                        <h3>Details page information</h3>

                        <div class="form-group">
                            <label>Details Image one</label>
                            <input type="file" name="details_image1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Details Image two</label>
                            <input type="file" name="details_image2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Details Image three</label>
                            <input type="file" name="details_image3" class="form-control">
                        </div>



                        <div class="form-group">
                            <label>Product Long Details one</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="product_details1"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Long Details two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="product_details2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Long Details three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="product_details3"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
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

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            {{--                        <th>Details</th>--}}
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name ?? null }}</td>
                                <td><img src="{{ asset($product->main_image) }}" style="height: 100px"></td>

                                <td>{{ $product->category->name ?? null }}</td>
{{--                                                            <td>{!! $service->service_details_small ?? null !!}</td>--}}
                                <td>
                                    @if ($product->status == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($product->status == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('edit.product',['id'=>$product->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
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
