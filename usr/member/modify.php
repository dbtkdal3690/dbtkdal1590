<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");


$loginId = getIntValueOr($_GET['loginId'], 0);

if ( $loginId == 0 ) {
  jsHistoryBackExit("번호를 입력해주세요.");
}


$sql = "
SELECT *
FROM `member` AS M 
WHERE M.loginId = '${loginId}'
";
$rs = mysqli_query($dbConn, $sql);
$member = mysqli_fetch_assoc($rs);

if ( $member == null ) {
  echo "회원이 존재하지 않습니다.";
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
  <form action="doModify.php".php">
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