<?php

namespace App\Models\KY_View;

use Illuminate\Database\Eloquent\Model;

class V_GLCSH_TR extends Model
{
    protected $table = 'V_GLCSH_TR';
    protected $connection = 'KY';

    public function getAmountByDay($day, $month, $year)
    {
        $dateStart = "$year-$month-$day";
        $amount = $this->where('TR_DT', '>=', $dateStart)->where('TR_DT', '<=', $dateStart)->sum('AMT');

        return $amount;
    }

}
