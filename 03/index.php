<?php

declare(strict_types=1);

use LDAP\Result;

/*
1. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
2
3
...
*/

echo PHP_EOL . '1 užduotis' . PHP_EOL;
$i = 1;
echo PHP_EOL . 'WHILE' . PHP_EOL;
while ($i <= 10) {
    echo $i . PHP_EOL;
    ++$i;
}

echo PHP_EOL . 'DO WHILE' . PHP_EOL;
$i = 1;
do {
    echo $i . PHP_EOL;
    ++$i;
} while ($i <= 10);

echo PHP_EOL . 'FOR LOOP' . PHP_EOL;
$i = 1;
for ($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
};

echo PHP_EOL . 'FOREACH' . PHP_EOL;
// $i = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = range(1, 10);
foreach ($array as $index) {
    echo $index . PHP_EOL;
};

/*
2. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

echo PHP_EOL . '2 užduotis' . PHP_EOL;
for ($i = 15; $i > 2; $i--) {
    echo $i . PHP_EOL;
};

/*
3. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi būti išspausdintas naujoje eilutėje.
1
3
5
...
*/

echo PHP_EOL . '3 užduotis' . PHP_EOL;

for ($i = 1; $i < 20; $i = $i + 2) {
    echo $i . PHP_EOL;
};

/*
4. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

echo PHP_EOL . '4 užduotis' . PHP_EOL;
for ($i = 1; $i < 20; $i++) {
    if ($i % 3 === 0) {
        echo $i . PHP_EOL;
    }
};


/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

echo PHP_EOL . '5 užduotis' . PHP_EOL;
for ($i = 1; $i < 20; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
        echo $i . PHP_EOL;
    }
};


/*
6. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/

echo PHP_EOL . '6 užduotis' . PHP_EOL;
$array = range(1, 100);
$result = 0;
foreach ($array as $item) {
    $result += $item;
};
print_r($result . PHP_EOL);


/*
7. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];

echo PHP_EOL . '7 užduotis' . PHP_EOL;
$result = '';
foreach ($days as $index => $value) {
    if ($index < count($days) - 1) {
        $result .= $value . '-';
    } else {
        $result .= $value; //kad neliktų minuso eilutės gale
    }
}
print_r($result . PHP_EOL);

/*
8. Skaičių konvertavimas į bool.
Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite kiekvieną skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę
-5
bool(true)
----------
-4
bool(true)
----------
...
Atkreipkite dėmesį, į ką pavirsta skaičius 0
*/

echo PHP_EOL . '8 užduotis' . PHP_EOL;
$array = range(-5, 5);
foreach ($array as $index) {
    echo $index . PHP_EOL;
    var_dump((bool) $index);
};


/*
9. Foreach'inkite per masyvą ir išspausdinkite jame esančias eilutes.
Jeigu iteracijos tekstas yra vienas iš: '/', '*' arba '()', jo nespausdinkite, teskite iteraciją.
Jeigu interacijos tekstas yra lygus '---', teksto nespausdinti, o ciklas turėtų nutrūkti.
Užduočiai atlikti naudokite 'continue' ir 'break'.
*/
$items = [
    'Lazy',
    '/',
    'fox',
    'jumps',
    '*',
    'over',
    'the',
    '()',
    'lazy',
    'dog',
    '---',
    'this',
    'should',
    'not',
    'be',
    'printed',
    'or',
    'iterated',
];

echo PHP_EOL . '9 užduotis' . PHP_EOL;
foreach ($items as $key => $word) {
    if ($word === '/' || $word === '*' || $word === '()') {
        continue;
    }
    if ($word === '---') {
        break;
    }
    echo $word . ' ';
};
print_r(PHP_EOL);

/*
10. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinta vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/

echo PHP_EOL . '10 užduotis' . PHP_EOL;
for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'HeyHo ';
    } elseif ($i % 3 === 0) {
        echo 'Hey ';
    } elseif ($i % 5 === 0) {
        echo 'Ho ';
    } else {
        echo $i . ' ';
    }
}
print_r(PHP_EOL);

/*
11. Pasinaudodami ciklais, išspausdinkite lentelę, kurioje nelyginiai skaičiai yra žvaigždutės.
Parašykite kodą taip, kad jis su menkais pakeitimais veiktų ir tuo atveju, jeigu reiktų spausdinti
ne iki 20, bet iki kito dviženklio skaičiaus (pvz. 90).
* |2 |* |4 |*
6 |* |8 |* |10
* |12|* |14|*
16|* |18|* |20
*/

echo PHP_EOL . '11 užduotis' . PHP_EOL;
for ($i = 1; $i <= 20; $i++) {
    if ($i < 10) {
        // pridedamas tarpelis vienaženklių skaičių pabaigoje
        if ($i % 2 !== 0 && $i % 5 !== 0) {
            echo '* |';
        } elseif ($i % 2 === 0 && $i % 5 !== 0) {
            echo $i . ' |';
        };
        if ($i % 5 === 0) {
            if ($i % 2 !== 0) {
                echo '*' . PHP_EOL;
            } elseif ($i % 2 === 0) {
                echo $i . PHP_EOL;
            }
        }
    } else {
        if ($i % 2 !== 0 && $i % 5 !== 0) {
            echo '* |';
        } elseif ($i % 2 === 0 && $i % 5 !== 0) {
            echo $i . '|';
        };
        if ($i % 5 === 0) {
            if ($i % 2 !== 0) {
                echo '*' . PHP_EOL;
            } elseif ($i % 2 === 0) {
                echo $i . PHP_EOL;
            }
        }
    }
}


/*
12. Pasinaudodami ciklais, išspausdinkite į terminalą šią figūrą.
*
**
***
****
*****
******
*******
******
*****
****
***
**
*
*/

echo PHP_EOL . '12 užduotis' . PHP_EOL;
$result = '';
for ($i = 1; $i <= 7; $i++) {
    $result .= '*';
    print_r($result . PHP_EOL);
}

$result1 = '';
for ($j = 6; $j >= 1; $j--) {
    for ($k = 1; $k <= $j; $k++) {
        $result1 .= '*';
    }
    print_r($result1 . PHP_EOL);
    $result1 = '';
}

/*
13. Išspausdinkite stačiakampį, kurio matmenys bus kinamųjų reikšmės.
*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*/

echo PHP_EOL . '13 užduotis' . PHP_EOL;
$length = 5;
$height = 4;

for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $length; $j++) {
        print_r('*  ');
    }
    print_r(PHP_EOL);
}



/*
14. Išspausdinkite skaičių nuo 1 iki x daliklius, mažesnius už patį skaičių.
1:
2: 1
3: 1
4: 1 2
5: 1
6: 1 2 3
7: 1
8: 1 2 4
9: 1 3
10: 1 2 5
11: 1
12: 1 2 3 4 6
...
 */

echo PHP_EOL . '14 užduotis' . PHP_EOL;
$x = 12;
for ($i = 1; $i <= $x; $i++) {
    print_r($i . ': ');
    for ($j = 1; $j < $i; $j++) {
        if ($i % $j === 0) {
            print_r($j . ' ');
        }
    }
    print_r(PHP_EOL);
}
