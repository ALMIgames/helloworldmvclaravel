<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class holamon extends Model
{
    protected $string = "Hello World!";

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }
}
