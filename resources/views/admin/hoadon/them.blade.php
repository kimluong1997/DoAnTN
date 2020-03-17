 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
                            <small>thêm mới</small>
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


                        <form action="admin/hoadon/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <div class="form-group">
                                <label>Id Khách Hàng</label>
                                <select class="form-control" name="id_khachhang">
                                   @foreach($khachhang as $kh)
                                    <option value="{{$kh->id}}">{{$kh->id}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Ngày Đăt Hàng</label>
                                <input class="form-control" name="NgayDatHang" placeholder="Nhập ngày đặt hàng" />
                            </div>
                            <div class="form-group">
                                <label> Tổng Tiền</label>
                                <input class="form-control" name="TongTien" placeholder="Nhập Tổng tiền" />
                            </div>
                              <div class="form-group">
                                <label> Hình Thức Thanh Toán</label>
                                <input class="form-control" name="HinhThucTT" placeholder="Nhập HinhThucTT" />
                            </div>
                         
                           
                            
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        
@endsection        