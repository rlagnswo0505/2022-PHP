<?php
// 네임스페이스 : 태그같은 느낌이다
namespace application\controllers;
// 같은 네임스페이스면 use를 안써줘도 된다.

use application\models\BoardModel;

class BoardController extends Controller
{
    public function list()
    {
        $model = new BoardModel();
        // $this->$list = $model->selBoardList();
        $this->addAttribute('title', '리스트');
        $this->addAttribute('list', $model->selBoardList());
        $this->addAttribute('js', ['board/list']);
        return 'board/list.php'; //view 파일명
    }
}
