@extends('layouts.admin')

@section('title')
    <title>Cập nhật Vai trò</title>
@endsection

@section('js')
    <script>
        $('.checkbox_wrapper').on('click',function (){
            $(this).parents('.card').find('.checkbox_child').prop('checked',$(this).prop('checked'));
        });
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'Vai trò', 'key' => 'Cập nhật'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('roles.update',['id'=>$role->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 mt-3 col-12">
                                <label for="email" class="form-label">Tên Vai trò:</label>
                                <input value="{{$role->name}}" type="text" name="name" class="form-control " placeholder="Nhập tên Vai trò" >
                            </div>
                            <div class="mb-3 mt-3 col-12">
                                <label for="email" class="form-label">Mô tả:</label>
                                <textarea type="text" name="display_name" class="form-control " placeholder="Mô tả" >{{$role->display_name}}</textarea>
                            </div>

                            @foreach($permission as $item)
                                <div class="col-12">
                                    <div class="card text-white bg-white mb-3 col-12" style="max-width: 18rem;">
                                        <div class="card-header bg-primary">
                                            <label for="">
                                                <input type="checkbox" value="" class="checkbox_wrapper">
                                            </label>
                                            Module {{$item->name}}
                                        </div>
                                        <div class="row">
                                            @foreach($item->permissionChild as $itemChild)
                                                <div class="card-body col-12">
                                                    <h5 class="card-title">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox" class="checkbox_child"
                                                                   {{$permissionsChecked->contains('id',$itemChild->id) ? 'checked' : ''}}
                                                                   name="permission_id[]" value="{{$itemChild->id}}">
                                                            {{$itemChild->name}}
                                                        </label>
                                                    </h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <button type="submit" class="btn btn-primary">Cập nhật vai trò</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
