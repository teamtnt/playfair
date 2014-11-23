<?php

namespace TeamTNT\PlayFair\Test\Math;

use TeamTNT\PlayFair\Math\Common;

class CommonTest extends \PHPUnit_Framework_TestCase {

    public function testMean()
    {
        $x = [1,2,3,4,5];
        $y = [1,2,1.3,3.75,2.25];
        $common = new Common();

        $rezx = $common->mean($x);
        $rezy = $common->mean($y);

        $this->assertTrue($rezx == 3);
        $this->assertTrue($rezy == 2.06);
    }
} 