@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Loại tin <small>thêm</small>
                </h1>
            </div><!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif

                <form action="admin/loaitin/them" method="post">
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai">
                            @foreach($theloai as $item)
                            <option value="{{$item->id}}">
                                {{$item->Ten}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên loại tin</label>
                        <input class="form-control" name="Ten"
                            placeholder="Nhập tên loại tin">
                    </div>

                    <button class="btn btn-default" type="submit">Thêm</button>
                    <button class="btn btn-default" type="reset">Làm mới</button>
                </form>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
@endsection