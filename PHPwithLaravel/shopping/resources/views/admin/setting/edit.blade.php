<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Cài đặt</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => '', 'key' => 'Cài đặt'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-5">
                        <form action="{{ route('settings.update',['id' => $setting->id]) }}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Config-key</label>
                                <input type="text" value="{{$setting->config_key}}" name="config_key" class="form-control @error('config_key') is-invalid @enderror" placeholder="Nhập Config-key:" >
                                @error('config_key')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            @if(request()->type === 'Text')
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Config-value</label>
                                    <input type="text" value="{{$setting->config_value}}" name="config_value" class="form-control @error('config_value') is-invalid @enderror" placeholder="Nhập Config-value:" >
                                    @error('config_value')
                                    <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            @elseif(request()->type === 'Textarea')
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Config-value</label>
                                    <textarea rows="5" name="config_value" class="form-control @error('config_value') is-invalid @enderror" placeholder="Nhập Config-value:" >{{$setting->config_value}}</textarea>
                                    @error('config_value')
                                    <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                            <button type="submit" class="btn btn-primary">Cập nhật Setting</button>
                        </form>
                    </div>
                </div> <!-- Added the closing div tag -->

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
