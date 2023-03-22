<?php

namespace App\Models\KY_View;

use Illuminate\Database\Eloquent\Model;

class V_Project extends Model
{
    protected $table = 'v_projects';
    protected $primaryKey = 'PRJ_ID';
    protected $connection = 'KY';
}
