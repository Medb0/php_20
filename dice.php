<?php

/*
주사위 게임
*/

function roll()
{
    $cpu = rand(1,6);
    $player = rand(1,6);

    echo "컴퓨터 : ". $cpu . "플레이어 : " . $player."<br>";

    if($cpu > $player){
        echo "패배<br>";
    }else if($cpu == $player){
        echo "무승부<br>";
    }else{
        echo "승리!<br>";
    }
}

for($i=0;$i<5;$i++)
roll();