<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\sanpham;
use App\loaisanpham;

class sanphamController extends Controller
{
  public function getDanhsach()
  {
    $sanpham = sanpham::all();


    return view('admin.sanpham.danhsach', ['sanpham' => $sanpham]);
  }




  public function getThem()
  {
    $loaisanpham = loaisanpham::all();

    return view('admin.sanpham.them', ['loaisanpham' => $loaisanpham]);
  }

  public function postThem(Request $rq)
  {
    $this->validate($rq, [
      'TenSP' => 'required'
    ], [
      'TenSP.required' => 'bạn chưa nhâp tên sp'
    ]);


    $sanpham = new sanpham;

    $sanpham->id_loaisp = $rq->id_loaisp;
    $sanpham->TenSP = $rq->TenSP;
    $sanpham->DonGia = $rq->DonGia;
    $sanpham->giaKM = $rq->giaKM;
    $sanpham->GiaNhap = $rq->GiaNhap;
    $sanpham->MoTa = $rq->MoTa;
    $sanpham->img = $rq->img;
    $sanpham->DVTinh = $rq->DVTinh;
    $sanpham->soluong = $rq->soluong;
    $sanpham->Trangthai = $rq->Trangthai;

    $sanpham->save();

    return redirect('admin/sanpham/them')->with('thongbao', 'thêm thành công');
  }

  public function getSua($id)
  {
    $sanpham = sanpham::find($id);
    $loaisanpham = loaisanpham::all();

    return view('admin.sanpham.sua', ['sanpham' => $sanpham], ['loaisanpham' => $loaisanpham]);
  }
  public function postSua(Request $rq, $id)
  {
    $sanpham = sanpham::find($id);
    $this->validate($rq, [
      'TenSP' => 'required|unique:sanpham,TenSP|min:3'

    ], [
      'TenSP.required' => 'bạn chưa nhập tên',
      'TenSP.unique' => 'tên trùng tên cũ',
      'TenSP.min' => 'tên quá ngắn'
    ]);


    $sanpham->id_loaisp = $rq->id_loaisp;
    $sanpham->TenSP = $rq->TenSP;
    $sanpham->DonGia = $rq->DonGia;
    $sanpham->giaKM = $rq->giaKM;
    $sanpham->GiaNhap = $rq->GiaNhap;
    $sanpham->MoTa = $rq->MoTa;
    $sanpham->img = $rq->img;
    $sanpham->DVTinh = $rq->DVTinh;
    $sanpham->Trangthai = $rq->Trangthai;
    $sanpham->save();

    return redirect('admin/sanpham/sua/' . $id)->with('thongbao', 'sửa thành công');
  }

  public function getXoa($id)
  {

    $sanpham = sanpham::find($id);
    $sanpham->delete();
    return redirect('admin/sanpham/danhsach')->with('thongbao', 'xóa thành công');
  }
}
