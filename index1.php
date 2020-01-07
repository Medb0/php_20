<?php // php를 시작하겠다는 태그입니다.

// C언어에서 출력은 == printf(내용);
// Java에서 출력은 System.out.println("내용");

// 주석종류는 3가지
/* */
#

$num = 123; // 변수는 $변수명으로 선언한다.
var_dump($num); // 변수 혹은 상수의 자료형을 알려준다.

$str = "문자열";
var_dump($str);

define("TEST","10");    // 상수를 지정하는 define 함수
const TEST1 = 11;   // 상수를 지정하는 const 자료형처럼 사용
echo TEST1."<br>";

// System.out.println("가나다"+a+"라마바");
echo $num . $str; // echo 변수 . 변수 등 . 으로 동시출력할 수 있다.

if($num > 100){
    echo "참";
}else{
    echo "거짓";
}

for($i=0;$i<10;$i++){
    echo $i."<br>";
}

echo rand(0 , 10);  // rand(최소값 , 최대값) 무작위 숫자를 만들어내는 함수입니다.
?>