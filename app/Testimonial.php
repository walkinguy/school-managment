<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['profile', 'name', 'testimonial', 'role'];

    public function getRules($act="add")
    {
        $rules = array(
            'profile.*' => 'mimes:jpeg,bmp,png|required|file|image|max:5000',
            'name' => 'required',
            'testimonial' => 'required',
            'role' => 'required'
        );

        if($act="update") {
            $rules['profile.*'] = 'sometimes|mimes:jpeg,bmp,png|file|image|max:5000';
        }

        return $rules;
    }
}
