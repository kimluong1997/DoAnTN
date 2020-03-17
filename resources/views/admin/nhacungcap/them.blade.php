 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhà cung cấp
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


                        <form action="admin/nhacungcap/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <div class="form-group">
                                <label>sản phẩm</label>
                                <select class="form-control" name="id_loaisp">
                                   @foreach($sanpham as $sp)
                                    <option value="{{$sp->id}}">{{$sp->TenSP}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Tên Nhà Cung Cấp</label>
                                <input class="form-control" name="TenNCC" placeholder="Nhập tên Ncc" />
                            </div>
                            <div class="form-group">
                                <label> Địa Chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="Nhập Địa Chỉ Nhà Cung Cấp" />
                            </div>
                              <div class="form-group">
                                <label> Điện Thoại</label>
                                <input class="form-control" name="DienThoai" placeholder="Nhập số điện thoại" />
                            </div>
                            <div class="form-group">
                                <label>Ghi CHú</label>
                                <input class="form-control" name="GhiChu" placeholder="Nhập ghi chú" />
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