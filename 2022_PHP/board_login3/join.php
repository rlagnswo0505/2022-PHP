<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>

<body>
    <h1>회원가입</h1>
    <a href="login.php">로그인</a>
    <form action="join_proc.php" method="post">
        <div><input type="text" placeholder="아이디" name="uid" id=""></div>
        <div><input type="password" placeholder="비밀번호" name="upw" id=""></div>
        <div><input type="password" placeholder="비밀번호 확인" name="upw_confirm" id=""></div>
        <div><input type="text" placeholder="이름" name="nm" id=""></div>
        <div>
            성별 :
            <label for="">
                여자
                <input type="radio" name="gender" value="0" id="">
            </label>
            <label for="">
                남자
                <input type="radio" name="gender" value="1" id="">
            </label>
        </div>
        <div>
            <input type="submit" value="회원가입">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>

</html>