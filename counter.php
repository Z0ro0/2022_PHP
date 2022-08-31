<style>
    span{
        color:red;
        font-size:2em;
    }
</style>
<?php
//1. count.txt를 filename에 대입
//2. r모드로 file을 열어서 fp가 가리키게 한다. (r모드)
//3. 한 문자 읽어온다
//4. 문자를 숫자로 바꾼다((int))
//5. 1을 더한다
//6. w모드로 연다.
//7. 파일쓰기한다.
//8. 파일 닫는다.
$filename = "count.txt";
$fp = fopen($filename,"r");
$num = fgets($fp);
$count = (int)$num;
$count = $count + 1;
fclose($fp);

$fp = fopen($filename,'w');
fwrite($fp, $count);
fclose($fp);

?>
<h1>당신은 <span><?php echo $count ?></span>번째 방문자입니다</h1>