<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preset extends Model
{
    use HasFactory;
    
    public function pc_builder() // write this in Student Model
    {
        return $this->belongsTo(pc_builder::class);
    }

    public function cpu() // write this in Student Model
    {
        return $this->hasOne(cpu::class);
    }

    public function gpu() // write this in Student Model
    {
        return $this->hasOne(gpu::class);
    }
    
    public function psu() // write this in Student Model
    {
        return $this->hasOne(psu::class);
    }
    
    public function ram() // write this in Student Model
    {
        return $this->hasOne(ram::class);
    }

    public function storage() // write this in Student Model
    {
        return $this->hasOne(storage::class);
    }

    public function motherboard() // write this in Student Model
    {
        return $this->hasOne(motherboard::class);
    }

    protected $fillable = [
        'cpu',
        'ram',
        'storage',
        'gpu',
        'psu',
        'motherboard',
        'total_price'
    ];
}
