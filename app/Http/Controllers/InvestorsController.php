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

    public function CreditView(){ 
        return view('frontend.investors.credit');
    }

    public function DevinedView(){ 
        return view('frontend.investors.devined-distribution');
    }

    public function UnpaidView(){ 
        return view('frontend.investors.unpaid-devined');
    }

    public function getDirectorsProfile(){ 
        return view('frontend.investors.directors-profile');
    }
    
    
    public function BusinessView(){ 
        return view('frontend.investors.naturebusiness');
    }

    public function SharedView(){ 
        return view('frontend.investors.shared');
    }

    public function InvestorView(){ 
        return view('frontend.investors.investor-relation');
    }

    public function CorporateView(){ 
        return view('frontend.investors.corporate-view');
    }

    public function AppointmentView(){ 
        return view('frontend.investors.appointment-view');
    }
    
    
    
    
    
    
    
}
