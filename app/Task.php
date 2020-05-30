<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function complete(){
        $this->completed = 1;
        $this->save();
    }
}
