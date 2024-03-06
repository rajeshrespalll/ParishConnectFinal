<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BibleStudyMaterial extends Model
{
    use HasFactory;

    protected $table = 'biblestudymaterials';

    protected $fillable = [
        'ResourceTitle',
        'ResourceImage',
        'ResourceLink',
        
    ];
}
