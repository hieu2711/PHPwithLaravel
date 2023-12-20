<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('title')
    <title>Danh sách sản phẩm</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/product/indexProducts/list.css') }}" />
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/product/indexProducts/list.js') }}"></script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentHeader',['name' => 'Sản Phẩm', 'key' => 'Danh sách'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <a href="{{route('product.create')}}" class="btn btn-success float-right m-2" >Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Loại</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $productItem)
                                <tr>
                                    <td>{{ $productItem->id }}</td>
                                    <td>
                                        <img class="imageProduct" src="{{ $productItem->feature_image_path }}"  alt=""/>
                                    </td>
                                    <td>{{ $productItem->name }}</td>
                                    <td>{{ number_format($productItem -> price)  }}</td>
                                    <td>{{ optional( $productItem->category)->name}}</td>
                                    <td>
                                        <a href="{{ route('product.edit',['id' => $productItem->id])}}" class="btn btn-info mr-2">Sửa</a>
                                        <a href="" data-url="{{route('product.delete',['id' => $productItem->id ])}}" class="btn btn-danger action-delete">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $products->links('pagination::bootstrap-4') }}
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

