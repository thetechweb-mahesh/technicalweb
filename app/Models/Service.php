<?php
namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Service extends Model
{
    use HasFactory;
    protected $table ='services';
    protected $fillable =
   ['category_id',

    'name',
   'slug',
   'description',
   'image',

   'm_ser_title',
   'm_ser_des',
   'ser_list_title',
   'ser_list_des',

   'yt_ifranme',
   'meta_title',
   'meta_description',
   'meta_keyword',

   'status',
   'created_by'];

   public function category(){
    return $this->belongsTo(Category::class,'category_id','id');
 }

  // add for users in frontend
  public function user(){
    return $this->belongsTo(user::class,'created_by','id');
 }


}
