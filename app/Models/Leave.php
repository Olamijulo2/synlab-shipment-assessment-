<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'leaveType',
        'fromDate',
        'toDate',
        'description',
        'reliefRemark',
        'reliefRemarkDate',
        'lineManagerRemark',
        'lineManagerRemarkDate',
        'adminRemark',
        'adminRemarkDate',
        'user_id',
        'adminID',
        'relief',
        'reliefStatus',
        'lineManagerStatus',
        'AdminStatus',
        

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
