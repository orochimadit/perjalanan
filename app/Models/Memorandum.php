<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorandum extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','number','to','from','time','title','subject','description','file','approve'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
