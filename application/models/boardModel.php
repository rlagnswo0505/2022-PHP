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
}
