<?php
//파일 쓰기 fwrite
$filename="data2.txt";
$str="The PHP development team announces the immediate availability of PHP 8.1.6. This is a bug fix release.";
$fp = fopen($filename,"w");
fclose($fp);
echo "저장되었습니다.";
?>

<?php
$filename="write.txt";
$str = "marry had a dog";

file_put_contents($filename,$str);
echo "Saved!!";
?>