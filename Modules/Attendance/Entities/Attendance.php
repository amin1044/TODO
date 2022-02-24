<?php

namespace Modules\Attendance\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;

class Attendance extends Model
{


     protected $table="rollcall";

    /**
     * Set table filllable fields
     * @var array
     */
    protected $fillable = ['today_date','attendance_time','logout_time','time',
        'overtime','time_wasted','description','user_id','status','name'];



}
