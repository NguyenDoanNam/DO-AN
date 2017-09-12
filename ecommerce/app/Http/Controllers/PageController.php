<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
    	return view('page.trangchu');
    }
    public function getdsSanPham()
    {
    	return view('page.dsSanPham');
    }
    public function getChitietSP()
    {
    	return view('page.chitiet_sanpham');
    }
    public function getDashBoard()
    {
        return view('page.Dashboard');
    }
    public function getBillingInfo()
    {
        return view('page.checkout_billing_info');
    }
}
