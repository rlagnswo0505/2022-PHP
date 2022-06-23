<?php
// 네임스페이스 : 태그같은 느낌이다
namespace application\controllers;
// 같은 네임스페이스면 use를 안써줘도 된다.

use application\models\BoardModel;

class BoardController extends Controller
{
    // 각각의 메소드는 열어야 되는 파일명[위치포함] 또는 redirect:[주소이동] 문자열이 필요하다
    public function write()
    {
        $this->addAttribute('title', '글쓰기');
        $this->addAttribute(_HEADER, $this->getView('template/header.php'));
        $this->addAttribute(_MAIN, $this->getView('board/write.php'));
        $this->addAttribute(_FOOTER, $this->getView('template/footer.php'));
        return 'template/t1.php';
    }
    public function writeProc()
    {
        $login_user = $_SESSION[_LOGINUSER];
        $param = [
            'title' => $_POST['title'],
            'ctnt' => $_POST['ctnt'],
            'i_user' => $login_user->i_user,
        ];
        $model = new BoardModel();
        $model->insBoard($param);
        return 'redirect:/board/list';
    }
    public function list()
    {
        $model = new BoardModel();
        // $this->$list = $model->selBoardList();
        $this->addAttribute('title', '리스트');
        $this->addAttribute('list', $model->selBoardList());
        $this->addAttribute(_JS, ['board/list']);
        $this->addAttribute(_CSS, ['board/list']);
        $this->addAttribute(_HEADER, $this->getView('template/header.php'));
        $this->addAttribute(_MAIN, $this->getView('board/list.php'));
        $this->addAttribute(_FOOTER, $this->getView('template/footer.php'));
        return 'template/t1.php';
    }
    public function detail()
    {
        $i_board = $_GET['i_board'];
        $model = new BoardModel();
        $param = ['i_board' => $i_board];
        $this->addAttribute('data', $model->selBoard($param));
        $this->addAttribute(_JS, ['board/detail']);
        $this->addAttribute(_HEADER, $this->getView('template/header.php'));
        $this->addAttribute(_MAIN, $this->getView('board/detail.php'));
        $this->addAttribute(_FOOTER, $this->getView('template/footer.php'));
        return 'template/t1.php';

        // 글번호, 제목, 내용, 글쓴이 이름, 작성일
    }
    public function delete()
    {
        $param = ['i_board' => $_GET['i_board']];
        $model = new BoardModel();
        $model->delBoard($param);
        return 'redirect:/board/list';
    }
    public function mod()
    {
        $model = new BoardModel();
        $param = ['i_board' => $_GET['i_board']];
        $this->addAttribute('data', $model->selBoard($param));
        $this->addAttribute(_TITLE, '수정');
        $this->addAttribute(_HEADER, $this->getView('template/header.php'));
        $this->addAttribute(_MAIN, $this->getView('board/mod.php'));
        $this->addAttribute(_FOOTER, $this->getView('template/footer.php'));
        return 'template/t1.php';
    }
    // 주석추가
    public function modProc()
    {
        $param = [
            'i_board' => $_POST['i_board'],
            'title' => $_POST['title'],
            'ctnt' => $_POST['ctnt'],
        ];
        $model = new BoardModel();
        $model->updBoard($param);
        return 'redirect:/board/detail?i_board=' . $param['i_board'];
    }
}
