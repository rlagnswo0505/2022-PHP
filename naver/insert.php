<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="insert.css">
</head>

<body>
    <form action="insert_proc.php" method="post">
        <ul>
            <li>
                <label>아이디<br>
                    <input type="text" name="user_id" placeholder="@naver.com">
                </label>
            </li>
            <li>
                <label>비밀번호<br>
                    <input type="password" name="user_password">
                </label>
            </li>
            <li>
                <label>비밀번호 재확인<br>
                    <input type="password">
                </label>
            </li>
            <li>
                <label>이름<br>
                    <input type="text" name="user_name">
                </label>
            </li>
            <li>
                <div>
                    <label>생년월일<br>
                        <input type="text" name="bir_yy" placeholder="년(4자)">
                    </label>
                    <select name="bir_mm">
                        <option value="월">월</option>
                        <option value="1월">1월</option>
                        <option value="2월">2월</option>
                        <option value="3월">3월</option>
                        <option value="4월">4월</option>
                        <option value="5월">5월</option>
                        <option value="6월">6월</option>
                        <option value="7월">7월</option>
                        <option value="8월">8월</option>
                        <option value="9월">9월</option>
                        <option value="10월">10월</option>
                        <option value="11월">11월</option>
                        <option value="12월">12월</option>
                    </select>
                    <input type="text" name="bir_dd" placeholder="일">
                </div>
            </li>
            <li>
                <label> 성별 <br>
                    <select name="gender">
                        <option value="성별">성별</option>
                        <option value="남자">남자</option>
                        <option value="여자">여자</option>
                    </select>
                </label>
            </li>
            <li>
                <label>본인 확인 이메일 <span>(선택)</span> <br>
                    <input type="text" name="user_email" placeholder="선택입력">
                </label>
            </li>
            <li><label> 휴대전화 <br></label>
                <input type="text" value="대한민국 +82" readonly> <br>
                <input type="text" name="phoneno" placeholder="전화번호 입력">
                <button>인증번호 받기</button><br>
                <input type="text" placeholder="인증번호 입력하세요">
            </li>
        </ul>
        <input type="submit" value="가입하기">
    </form>

</body>

</html>