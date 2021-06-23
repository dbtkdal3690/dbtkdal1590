<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';


if ( isset($_GET['id']) == false ) {
  echo "id를 입력해주세요.";
  exit;
}
$id = intval($_GET['id']);
$sql = "
SELECT *
FROM article AS A
WHERE A.id = '${id}'
";
$article = DB__getRow($sql);

if ( $article == null ) {
  echo "${id}번 게시물은 존재하지 않습니다.";
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원정보 수정하기</title>
</head>
<body>
  <form action="doModify.php">
  <div>
  <span>아이디</span>
  <input type="text" name="" id="">
  </div>
  <div>
  <span>비밀번호</span>
  <input type="password" name="" id="">
  </div>
  <div>
  <input type="submit" value="회원정보수정"></div>
  </form>
</body>
</html>