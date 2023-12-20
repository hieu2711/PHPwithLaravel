<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Thêm sản phẩm</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/cdn.jsdelivr.net_npm_select2@4.1.0-rc.0_dist_css_select2.min.css')}}" rel="stylesheet" />
    <link src="{{ asset('admin/product/add/add.css')}}" rel="stylesheet"/>
@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'Sản Phẩm', 'key' => 'Thêm'])
        <!-- Main content -->
        <form  method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-5">

                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Tên sản phẩm</label>
                                <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên sản phẩm" >
                                @error('name')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Giá sản phẩm</label>
                                <input type="text" value="{{old('price')}}" name="price" class="form-control @error('price') is-invalid @enderror"  placeholder="Nhập giá sản phẩm" >

                                @error('price')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Ảnh sản phẩm</label>
                                <input type="file"  name="feature_image_path"  class="form-control-file" >
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Ảnh chi tiết</label>
                                <input type="file" multiple  name="image_path[]" class="form-control-file" >
                            </div>

                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select class="form-control select2_init @error('category_id') is-invalid @enderror " name="category_id">
                                    <option  value="">Chọn danh mục</option>
                                    {!! $htmlOption !!}
                                </select>

                                @error('category_id')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Chọn Tag</label>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                            </select>
                            </div>
                            <div class="form-group">
                                <label >Nội dung</label>
                                <textarea   name="contents" value="{{old('content')}}"  class="form-control tinymce_editor @error('content') is-invalid @enderror" rows="5"></textarea>

                                @error('content')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm danh mục</button>

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

