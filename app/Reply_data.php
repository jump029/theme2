<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply_data extends Model
{
    protected $table = 'reply_data';
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'content' => 'required'
    );

}
