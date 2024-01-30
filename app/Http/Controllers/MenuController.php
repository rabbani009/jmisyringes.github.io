<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MenuController extends Controller
{
    public function getContact(){ 

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('frontend.contact.contact', compact('categories'));

    }

    public function getQuality(){ 

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('frontend.quality.quality', compact('categories'));

    }

    public function getProfile(){ 

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('frontend.investors.profile', compact('categories'));

    }
    public function getMission(){ 

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('frontend.about.mission', compact('categories'));

    }
    public function getMessage(){ 

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('frontend.about.message', compact('categories'));

    }
    public function getCertification(){ 

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('frontend.about.certification', compact('categories'));

    }
    public function getAward(){ 

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('frontend.about.award', compact('categories'));

    }
    public function AdProductView(){ 

  
        return view('frontend.product.adproduct-view',);

    }
}
