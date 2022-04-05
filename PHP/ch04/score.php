<?php
    $score = 95;

    switch($score)
    {
        case 100:
            print "당신의 성적은 A입니다.";
            break;
            // break - 케스케이딩 된다.. 브레이크 만날 때 까지 계속 내려감.

        case ($score>=90):
            print "당신의 성적은 B+입니다.";
            break;

        case 80:
            print "당신의 성적은 B입니다.";
            break;

        case 60:
            print "당신의 성적은 C입니다.";
            break;

        case 0:
            print "당신의 성적은 F입니다.";
            break;
    }
?>