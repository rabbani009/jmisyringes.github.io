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
        return view('frontend.product.adproduct-view');
    }

    public function disposableProductView(){ 
        return view('frontend.product.disposable-product-view');
    }
    public function tommeyProductView(){ 
        return view('frontend.product.tommey-product-view');
    }
    public function insulinProductView(){ 
        return view('frontend.product.insulin-product-view');
    }
    public function disposableNeedleProductView(){ 
        return view('frontend.product.disposableNeedle-product-view');
    }
    public function scalpveinProductView(){ 
        return view('frontend.product.scalpvein-product-view');
    }
    public function infusionProductView(){ 
        return view('frontend.product.infusion-product-view');
    }
    public function cannulaProductView(){ 
        return view('frontend.product.cannula-product-view');
    }
    public function transfusionProductView(){ 
        return view('frontend.product.transfusion-product-view');
    }
    public function bandageProductView(){ 
        return view('frontend.product.bandage-product-view');
    }
    public function drainageProductView(){ 
        return view('frontend.product.drainage-product-view');
    }  
    public function legProductView(){ 
        return view('frontend.product.leg-product-view');
    }
    public function NelatobProductView(){ 
        return view('frontend.product.Nelatob-Catheter-product-view');
    }
    public function StomachProductView(){ 
        return view('frontend.product.Stomach-product-view');
    }
    public function UmbilicalProductView(){ 
        return view('frontend.product.Umbilical-product-view');
    }
    public function WoundProductView(){ 
        return view('frontend.product.Wound-product-view');
    }
    public function FeedProductView(){ 
        return view('frontend.product.feed-product-view');
    }
    public function DispenserProductView(){ 
        return view('frontend.product.dispenser-product-view');
    }
    public function SuctionProductView(){ 
        return view('frontend.product.suction-product-view');
    }
    public function StopcockProductView(){ 
        return view('frontend.product.stopcock-product-view');
    }

    public function LancetProductView(){ 
        return view('frontend.product.lancet-product-view');
    }


}
