<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class repairticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'emailaddress',
        'division',
        'unitsection',
        'name',
        'designation',
        'typeofrequest',
        'description',
        'status',
        'user_id',
        'addtlstatus',
        'itemtype'
    ];
}
