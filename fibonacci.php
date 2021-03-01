<?php
$numbers = 100;
$result = [];
for ( $i = 0; $i <$numbers;$i++)
{
    if($i==0){
        $fibonaci = 0;
    }elseif ($i ==1){
        $fibonaci = 1;
    }else{
        $fibonaci = $result[$i-2]+$result[$i-1];
    }
    $result[$i]=$fibonaci;
}
echo "{$numbers} so fibonaci dau tien la:".PHP_EOL;
foreach ($result as $item){
    echo "{$item},";
}
?>