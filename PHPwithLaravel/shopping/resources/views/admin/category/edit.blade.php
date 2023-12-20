<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Cập nhật danh mục</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'Sản Phẩm', 'key' => 'Cập nhật'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-5">
                        <form action="{{route('categories.update', ['id' => $category->id])}}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Tên danh mục:</label>
                                <input type="text" value="{{$category->name}}" name="name" class="form-control" placeholder="Nhập tên danh mục" >
                            </div>
                            <div class="form-group">
                                <label>Chọn danh mục cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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

