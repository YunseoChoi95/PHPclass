<?php
    //single line comment 외줄 주석
    /*
        multi line comment 여러줄 주석
    */
        $age = 21; // =은 대입연산자, 오른쪽 값 복사하여 왼쪽에 준다
        print "<div>" . $age . "</div>";

        // print는 html태그로 보여짐

            $name;
            print "<div>" . $name . "</div>";

            $name = "홍길동";
            print "<div>" . $name . "</div>";

            $name = "장보고";
            print "<div>" . $name . "</div>";

            $name = 10;
            print "<div>" . $name . "</div>";

    // 변수명 네이밍 규칙
    /*
    1. 대소문자 영어, 숫자, 특수기호 _(언더바) 로 이루어져야 함.
    2. 숫자가 맨 앞에 오면 X
    */

    $a1b = 12;
    print $a1b;

    $_124 = "ㅁㅁㅁㅁ";
    print $_124;



?>