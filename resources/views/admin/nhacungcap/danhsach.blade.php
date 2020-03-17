  @extends('admin.layout.index')

@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhà Cung Cấp
                            <small>Danh Sách</small>
                        </h1>
                    </div>


                        @if(session('thongbao'))
                            <div  class="alert alert-success" >
                            {{session('thongbao')}}

                            </div>

                         @endif
                         
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>id</th>
                                <th>id SP</th>
                                <th>Tên NCC</th>
                                <th>Địa Chỉ</th>
                                <th>Điện Thoại</th>
                                <th>Ghi Chú</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nhacungcap as $ncc)
                            <tr class="even gradeC" align="center">
                                <td>{{$ncc->id}}</td>
                                <td><a href="admin/sanpham/danhsach">{{$ncc->id_sp}}</td>
                                <td>{{$ncc->TenNCC}}</td>
                                <td>{{$ncc->DiaChi}}</td>
                                <td>{{$ncc->DienThoai}}</td>
                                <td>{{$ncc->GhiChu}}</td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nhacungcap/xoa/{{$ncc->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nhacungcap/sua/{{$ncc->id}}">Edit</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection