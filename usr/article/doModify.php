<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");


if (isset($_GET['title']) == false ) {
  echo "title를 입력해주세요.";
  exit;
}

$title = $_GET['title'];

if (isset($_Get['body']) == false) {
  echo"body를 입력해주세요.";
  exit;
}

$body = $_GET['body'];

$sql = "
INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '${title}',
`body` = '${body}'
";
$rs = mysqli_query($dbConn, $sql);
$article = mysqli_fetch_assoc($rs);


?>
<script>
alert('회원가입이 완료되었습니다.');
location.replace('login.php');
</script>