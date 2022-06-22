<div>
  <form action="loginProc" method="post">
  <?php if (!isset($_SESSION[_LOGINUSER])) { ?>
  <?php } ?>
  <div><label for=""><input type="text" name="uid" placeholder="아이디" id=""></label></div>
    <div><label for=""><input type="password" name="upw" placeholder="패스워드" id=""></label></div>
    <div>
      <input type="submit" value="로그인">
    </div>
    <div>
      <a href="join">회원가입</a>
    </div>
  </form>
</div>