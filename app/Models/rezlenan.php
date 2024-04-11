<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class rezlenan extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps =false;


    public function User(): BelongsTo
    {

       return $this->belongsTo(User::class);
    }
}
