<?php
// ملف يحتوي على جميع المعاملات والتراكيب الشرطية والحلقات في PHP

// 1. المعاملات (Operators)

// 1.1. المعاملات الرياضية
$a = 10;
$b = 5;
$sum = $a + $b; // الجمع
$difference = $a - $b; // الطرح
$product = $a * $b; // الضرب
$quotient = $a / $b; // القسمة
$modulus = $a % $b; // باقي القسمة

// 1.2. المعاملات المنطقية
$true = true;
$false = false;
$result = $true && $false; // AND
$result = $true || $false; // OR
$result = !$true; // NOT

// 2. التراكيب الشرطية

// 2.1. if الشرطية
if ($a > $b) {
    echo "a أكبر من b<br>";
} elseif ($a < $b) {
    echo "a أصغر من b<br>";
} else {
    echo "a يساوي b<br>";
}

// 2.2. switch الشرطية
$color = "أحمر";
switch ($color) {
    case "أحمر":
        echo "اللون هو أحمر<br>";
        break;
    case "أزرق":
        echo "اللون هو أزرق<br>";
        break;
    default:
        echo "لون غير معروف<br>";
}

// 3. الحلقات

// 3.1. حلقة for
for ($i = 0; $i < 5; $i++) {
    echo "العدد هو: $i<br>";
}

// 3.2. حلقة while
$i = 0;
while ($i < 5) {
    echo "العدد هو: $i<br>";
    $i++;
}

// 3.3. حلقة do...while
$i = 0;
do {
    echo "العدد هو: $i<br>";
    $i++;
} while ($i < 5);

// نهاية الملف
?>