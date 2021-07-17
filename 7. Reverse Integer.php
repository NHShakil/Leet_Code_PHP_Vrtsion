<?php
class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse(int $x)
    {
        $reslt = 0;
        if ($x < 0) {
            $x = abs($x);
            $reslt = "-" . strrev($x);
        } else {
            $x = abs($x);
            $reslt = strrev($x);
            //echo substr($reslt, 0,0);
            ltrim($reslt, '0');
        }
        return $reslt;
    }
}
$one = new Solution();
//$one->reverse(-234);
$one->reverse(120);
//$one->reverse(0123);
