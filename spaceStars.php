<?php
/*
 * �������� ����
 */
$n = 10;
$stars = 1;
$pr = $n-$stars;
for($i=1;$i<=$n;$i++){

    for($ii=1; $ii<=$pr; $ii++){
        print(' ');
    };

    for($iii=1; $iii<=$stars; $iii++){
        print('*');
    };

    print(PHP_EOL);

    $stars++;
    $pr--;
};

/*
 * ����, ������� 1
 */
$n = 10;
$stars = 1;
$pr = $n-$stars;
for($i=1;$i<=$n;$i++){

    for($ii=1; $ii<=$pr; $ii++){
        print(' ');
    };

    for($iii=1; $iii<=$stars; $iii++){
        print('*');
    };

    for($iii=2; $iii<=$stars; $iii++){
        print('*');
    };

    print(PHP_EOL);

    $stars++;
    $pr--;
};

/*
 * ����, ������� 2
 */
$n = 10;
$stars = 1;
$pr = $n-$stars;
for($i=1;$i<=$n;$i++){

    for($ii=1; $ii<=$pr; $ii++){
        print(' ');
    };

    for($iii=1; $iii<=$stars; $iii++){
        print('*');
    };

    print(PHP_EOL);

    $stars = $stars+2;
    $pr--;
};

/*
 * ����, �� ������ �������� 2 ����
 */
$n = 10;
$stars = 1;
$pr = $n-$stars;
for($i=1; $i<=$n; $i++){

    for($ii=1; $ii<=$pr; $ii++){
        print(' ');
    };

    for($iii=1; $iii<=$stars; $iii++){
        print('*');
    };

    for($iii=2; $iii<=$stars; $iii++){
        print('*');
    };

    print(PHP_EOL);

    $stars++;
    $pr--;
};

$stars = ($n*2)-3;
$pr = 1;
for($i=1; $i<=$n; $i++){

    for($ii=1; $ii<=$pr; $ii++){
        print(' ');
    };

    for($ii=1; $ii<=$stars; $ii++){
        print('*');
    };

    print(PHP_EOL);

    $stars = $stars-2;
    $pr++;
};