<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필</title>
</head>

<body>
    <div>프로필 이미지 디스플레이</div>
    <!-- 인코딩 타입 필수 : enctype="multipart/form-data" -->
    <form action="profile_proc.php" method="post" enctype="multipart/form-data">
        <!-- input type[file]에 name 중요함 
        accept="image/*" 추가하면 파일에서 이미지만 볼수있게 선택할 수 있음
        -->
        <div><label>이미지 : <input type="file" name="img" accept="image/*"></label></div>
        <div><input type="submit" value="이미지 업로드"></div>
    </form>
</body>

</html>