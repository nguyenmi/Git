<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatGiuong;

class DatGiuongController extends Controller
{
    public function getdatgiuong(){
    	return view('view.reservation');
    }
    public function postdatgiuong(Request $request){
    	$this->validate($request,
    		[
    			'ngay_bat_dau' => 'required',
    			'ngay_ket_thuc' => 'required',
    			'so_ngay' => 'required',
    			'so_giuong' => 'required',
    		],[
    			'ngay_bat_dau.required' => 'Bạn chưa chọn số ngày bắt đầu',
    			'ngay_ket-thuc.required' => 'Bạn chưa chọn ngày kết thúc',
    			'so_ngay.required' => 'Bạn chưa chọn số ngày',
    			'so_giuong' => 'Bạn chưa chọn số giường',
    		]);
    	$datgiuong = new DatGiuong;
    	$datgiuong->ngay_bat_dau = $request->ngay_bat_dau;
    	$datgiuong->ngay_ket_thuc = $request->ngay_ket_thuc;
    	$datgiuong->so_ngay = $request->so_ngay;
    	$datgiuong->so_giuong = $request->so_giuong;
    	$datgiuong->save();
    	return redirect('/pay')->with("thongbao",'Bạn đã đặt giường thành công');
    }
}
