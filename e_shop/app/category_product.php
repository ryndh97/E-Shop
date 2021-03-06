<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Category_product extends Model
{
    protected $table = 'category_products';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function product(){
        return $this->hasMany('App\Product','category_id','id');
    }

    public function getCategoryImageAttribute($value){
        return url('upload/'.$value);
    }
}
