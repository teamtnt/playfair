<?php

namespace TeamTNT\PlayFair\Math;

class Common
{
    private $scale = 3;

    public function mean($series)
    {
        $sum = 0;
        foreach($series as $num) {
            $sum = bcadd($sum, $num, $this->scale);
        }

        return bcdiv($sum, count($series), $this->scale);
    }

    public function setScale($value)
    {
        $this->scale = $value;
    }
}
