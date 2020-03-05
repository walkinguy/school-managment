<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['title', 'description', 'profile'];

    public function getRules($act = "add")
    {
        $rules = array(
            'title' => 'required',
            'description' => 'required',
            'profile' => 'required'

        );

        if ($act = "update") {
            $rules['profile.*'] = 'sometimes';
        }

        return $rules;
    }
}
