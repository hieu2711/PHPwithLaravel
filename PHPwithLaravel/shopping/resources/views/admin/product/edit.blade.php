<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Cập nhật sản phẩm</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/cdn.jsdelivr.net_npm_select2@4.1.0-rc.0_dist_css_select2.min.css')}}" rel="stylesheet" />
    <link src="{{ asset('admin/product/add/add.css')}}" rel="stylesheet"/>
@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'Sản Phẩm', 'key' => 'Cập nhật'])

        <!-- Main content -->
        <form  method="post" action="{{route('product.update',['id'=>$product->id])}}" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-5">

                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="Nhập tên sản phẩm" >
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Giá sản phẩm</label>
                                <input type="text" name="price" class="form-control" value="{{$product->price}}" placeholder="Nhập giá sản phẩm" >
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Ảnh sản phẩm</label>
                                <input type="file"  name="feature_image_path"  class="form-control-file" >
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <img width="120px" height="120px" src="{{$product->feature_image_path}}" />
                                </div>

                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Ảnh chi tiết</label>
                                <input type="file" multiple  name="image_path[]" class="form-control-file" >
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    @foreach($product->productImages as $productImageItem)
                                    <div class="col-md-3">
                                        <img width="100px" height="100px" src="{{ $productImageItem->image_path }}" />
                                    </div>
                                    @endforeach
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select class="form-control select2_init" name="category_id">
                                    <option  value="">Chọn danh mục</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Chọn Tag</label>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">
                                @foreach($product->tags as $tagItem)
                                    <option value="{{$tagItem->name}}" selected>{{$tagItem->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label >Nội dung</label>
                                <textarea name="contents" class="form-control tinymce_editor" rows="5">{{$product->content}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>

                    </div>
                    </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        </form>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <script src="{{ asset('vendors/select2/cdn.jsdelivr.net_npm_select2@4.1.0-rc.0_dist_js_select2.min.js')}}"></script>
    <script src="{{ asset('admin/product/add/add.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

