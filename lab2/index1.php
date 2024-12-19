 إضافة العنصر
$array = array(1, 2, 3);
array_push($array, 4); 
print_r($array);//


 إزالة العنصر الأخير
$array = array(1, 2, 3, 4);
array_pop($array); 
print_r($array);

$array1 = array(1, 2);
$array2 = array(3, 4);
$merged = array_merge($array1, $array2);
print_r($merged);


البحث عن العنصر 
$array = array(1, 2, 3, 4);
$key = array_search(3, $array);  
echo $key; 

 ترتيب المصفوفة
$array = array(4, 2, 3, 1);
sort($array); 
print_r($array);


الاحتفاظ بالعناصر الأكبر من 2
$array = array(1, 2, 3, 4, 5);
$filtered = array_filter($array, function($value) {
    return $value > 2; 
});
print_r($filtered);


تربيع كل عنصر
$array = array(1, 2, 3);
$squared = array_map(function($value) {
    return $value * $value; 
}, $array);
print_r($squared);


حساب عدد العناصر
$array = array(1, 2, 3, 4);
$count = count($array); //
echo $count; 
