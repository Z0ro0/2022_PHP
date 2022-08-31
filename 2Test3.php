<?php
    // 100 ~ 999 사이에 7의 배수의 갯수와 합을 구하시오
    $Num = 0;
    $NumSu = 0;
    for($i = 0; $i <= 999; $i++){
        if($i%7==0){
            $Num += $i;
            $NumSu ++;
        }
    }
    echo "합은".$Num."<br/>";
    echo "배수의 갯수는".$NumSu;
?>