<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investors;
use App\Models\Category;


class InvestorsController extends Controller
{
    public function PSIView(){ 
        return view('frontend.investors.psi');
    }

    public function ADView(){ 
        return view('frontend.investors.adreport');
    }

    public function UNAView(){ 
        return view('frontend.investors.unareport');
    }

    public function NoticeView(){ 
        return view('frontend.investors.notice');
    }
    
    
    
    
    
    
    
}
