<?php
$Y = array (
    '10', '2', '3', '4', '5', '6', '112', '40'
);

$X = array (
    '12', '32', '5', '7', '8', '11', '123', '50'
);

function if_natural($Y){
    if($Y==1 or $Y==0)return false;
    for($d=2; $d*$d<=$Y; $d++)
    {
        if($Y%$d==0)return false;
    }
    return true;
}

foreach($Y as $key => $value)
{
    if(!if_natural($value)) unset($Y["$key"]);
}
$Z = if_natural($Y);

echo $Z;

$max= $X;



