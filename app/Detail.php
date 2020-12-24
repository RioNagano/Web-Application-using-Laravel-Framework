<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    protected $table = 'details';
    protected $fillable = ['transaction_id','item_id'];
}
