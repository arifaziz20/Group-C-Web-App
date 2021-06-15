<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    use HasFactory;

    public function preset() // write this in Student Model
    {
        return $this->belongsTo(preset::class);
    }

    public function pc_builder() // write this in Student Model
    {
        return $this->belongsTo(pc_builder::class);
    }
    
    protected $fillable = [
        'name',
        'capacity',
        'price',
        'type',
        'form_factor'
    ];

}
