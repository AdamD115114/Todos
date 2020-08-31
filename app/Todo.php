<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'completed'];


    protected $guarded = ['created_date', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
