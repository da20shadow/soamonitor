<?php
Class Points
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function convertPoints($points, $amount, $id){

        $sql = "UPDATE users SET points = points - :points WHERE id = :id;
                UPDATE users SET balance = balance + :amount WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':points', $points, PDO::PARAM_STR);
        $stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
}