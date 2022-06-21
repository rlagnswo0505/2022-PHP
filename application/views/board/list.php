<!DOCTYPE html>
<html lang="en">
<?php include_once 'application/views/template/head.php'; ?>
<body>
  <h1>리스트</h1>
  <table>
    <tr>
      <th>번호</th>
      <th>제목</th>
      <th>작성일</th>
    </tr>
    <?php foreach ($this->list as $item) { ?>
      <tr>
        <td><?= $item->i_board ?></td>
        <td><?= $item->title ?></td>
        <td><?= $item->created_at ?></td>
      </tr>
      <?php } ?>
  </table>
</body>
</html>