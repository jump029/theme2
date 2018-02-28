<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_data extends Model
{
    protected $table = 'post_data';
    protected $guarded = array('id');
    //protected $primaryKey = "post_id";

    public static $rules = array(
        'name' => 'required',
        'title' => 'required',
        'content' => 'required'
    );
   public function Reply_data()
   {
       return $this->hasMany('App\Reply_data','post_id','id');
   } 
}
