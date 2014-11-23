<?php

namespace TeamTNT\PlayFair\Test\Math\Statistics;

use TeamTNT\PlayFair\Math\Statistics\LinearRegression;

class LinearRegressionTest extends \PHPUnit_Framework_TestCase
{

    public function testCalculate()
    {
        $x = [1,2,3,4,5];
        $y = [1,2,1.3,3.75,2.25];

        $lr = new LinearRegression();
        $rez = $lr->calculate($x, $y);

        $this->assertTrue($rez[0] == 0.425);
        $this->assertTrue($rez[1] == 0.785);
    }
}
