<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('title')
    <title>Danh mục sản phẩm</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentHeader',['name' => 'Sản Phẩm', 'key' => 'Danh mục'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2" >Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{route('categories.edit',['id'=> $category->id])}}" class="btn btn-info mr-2">Sửa</a>
                                    <a href="{{route('categories.delete',['id'=> $category->id])}}" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $categories->links('pagination::bootstrap-4') }}
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

