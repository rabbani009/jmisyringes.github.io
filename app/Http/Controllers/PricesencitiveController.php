<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricesencitive;
use App\Models\Category;


class PricesencitiveController extends Controller
{
    
    public function index()
    {
        $pricesencitives = Pricesencitive::orderBy('created_at', 'desc')->get();

        $categories = Category::with('subcategories.subsubcategories')->get();

        return view('frontend.investors.pricesensitive', compact('pricesencitives','categories'));
    }

    

    public function download($filename)
    {
        // Create the full path to the file in the public storage directory
        $filePath = public_path('storage/' . $filename);
    
        // Check if the file exists
        if (file_exists($filePath)) {
            return response()->download($filePath);
        }
    
        // Handle the case where the file doesn't exist
        return abort(404);
    }


    
    
    
    
    
    
    
}
