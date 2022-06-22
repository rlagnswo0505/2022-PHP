<!DOCTYPE html>
<html lang="en">
<?php include_once 'application/views/template/head.php'; ?>
<body>
  <h1>디테일</h1>
  <!-- 삭제 버튼 클릭시 
창 나타나고 
예 입력시 주소 이동
아니요시 아무일 
주소는 del?i_board=114
-->
    <div>
      <button id="btnDel" data-i_board="<?= $this->data->i_board ?>">삭제</button>
      <button id="btnMod" data-i_board="<?= $this->data->i_board ?>">수정</button>
    </div>
    <div>글번호 : <?= $this->data->i_board ?></div>
    <div>제목 : <?= $this->data->title ?></div>
    <div>내용 : <?= $this->data->ctnt ?></div>
    <div>글쓴이 : <?= $this->data->nm ?></div>
    <div>등록일시 : <?= $this->data->created_at ?></div>
    <div>수정일시 : <?= $this->data->updated_at ?></div>
</body>
</html>