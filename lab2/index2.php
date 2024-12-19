$text = "مرحبًا بكم في PHP!";
echo $text;

$singleQuote = 'هذه سلسلة نصية باستخدام علامات اقتباس مفردة.';
$doubleQuote = "هذه سلسلة نصية باستخدام علامات اقتباس مزدوجة.";
echo $singleQuote;
echo $doubleQuote;

$firstName = "أحمد";
$lastName = "محمد";
$fullName = $firstName . " " . $lastName;
echo $fullName; 

$text = "سلسلة نصية";
$length = strlen($text);
echo "طول السلسلة النصية هو: $length"; 

$text = "مرحبًا بالعالم!";
$newText = str_replace("العالم", "PHP", $text);
echo $newText;

$text = "مرحبا بكم في PHP!";
echo strtoupper($text); 
echo strtolower($text); 

$text = "مرحبا بكم في PHP!";
$substring = substr($text, 7, 4);
echo $substring; 

$text = "أتعلم PHP!";
$position = strpos($text, "PHP");
if ($position !== false) {
    echo "سلسلة 'PHP' موجودة في الموضع: $position"; 
}

$text = "    نص مع فراغات    ";
$trimmedText = trim($text);
echo $trimmedText; 

$text = "تفاح,موز,برتقال";
$fruits = explode(",", $text);
print_r($fruits); 