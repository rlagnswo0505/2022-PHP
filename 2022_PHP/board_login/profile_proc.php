<?php
include_once "db/db_user.php";

session_start();
// 파일경로는 상수로 주는게 좋음
define("PROFILE_PATH", "img/profile/");

// &연산자로 주소값만 가져옴(얕은복사)
$login_user = &$_SESSION["login_user"];

// 개발단계에서 파일정보를 보기위해 사용
var_dump($_FILES);
// ["img"는 input 파일에서 name]
if ($_FILES["img"]["name"] === "") {
    echo "이미지 없음";
    exit;
}

function gen_uuid_v4()
{
    // printf f= format printf는 그냥 화면에 찍음 %04x부분을 mt_rand()로 바꿔줌
    // sprintf는 결과를 리턴해서 문자열에 넣음 
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}
$img_name = $_FILES["img"]["name"];
// string 리버스 포지션 .의 뒤에서부터 인덱스를 찾음
$last_index = strrpos($img_name, ".");
// 문자열 자를때 쓰는것(원본은 건들지 않음) 문자열을 index만큼 자름 
$ext = mb_substr($img_name, $last_index);

$target_filenm = gen_uuid_v4() . $ext;
$target_full_path = PROFILE_PATH . $login_user["i_user"];
// !is_dir() 폴더체크 ! = 없으면 출력
if (!is_dir($target_full_path)) {
    // 0777은 모든 권한을 주겠다.
    // true는 폴더가 여러개여도 만들 수 있다.
    mkdir($target_full_path, 0777, true);
}

$tmp_img = $_FILES['img']['tmp_name'];
$imageUpload = move_uploaded_file($tmp_img, $target_full_path . "/" . $target_filenm);
// 파일명이 잘못됐거나, 경로가 없거나하면 false
if ($imageUpload) { //업로드 성공!
    // TODO : 이전에 등록된 프사가 있으면 삭제
    if ($login_user["profile_img"]) {
        $saved_img = $target_full_path . "/" . $login_user["profile_img"];
        if (file_exists($saved_img)) {
            unlink($saved_img);
        }
    }
    // DB에 저장!
    $param = [
        "profile_img" => $target_filenm,
        "i_user" => $login_user['i_user']
    ];
    $result = upd_profile_img($param);
    $login_user["profile_img"] = $target_filenm;
    Header("Location: profile.php");
} else { //업로드 실패!
    echo "업로드 실패";
}
