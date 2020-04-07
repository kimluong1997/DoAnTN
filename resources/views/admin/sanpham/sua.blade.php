 @extends('admin.layout.index')

 @section('content')
 <div id="page-wrapper">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">Sản phẩm
                     <small>{{$sanpham->TenSP}}</small>
                 </h1>
             </div>
             <!-- /.col-lg-12 -->
             <div class="col-lg-7" style="padding-bottom:120px">

                 @if(count($errors)>0)

                 <div class="alert alert-danger">
                     @foreach($errors ->all() as $err )
                     {{$err}} <br>

                     @endforeach
                 </div>

                 @endif

                 @if(session('thongbao'))
                 <div class="alert alert-success">
                     {{session('thongbao')}}

                 </div>

                 @endif

                 <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST">
                     <input type="hidden" name="_token" value="{{csrf_token()}}" />
                     <div class="form-group">
                         <label>Loại sản phẩm</label>
                         <select class="form-control" name="id_loaisp">
                             @foreach($loaisanpham as $sp)
                             <option value="{{$sp->id}}">{{$sp->TenSP}}</option>
                             @endforeach
                         </select>
                     </div>

                     <div class="form-group">
                         <label> Tên sản phẩm</label>
                         <input class="form-control" name="TenSP" placeholder="{{$sanpham->TenSP}}" />
                     </div>
                     <div class="form-group">
                         <label> Đơn Giá</label>
                         <input class="form-control" name="DonGia" placeholder="{{$sanpham->DonGia}}" />
                     </div>
                     <div class="form-group">
                         <label> Giá KM</label>
                         <input class="form-control" name="giaKM" placeholder="{{$sanpham->giaKM}}" />
                     </div>
                     <div class="form-group">
                         <label> Giá Nhập</label>
                         <input class="form-control" name="GiaNhap" placeholder="{{$sanpham->GiaNhap}}" />
                     </div>
                     <div class="form-group">
                         <label>Mô Tả</label>
                         <input class="form-control" name="MoTa" placeholder="{{$sanpham->MoTa}}" />
                     </div>
                     <div class="form-group">
                         <label>Ảnh</label><br>
                         <div class="input-group" id="img_">
                             <h5 class="choiceimg">
                                 + Chọn 1 ảnh đại diện
                             </h5>
                             <input type="file" name="img" id="avt-img" {{ isset($data) && $data->file != "" ? "" : "required"}}>
                             <br>
                             <br>
                             <img src="source\image\product\{{$sanpham->img}}" style="max-width: 80%; margin:10px" alt="" id="blah">
                         </div>
                     </div>
                     <div class="form-group">
                         <label>ĐV tính</label>
                         <input class="form-control" name="DVTinh" placeholder="{{$sanpham->DVTinh}}" />
                     </div>
                     <div class="form-group">
                         <label>Số lượng</label>
                         <input class="form-control" name="soluong" placeholder="{{$sanpham->soluong}}" />
                     </div>
                     <div class="form-group">
                         <label>Trạng Thái</label>
                         <input class="form-control" name="TrangThai" placeholder="{{$sanpham->TrangThai}}" />
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