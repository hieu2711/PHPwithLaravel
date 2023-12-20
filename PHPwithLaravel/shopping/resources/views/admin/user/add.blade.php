<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Thêm User</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/cdn.jsdelivr.net_npm_select2@4.1.0-rc.0_dist_css_select2.min.css')}}" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{ asset('vendors/select2/cdn.jsdelivr.net_npm_select2@4.1.0-rc.0_dist_js_select2.min.js')}}"></script>
    <script>
        $('.select2-init').select2({
            'placeholder': 'Chọn vai trò'
        })
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'User', 'key' => 'Thêm'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-5">
                        <form action="{{route('users.store')}}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Tên User:</label>
                                <input type="text" name="name" class="form-control " placeholder="Nhập tên User" >
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control " placeholder="Nhập Email" />
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Mật khẩu:</label>
                                <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                            </div>

                            <div class="form-group">
                                <label>Chọn Vai trò</label>
                                <select name="role_id[]" class="form-control select2-init" multiple="multiple">
                                    <option value=""></option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm User</button>
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



