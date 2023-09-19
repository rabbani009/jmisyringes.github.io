<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\Category;


class HomeController extends Controller
{
    public function getHome(){
        

        $sliders = Slider::all();
        // dd($sliders);
        $features = Feature::all();

        $categories = Category::with('subcategories.subsubcategories')->get();


        return view('index', compact('sliders','features','categories'));

    }

    public function getSetting(){

        $settings = App\Setting::all(); 
        return view('frontend.home', compact('settings'));

    }

    // public function getMenuData()
    // {
    //     // Retrieve all categories with their subcategories and subsubcategories
    //     $categories = Category::all();
    
    //     dd($categories); // Add this line for debugging
    //     return view('frontend.partials.header', compact('categories'));
    // }




}
