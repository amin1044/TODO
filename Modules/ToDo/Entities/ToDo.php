<?php

namespace Modules\ToDo\Entities;

use Illuminate\Database\Eloquent\Model;


class ToDo extends Model
{

    protected $fillable = ['name', 'title', 'start', 'end', 'time_diff', 'status'];
    protected $table = 'web';



}

