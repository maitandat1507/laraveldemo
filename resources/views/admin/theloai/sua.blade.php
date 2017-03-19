@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thể loại <small>{{$theloai->Ten}}</small>
                </h1>
            </div><!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
                <form action="admin/theloai/sua/{{$theloai->id}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="Ten"
                            placeholder="Nhập tên thể loại" value="{{$theloai->Ten}}">
                    </div>

                    <button class="btn btn-default" type=
                    "submit">Sửa</button> <button class=
                    "btn btn-default" type="reset">Làm mới</button>
                    <form></form>
                </form>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
@endsection