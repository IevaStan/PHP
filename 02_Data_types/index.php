<?php

declare(strict_types=1);

/*
1. Pašalinkite/užkomentuokite praeitos užduoties eilutes, kad jos netrukdytų toliau tęsti darbo.
Išveskite į terminalą kintamojo $variableToDebug:
- tik reikšmę
- reikšmę kartu su duomens tipu
*/
$variableToDebug = 15;
print_r($variableToDebug . PHP_EOL);
var_dump($variableToDebug);

/*
2. Sudėliokite masyvą ir jį atspausdinkite iš šių reikšmių:
- Hello
- Learning
- Amazing
- CodeAcademy
- Php
- Git
*/
$array =  ['Hello', 'Learning', 'Amazing', 'CodeAcademy', 'Php', 'Git'];
var_dump($array);
/*
3. Pakeiskite duotų kintamųjų reikšmes į:
- int
- bool
*/

//pakeisti i int:
$variable1 = false;
$variable2 = true;
$variable3 = '2022 year';

$variable1 = (int) $variable1;
$variable2 = (int) $variable2;
$variable3 = (int) $variable3;

var_dump($variable1);
var_dump($variable2);
var_dump($variable3);

// //pakeisti i bool:
$variable4 = 150;
$variable5 = [];
$variable6 = 'Year - 2022';

$variable4 = (bool) $variable4;
$variable5 = (bool) $variable5;
$variable6 = (bool) $variable6;

var_dump($variable4);
var_dump($variable5);
var_dump($variable6);

/*
4. Atlikite šiuo loginius operatorius su duotais kintamaisiais taip, kad gautumėt true ir false
- &&
- ||
*/

$variable7 = 145;
$variable8 = '145';
$variable9 = '150';
$variable10 = 150;

var_dump($variable7 === $variable8 || $variable9 === $variable10); //false
var_dump($variable7 < $variable10 && $variable8 != $variable9); //true


/*
5. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:
- 987 + 545 - 32 * 94
- 32 pakelkite laipsniu 3 ir pridėkite 18
- 120 padalinkite iš 4 ir dar karta padalinkite iš 3
- apkaičiuokite liekaną po skaičiaus 187 dalybos iš 5
- skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
- skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/

print_r(987 + 545 - 32 * 94 . PHP_EOL);
print_r(32 ** 3 + 18 . PHP_EOL);
print_r(120 / 4 / 3 . PHP_EOL);
print_r(187 % 5 . PHP_EOL);
$x = 3;
++$x;
++$x;
++$x;
print_r($x . PHP_EOL);
$y = 12;
--$y;
--$y;
--$y;
--$y;
print_r($y . PHP_EOL);

/*
6. Parasykite koda, kad jis patikrintu ar:
- 56 > 77
- 190 <= 230
- 230 yra lygu '230'
- 45 nera lygu '45
*/
print_r((56 > 77 ? 'Teisingai' : 'Neteisingai') . PHP_EOL);
print_r((190 <= 230 ? 'Teisingai' : 'Neteisingai') . PHP_EOL);
print_r((230 == '230' ? 'Teisingai' : 'Neteisingai') . PHP_EOL);
print_r((45 != '45' ? 'Teisingai' : 'Neteisingai') . PHP_EOL);

/*
7. Parasykite koda, kad jis ar reiksme egzistuoja
- pasirasykite kintamaji $variable = 10; patikrinkite ar jis egzistuoja;
- jeigu egzistuoja patikrinkite koks jo tipas
- istrinkite jo apsirasyma ir patikrinkite ar egzistuojate. kokia reiksme gaunate? ar gaunate error?
*/

$variable11 = 10;
var_dump(isset($variable11));
var_dump($variable11);

/*
8. Išspausdinkite tekstą, kuris bus sudarytas sujungus visas eilutes, esančias kintamuosiuose apačioje.
$part1 = 'This';
$part2 = 'is';
$part3 = 'called';
$part4 = 'string';
$part5 = 'concatenation';
*/

$part1 = 'This';
$part2 = 'is';
$part3 = 'called';
$part4 = 'string';
$part5 = 'concatenation';
print_r($part1 . ' ' . $part2 . ' ' . $part3 . ' ' . $part4 . ' ' . $part5 . PHP_EOL);

/*
9. Jūs turite parašyti sąlygą, pagal kurią bus taikoma nuolaida produktų kategorijoms.
Parašykite sąlygą, kuri būtų true, kai:
- produkto kategorija yra 'smartphone' ir kaina yra daugiau arba lygu 1200eur
ARBA
- produkto kategorija yra 'washing_machine' ir kaina yra tarp 500eur ir 700eur (įskaitant 500).
Sąlygos rezultatą priskirkite kintamajam $result ir šį kintamąjį išveskite į terminalą pasinaudodami var_dump.

*/

define('CATEGORY_SMARTPHONE', 'smartphone');
define('CATEGORY_WASHING_MACHINE', 'washing_machine');
$productCategory = CATEGORY_SMARTPHONE;
$productPrice = 1200;
$result = ($productCategory = CATEGORY_SMARTPHONE && $productPrice >= 1200 || $productCategory = CATEGORY_WASHING_MACHINE && $productPrice >= 500 && $productPrice < 700);
// ar reikia kodo gale: "?? true"
var_dump($result);
