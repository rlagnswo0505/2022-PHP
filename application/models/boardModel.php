<?php
namespace application\models;
use PDO;

class BoardModel extends Model
{
    public function selBoardList()
    {
        $sql = "SELECT i_board, title, created_at 
                FROM t_board
                ORDER BY i_board DESC";
        // 문자열에 홑따옴표, 숫자에 홑따옴표 빼기 stmt 에서 prepare를 사용하면 가능
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function selBoard(&$param)
    {
        $sql = "SELECT A.i_board, A.title, A.ctnt, A.created_at, B.nm,B.i_user 
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user= B.i_user WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param['i_board']);
        $stmt->execute();
        // 그냥 fetch로 쓰면 인덱스와 키값을 모두 사용 할 수 있는 배열을 가져온다
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
