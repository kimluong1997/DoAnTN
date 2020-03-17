 @extends('admin.layout.index')

@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khách Hàng
                            <small>{{$khachhang->HoTen}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                         @if(count($errors)>0)
                        
                              <div class="alert alert-danger" > 
                            @foreach($errors ->all() as $err )
                               {{$err}} <br>

                            @endforeach
                        </div>
                      
                         @endif

                            @if(session('thongbao'))
                            <div  class="alert alert-success" >
                            {{session('thongbao')}}

                            </div>

                         @endif

                        <form action="admin/khachhang/sua/{{$khachhang->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                           <div class="form-group">
                                <label> Tên Khách Hàng</label>
                                <input class="form-control" name="HoTen" placeholder="{{$khachhang->HoTen}}" />
                            </div>
                            <div class="form-group">
                                <label>Giới Tính</label>
                                <input class="form-control" name="GioiTinh" placeholder="{{$khachhang->GioiTinh}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="Email" placeholder="{{$khachhang->Email}}" />
                            </div>
                             <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="{{$khachhang->DiaChi}}" />
                            </div>
                             <div class="form-group">
                                <label>Điện Thoại</label>
                                <input class="form-control" name="DienThoai" placeholder="{{$khachhang->DienThoai}}" />
                            </div>
                             <div class="form-group">
                                <label>Ghi Chú</label>
                                <input class="form-control" name="GhiChu" placeholder="{{$khachhang->GhiChu}}" />
                            </div>
                           
                            </div>
                            <button type="submit" class="btn btn-default">Lưu</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection 