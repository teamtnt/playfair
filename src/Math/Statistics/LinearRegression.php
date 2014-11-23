<?php

namespace TeamTNT\PlayFair\Math\Statistics;

use TeamTNT\PlayFair\Math\Common;

class LinearRegression extends Common{

    private $scale = 3;

    public function calculate($x, $y)
    {
        $mean_x = $this->mean($x);
        $mean_y = $this->mean($y);

        $numerator = 0;
        $denominator = 0;
        for($i=0; $i<count($x); $i++) {
            $numerator = bcadd($numerator, bcmul(bcsub($x[$i], $mean_x, $this->scale),bcsub($y[$i], $mean_y, $this->scale), $this->scale), $this->scale);
            $denominator = bcadd($denominator, pow(bcsub($x[$i],$mean_x, $this->scale), 2), $this->scale);
        }

        $b = bcdiv($numerator, $denominator, $this->scale);
        $a = bcsub($mean_y, bcmul($b, $mean_x, $this->scale), $this->scale);

        return [$b, $a];
    }

}