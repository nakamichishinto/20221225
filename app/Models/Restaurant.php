<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable=['name','detail'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function reserve()
    {
        return $this->hasMany(Reserve::class);
    }

}
