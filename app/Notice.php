<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable=['category','title','description','file'];

    public function getRules($act="add")
    {
        $rules = array(
            'category.*' => 'required',
            'title' => 'required',
            'description' => 'required',
            'file' => 'required'
        );

        if($act="update") {
            $rules['file.*'] = 'sometimes|file';
        }

        return $rules;
    }

}
