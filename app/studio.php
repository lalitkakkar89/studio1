<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    protected $primaryKey = 'Id';

    protected $fillable = [
        'Name','OpeningTime','ClosingTime','Status','Date','UserId'
    ];
}
