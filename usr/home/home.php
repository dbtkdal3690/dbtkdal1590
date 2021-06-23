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

<?php 
$pageTitle = "나의 페이지";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

<div>
<a href="../member/Modify.php">회원 수정하기</a>
<a href="../member/doDelete.php">회원 탈퇴하기</a>
<a href="/">#</a>
<hr>


