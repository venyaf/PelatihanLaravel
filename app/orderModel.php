<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use emadadly\LaravelUuid\Uuids;

class orderModel extends Model
{
    use Uuids;
    protected $table = 'order';
    protected $fillable = ['id','phone','amount','status'];
}
