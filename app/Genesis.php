<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genesis extends Model
{
    protected $table = "genesis";

    protected $fillable = [
        "name",
        "status",
    ];

    public function tyche() {
        return $this->hasMany('App\Tyche');
    }    

}
