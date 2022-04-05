<?php
    // for 문은 내가 몇 번 반복할지 정하는 것임.
    //    A구간     B구간    C구간
    for ( $i = 0 ; $i < 10 ; $i++ )
    {
        print "$i <br>"; //내용
    }

    // A : 초기와 공간
    // B : 반복 비교문
    // C : 증감식

    // A는 최초 한번만 실행 > B는 참인동안 반복 > 내용 > C
    //  > B > 내용 > C
    //  > B > 내용 > C
    //  ... B가 false가 될 때까지
?>