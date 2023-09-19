<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsubsubcategory extends Model
{
    use HasFactory;

    // public static function categoryIdRelationship($id) {
    //     return 
    //         self::where('subsubcategories.id', '=', $id)
    //             ->select(
    //                 'subsubcategories.category_id',
    //                 'categories.id as category_id'
    //             )
    //             ->join('subcategories', 'subsubcategories.subcategory_id', '=', 'subcategories.id')
    //             ->join('categories', 'subcategories.category_id', '=', 'categories.id')
    //             ->first();
    // }
    
}
