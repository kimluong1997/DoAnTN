 @extends('admin.layout.index')

@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhà Cung Cấp
                            <small>{{$nhacungcap->TenNCC}}</small>
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

                        <form action="admin/nhacungcap/sua/{{$nhacungcap->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                              <div class="form-group">
                                <label> sản phẩm</label>
                                <select class="form-control" name="id_loaisp">
                                   @foreach($sanpham as $sp)
                                    <option value="{{$sp->id}}">{{$sp->TenSP}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                             <div class="form-group">
                                <label> Tên nhà cung cấp</label>
                                <input class="form-control" name="TenNCC" placeholder="{{$nhacungcap->TenNCC}}" />
                            </div>
                            <div class="form-group">
                                <label> Địa chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="{{$nhacungcap->DiaChi}}" />
                            </div>
                              <div class="form-group">
                                <label> Điện Thoại</label>
                                <input class="form-control" name="DienThoai" placeholder="{{$nhacungcap->DienThoai}}" />
                            </div>
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <input class="form-control" name="GhiChu" placeholder="{{$nhacungcap->GhiChu}}" />
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