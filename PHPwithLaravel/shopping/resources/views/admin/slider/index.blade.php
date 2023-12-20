<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('title')
    <title>Danh sách Slider</title>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/product/indexProducts/list.js') }}"></script>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentHeader',['name' => 'Slider', 'key' => 'Danh sách'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <a href="{{ route('slider.create') }}" class="btn btn-success float-right m-2" >Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Tên slider</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$slider->id}}</td>
                                    <td>  <img width="120px" height="90px" src="{{$slider->image_path}}" alt="{{$slider->name}}" />
                                    </td>
                                    <td>{{$slider->name}}</td>
                                    <td>
                                        <a href="{{route('slider.edit',['id'=> $slider->id])}}" class="btn btn-info mr-2">Sửa</a>
                                        <a data-url="{{route('slider.delete',['id'=> $slider->id])}}" class="btn btn-danger action-delete">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $sliders->links('pagination::bootstrap-4') }}
                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

