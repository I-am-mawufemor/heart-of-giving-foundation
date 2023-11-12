<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_heading_1',
        'sub_heading_1_body',
        'sub_heading_2',
        'sub_heading_2_body',
        'sub_heading_3',
        'sub_heading_3_body',
        'sub_heading_4',
        'sub_heading_4_body',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
