 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn Chi Tiết
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


                        <form action="admin/hoadonct/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <div class="form-group">
                                <label>Id Hóa Đơn</label>
                                <select class="form-control" name="id_hoadon">
                                   @foreach($hoadon as $hd)
                                    <option value="{{$hd->id}}">{{$hd->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                              <div class="form-group">
                                <label>Id Sản Phẩm</label>
                                <select class="form-control" name="id_sanpham">
                                   @foreach($sanpham as $sp)
                                    <option value="{{$sp->id}}">{{$sp->id}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Số Lượng</label>
                                <input class="form-control" name="SoLuong" placeholder="Nhập số lượng" />
                            </div>
                            <div class="form-group">
                                <label> Đơn Giá</label>
                                <input class="form-control" name="DonGia" placeholder="Nhập giá" />
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