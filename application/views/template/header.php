<div>
  <?php if (isset($_SESSION[_LOGINUSER])) {

      $login_user = $_SESSION[_LOGINUSER];
      $user_nm = $login_user->nm;
      ?>
    <div class="greeting">
      <h2><?= $user_nm ?></h2>님 환영합니다.
    </div>
    <nav>
    <a href="/board/write">글쓰기</a>
    <a href="/user/logout">로그아웃</a>

  <?php
  } else {
       ?>
    <a href="/user/login">로그인</a>
    <a href="/user/join">회원가입</a>
    <?php
  } ?>
    <a href="/board/list">리스트</a>
</nav>
</div>