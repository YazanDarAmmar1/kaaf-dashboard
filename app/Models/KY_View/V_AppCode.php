<?php

namespace App\Models\KY_View;

use Illuminate\Database\Eloquent\Model;

class V_AppCode extends Model
{
    protected $table = 'V_appcodes';
    protected $primaryKey = 'SEQ';
    protected $connection = 'KY';
}
