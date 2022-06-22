<?php
namespace application\models;
use PDO;

class BoardModel extends Model
{
    public function insBoard(&$param)
    {
        $sql = 'INSERT INTO t_board (title, ctnt, i_user) values (:title,:ctnt, :i_user)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':title', $param['title']);
        $stmt->bindValue(':ctnt', $param['ctnt']);
        $stmt->bindValue(':i_user', $param['i_user']);
        $stmt->execute();
    }

    public function selBoardList()
    {
        $sql = "SELECT A.i_board, A.title, A.created_at, B.nm 
                FROM t_board A
                INNER JOIN t_user B
                ON A.i_user = B.i_user
                ORDER BY i_board DESC";
        // 문자열에 홑따옴표, 숫자에 홑따옴표 빼기 stmt 에서 prepare를 사용하면 가능
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function selBoard(&$param)
    {
        $sql = "SELECT A.i_board, A.title, A.ctnt, A.created_at, A.updated_at, B.nm,B.i_user 
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user= B.i_user WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param['i_board']);
        $stmt->execute();
        // 그냥 fetch로 쓰면 인덱스와 키값을 모두 사용 할 수 있는 배열을 가져온다
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function updBoard(&$param)
    {
        $sql =
            'UPDATE t_board SET title = :title, ctnt= :ctnt, updated_at=now() WHERE i_board = :i_board';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':title', $param['title']);
        $stmt->bindValue(':i_board', $param['i_board']);
        $stmt->bindValue(':ctnt', $param['ctnt']);
        $stmt->execute();
    }

    public function delBoard(&$param)
    {
        $sql = 'DELETE FROM t_board WHERE i_board = :i_board';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param['i_board']);
        $stmt->execute();
    }
}
