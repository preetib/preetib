<?php


$nums_arr = array(1,2,3,5,7,9,10);

$nos = count($nums_arr);
// craete odd nos array

    $j = 0;

for($i=0; $i<$nos; $i++)
{
    //############## if (num % 2 == 0) then the number is even otherwise odd.

    if($nums_arr[$i] % 2 != 0)
    {
        $odds_arr[$j] = $nums_arr[$i]; 
        $j++;
    }

}

print_r($odds_arr);


/* ################### output array of odd numbers
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 9
)

*/

?>
