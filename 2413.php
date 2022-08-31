<?php
    //리턴타입X, 배개변수X
    function add1(){
        echo 3+5;
    }
    add1();
    //리턴타입X, 매개변수O
    function add2($x,$y){
        echo $x+$y;
    }
    add2(3,5);
    //리턴타입O,배개변수X
    function add3(){
        return 3+5;
    }
    echo add3();
    //리턴타입O,매개변수O
    function add4($x,$y,$z){
        return $x+$y+$z;
    }
    echo add4(3,5,7);
?>