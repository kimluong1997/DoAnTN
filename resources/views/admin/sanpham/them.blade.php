 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
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


                        <form action="admin/sanpham/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                             <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control" name="id_loaisp">
                                   @foreach($loaisanpham as $lsp)
                                    <option value="{{$lsp->id}}">{{$lsp->TenSP}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Tên sản phẩm</label>
                                <input class="form-control" name="TenSP" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label> Đơn Giá</label>
                                <input class="form-control" name="DonGia" placeholder="Nhập giá sản phẩm" />
                            </div>
                              <div class="form-group">
                                <label> Giá KM</label>
                                <input class="form-control" name="giaKM" placeholder="Nhập giá KM sản phẩm" />
                            </div>
                              <div class="form-group">
                                <label> Giá Nhập</label>
                                <input class="form-control" name="GiaNhap" placeholder="Nhập giá nhập sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <input class="form-control" name="MoTa" placeholder="Nhập mô tả" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" name="img" placeholder="Tên hình ảnh" />
                            </div>
                             <div class="form-group">
                                <label>ĐV tính</label>
                                <input class="form-control" name="DVTinh" placeholder="Nhập đơn vị tính" />
                            </div>
                                   <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="soluong" placeholder="Nhập số lượng sản phẩm" />
                            </div>
                             <div class="form-group">
                                <label>Trạng Thái</label>
                                <input class="form-control" name="TranhThai" placeholder="Nhập trạng thái" />
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