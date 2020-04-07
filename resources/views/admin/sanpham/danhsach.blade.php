  @extends('admin.layout.index')

  @section('content')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Sản Phẩm
                      <small>Danh Sách</small>
                  </h1>
              </div>


              @if(session('thongbao'))
              <div class="alert alert-success">
                  {{session('thongbao')}}

              </div>

              @endif

              <!-- /.col-lg-12 -->
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr align="center">
                          <th>id</th>
                          <th>id loai sp</th>
                          <th>Tên SP</th>
                          <th>Đơn Giá</th>
                          <th>Giá KM</th>
                          <th>Giá Nhập</th>
                          <th>Mô Tả</th>
                          <th>Ảnh</th>
                          <th>Đơn vị tính</th>
                          <th>Số lượng</th>
                          <th>Trạng thái</th>
                          <th>Delete</th>
                          <th>Edit</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($sanpham as $sp)
                      <tr class="even gradeC" align="center">
                          <td>{{$sp->id}}</td>
                          <td>{{$sp->id_loaisp}}</td>
                          <td>{{$sp->TenSP}}</td>
                          <td>{{$sp->DonGia}}</td>
                          <td>{{$sp->giaKM}}</td>
                          <td>{{$sp->GiaNhap}}</td>
                          <td>{{$sp->MoTa}}</td>
                          <td class="width"> <img width="25%" src="source\image\product\{{$sp['img']}}" alt="" class="pull-left"></td>
                          <td>{{$sp->DVTinh}}</td>
                          <td>{{$sp->soluong}}</td>
                          <td>{{$sp->Trangthai}}</td>
                          <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}"> Delete</a></td>
                          <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
                      </tr>
                      @endforeach
                      <style>
                          img.pull-left {
                              height: 69px;
                              width: 109px;
                          }
                      </style>
                  </tbody>
              </table>
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </div>
  @endsection