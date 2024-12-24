<!-- تستخدم دالة GET لإرسال البيانات إلى الخادم، وعادة ما تُستخدم لجلب المعلومات. -->

<?php
// التحقق مما إذا كانت هناك بيانات تم إرسالها باستخدام GET
if (isset($_GET['name'])) {
    // استرجاع القيمة من URL
    $name = $_GET['name'];
    echo "Hello, " . htmlspecialchars($name) . "!";
} else {
    echo "No name provided.";
}
?>

<!-- POST هو نوع من طلبات HTTP يُستخدم لإرسال البيانات إلى الخادم. يُستخدم عادةً في النماذج (forms) لتقديم البيانات. -->

<?php
// التحقق مما إذا كانت البيانات قد تم إرسالها عبر POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // استلام البيانات من النموذج
//     $name = $_POST['name'];
//     // عرض البيانات
//     echo "أهلاً، " . htmlspecialchars($name);
// }
?>
<!-- 
نموذج HTML  لإرسال البيانات  -->
 <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    الاسم: <input type="text" name="name">
    <input type="submit" value="إرسال">
</form> -->
