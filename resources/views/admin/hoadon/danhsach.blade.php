  @extends('admin.layout.index')

@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
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
                                <th>id khách hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Hình thức TT</th>
                               
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hoadon as $hd)
                            <tr class="even gradeC" align="center">
                                <td>{{$hd->id}}</td>
                                <td>{{$hd->id_khachhang}}</td>
                                <td>{{$hd->NgayDatHang}}</td>
                                <td>{{$hd->TongTien}}</td>
                                <td>{{$hd->HinhThucTT}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadon/xoa/{{$hd->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/hoadon/sua/{{$hd->id}}">Edit</a></td>
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