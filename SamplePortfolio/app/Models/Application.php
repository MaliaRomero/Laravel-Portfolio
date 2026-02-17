<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    //use HasFactory;

    protected $table = 'applications';

    //protected $guarded = [];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        //'job_id', //foreign key
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}