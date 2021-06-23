<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");


$id = getIntValueOr($_GET['id'], 0);

if ( $id == 0 ) {
  jsHistoryBackExit("번호를 입력해주세요.");
}


$sql = "
SELECT *
FROM article AS A 
WHERE A.id = '${id}'
";
$rs = mysqli_query($dbConn, $sql);
$article = mysqli_fetch_assoc($rs);

if ( $article == null ) {
  echo "{id}번 게시물은 존재하지 않습니다.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>게시물 수정하기</title>
</head>
<body>
  <form action="doModify.php">
  <div>
  <span>제목</span>
  <input type="text" name="" id="">
  </div>
  <div>
  <span>내용</span>
  <input type="text" name="" id="">
  </div>
  <div>
  <input type="submit" value="글수정"></div>
  </form>
</body>
</html>