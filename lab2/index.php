
        <?php
       
        
// تعريف مصفوفة بسيطة
$array = array(1, 2, 3, 4, 5);

// دالة لطباعة عناصر المصفوفة
function printArray($arr) {
    foreach ($arr as $item) {
        echo $item . "<br>"; // استخدم <br> لعرض كل عنصر في سطر جديد
    }
}

// مثال على استخدام الدالة
echo "محتوى المصفوفة: <br>";
printArray($array);
echo "<br>";

// دالة لإضافة عنصر إلى المصفوفة
function addElement(&$arr, $element) {
    array_push($arr, $element);
}

// مثال على استخدام الدالة
addElement($array, 6);
echo "بعد إضافة العنصر 6: <br>";
printArray($array);
echo "<br>";

// دالة لحساب طول المصفوفة
function getArrayLength($arr) {
    return count($arr);
}

// مثال على استخدام الدالة
$length = getArrayLength($array);
echo "طول المصفوفة: $length<br>";

// دالة للفرز
function sortArray(&$arr) {
    sort($arr);
}

// مثال على استخدام الدالة
sortArray($array);
echo "بعد فرز المصفوفة: <br>";
printArray($array);
echo "<br>";

// دالة للبحث عن عنصر في المصفوفة
function searchElement($arr, $element) {
    return in_array($element, $arr);
}

// مثال على استخدام الدالة
$searchResult = searchElement($array, 4) ? "موجود" : "غير موجود";
echo "العنصر 4: $searchResult<br>";

// دالة لإزالة عنصر من المصفوفة
function removeElement(&$arr, $element) {
    $arr = array_diff($arr, array($element));
}

// مثال على استخدام الدالة
removeElement($array, 3);
echo "بعد إزالة العنصر 3: <br>";
printArray($array);
echo "<br>";

// دالة لعكس المصفوفة
function reverseArray(&$arr) {
    $arr = array_reverse($arr);
}

// مثال على استخدام الدالة
reverseArray($array);
echo "بعد عكس المصفوفة: <br>";
printArray($array);
echo "<br>";

   