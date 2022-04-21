<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="sign_up.css">
</head>

<body>
    <main>
        <div class="main_box">
            <a href="index.php" class="main_logo">NAVER</a>
            <div class="main_box-sign">
                <form action="sign_up_proc.php" method="post">
                    <div>
                        <label for="id">아이디</label>
                        <input type="text" name="user_id" id="id" placeholder="@naver.com" required>
                    </div>
                    <div>
                        <label for="pw">비밀번호</label>
                        <input type="password" name="user_password" id="pw" required>
                    </div>
                    <div class="re_pass">
                        <label for="rpw">비밀번호 재확인</label>
                        <input type="password" name="check_password" id="rpw" required>
                    </div>
                    <div>
                        <label for="name">이름</label>
                        <input type="text" name="user_name" id="name" required>
                    </div>
                    <div>
                        <label for="year">생년월일</label>
                        <div class="birth_box">
                            <input type="text" name="bir_yy" id="year" placeholder="년(4자리)" required>
                            <select name="bir_mm" id="month">
                                <option>월</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <input type="number" name="bir_dd" placeholder="일" id="day" min="1" max="31" required>
                        </div>
                    </div>
                    <div>
                        <label for="gender">성별</label>
                        <select name="gender" id="gender">
                            <option value="">성별</option>
                            <option value="m">남자</option>
                            <option value="f">여자</option>
                            <option value="">선택 안함</option>
                        </select>
                    </div>
                    <div>
                        <label for="email">본인 확인 이메일</label>
                        <input type="text" name="user_email" id="email">
                    </div>
                    <div>
                        <label for="phone">휴대전화</label>
                        <input type="text" name="phoneno" id="phone" required>
                    </div>
                    <div>
                        <input type="submit" value="가입하기" onclick="checkPass()">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        function checkPass() {
            const password = document.querySelector("#pw").value;
            const rePassword = document.querySelector("#rpw").value;
            const rePassBox = document.querySelector(".re_pass");
            if (password != rePassword) {
                alert("비밀번호가 일치하지 않습니다.");
                return password = "";;
            }
        }

    </script>
</body>

</html>