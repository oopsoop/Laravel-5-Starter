<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $table = 'announcements';

    protected $fillable = ['title', 'binfo', 'message'];

    public $timesamps = true;
}
