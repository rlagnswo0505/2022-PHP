<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>

<body>
    <h1>글쓰기</h1>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" id="" placeholder="제목"></div>
        <div><textarea placeholder="내용" name="ctnt" id="" cols="30" rows="10"></textarea></div>
        <input type="submit" value="글등록">
        <input type="reset" value="초기화">
    </form>
</body>

</html>