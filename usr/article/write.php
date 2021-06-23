<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");

$sql = "
SELECT * 
FROM article AS A 
ORDER BY A.id DESC
";

$rs = mysqli_query($dbConn, $sql);

$articles = [];

while ( $article = mysqli_fetch_assoc($rs) ) {
  $articles[] =$article;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글 작성</title>
</head>
<body>
<h1>글 작성하기</h1>
<hr>

<form action="doWrite.php">
<div>
<span>제목</span>
<input type="text" name=""><br>
<span>내용</span>
<input type="text"><br>
</div>
<div>
<input type="submit" value="글작성">
</div>
</form>
  
</body>
</html>