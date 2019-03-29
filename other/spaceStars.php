<?php
/*
 * Половина ёлки
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
 * Ёлка, вариант 1
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
 * Ёлка, вариант 2
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
 * Ромб, на основе варианта 2 Ёлка
 */
$n = 10;
$stars = 1;
$pr = $n-$stars;
/* Здесь использую вариант 1, но можно и вариант 2 */
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
/* А здесь на основе варианта 2 */
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