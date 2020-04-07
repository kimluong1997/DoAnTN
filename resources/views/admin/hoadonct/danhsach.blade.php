@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa Đơn Chi Tiết
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
                        <th>id hóa đơn</th>
                        <th>id sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>

                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hoadonct as $hdct)
                    <tr class="even gradeC" align="center">
                        <td>{{$hdct->id}}</td>
                        <td>{{$hdct->id_hoadon}}</td>
                        <td><a href="admin/sanpham/danhsach">{{$hdct->id_sanpham}}</a></td>

                        <td>{{$hdct->SoLuong}}</td>
                        <td>{{number_format($hdct->DonGia)}}</td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadonct/xoa/{{$hdct->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/hoadonct/sua/{{$hdct->id}}">Edit</a></td>
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