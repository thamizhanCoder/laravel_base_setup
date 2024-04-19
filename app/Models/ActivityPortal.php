<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityPortal extends Model
{
    protected $table='activity_portal';
    protected $primaryKey = 'activity_portal_id';
    protected $fillable=['portal_name','status','created_on'];
    public $timestamps = false;

}