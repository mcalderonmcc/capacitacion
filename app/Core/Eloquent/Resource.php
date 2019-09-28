<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{public function article() {
    return $this->belongTo(Article::class,'aricle_id','ìd');
}
    //
}
