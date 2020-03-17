 @extends('admin.layout.index')

@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
                            <small>{{$hoadon->id}}</small>
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

                        <form action="admin/hoadon/sua/{{$hoadon->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />

                              <div class="form-group">
                                <label>ID Khách hàng</label>
                                <select class="form-control" name="id_khachhang">
                                   @foreach($khachhang as $kh)
                                    <option value="{{$kh->id}}">{{$kh->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                             <div class="form-group">
                                <label> Ngày đặt hàng</label>
                                <input class="form-control" name="NgayDatHang" placeholder="{{$hoadon->NgayDatHang}}" />
                            </div>
                            <div class="form-group">
                                <label> Tổng Tiền</label>
                                <input class="form-control" name="TongTien" placeholder="{{$hoadon->TongTien}}" />
                            </div>
                              <div class="form-group">
                                <label> Hình Thức TT</label>
                                <input class="form-control" name="HinhThucTT" placeholder="{{$hoadon->HinhThucTT}}" />
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