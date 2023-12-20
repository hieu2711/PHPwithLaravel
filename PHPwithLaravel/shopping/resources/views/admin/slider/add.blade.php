<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Thêm Slider</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'Slider', 'key' => 'Thêm'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-5">
                        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Tên Slider:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên Slider" >

                                @error('name')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Mô tả:</label>
                                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Mô tả" ></textarea>
                                @error('description')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Hình ảnh</label>
                                <input type="file" name="image_path" class="form-control-file @error('image_path') is-invalid @enderror">
                                @error('image_path')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm Slider</button>
                        </form>
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

