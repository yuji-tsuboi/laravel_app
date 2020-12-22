<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'content',
        'user_id'
    ];

    protected $dates = ['deleted_at'];

    public function getByUserId($id)
    {
        return $this->where('user_id', $id)->get();
    }
}