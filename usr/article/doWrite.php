<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");

$title = getStrValueOr($_GET['title'], "");
$body = getStrValueOr($_GET['body'], "");


if ( !$title ) {
  jsHistoryBackExit("제목을 입력해주세요.");
}

if ( !$body ) {
  jsHistoryBackExit("내용을 입력해주세요.");
}

$sql = "
INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '${title}',
`body` = '${body}'
";
mysqli_query($dbConn, $sql);

$id = mysqli_insert_id($dbConn);


jsLocationReplaceExit("detail.php?id=${id}", "${id}번 게시물이 생성되었습니다."); 