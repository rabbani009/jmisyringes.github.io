<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsubcategory extends Model
{
    use HasFactory;

    public static function subcategoryIdRelationship($id) {
        return 
            self::where('subsubcategories.id', '=', $id)
                ->select(
                    'subsubcategories.subcategory_id',
                    'categories.id as category_id'
                )
                ->join('subcategories', 'subsubcategories.subcategory_id', '=', 'subcategories.id')
                ->join('categories', 'subcategories.category_id', '=', 'categories.id')
                ->first();
    }

           public function category()
            {
                return $this->belongsTo(Category::class, 'category_id');
            }

            public function subcategory()
            {
                return $this->belongsTo(Subcategory::class, 'subcategory_id');
            }


}
