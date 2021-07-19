<?php
class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse(int $x)
    {
        $temp =0;
        $temp =(int) ( $x / 10);
        return $temp;
        
    }
}
$one = new Solution();
//$one->reverse(-234);
$op = $one->reverse(120);
$op = $one->reverse(123);
echo $op;
