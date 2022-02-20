<?php
Class Project{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    //Add New Investment Project
    public function addInvestmentProject($name,$deposit,$user_id): bool
    {
        try {
            $sql = "INSERT INTO `investments` (investment_name, investment_deposit, investor_id)
                    VALUES (:name,:deposit,:user_id)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindparam(':name', $name);
            $stmt->bindparam(':deposit', $deposit);
            $stmt->bindparam(':user_id', $user_id);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    //check if project name already added!
    function checkIfProjectExist($investmentName,$investorID): bool
    {
        try {
            $sql = "SELECT investment_name FROM investments WHERE investment_name = :investmentName AND investor_id = :investorID";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindparam(':investmentName', $investmentName);
            $stmt->bindparam(':investorID', $investorID);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //Get All Investments By User ID
    public function getTotalUserInvestments($user_id){
        $sql = "SELECT * FROM investments WHERE investor_id = ? ORDER BY investment_added DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindparam(1,$user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Confirm That Project By Project ID is owned by user ID
    public function getInvestmentId($project_id,$user_id): bool
    {
            $sql = "SELECT `investor_id` FROM investments WHERE investment_id = ? AND investor_id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindparam(1, $project_id);
            $stmt->bindparam(2, $user_id);
            $stmt->execute();
            return $stmt->rowCount();
    }

    //Get Project Info
    public function getProjectInfo($project_id,$investor_id){
        $sql = "SELECT * FROM investments WHERE investment_id = ? AND investor_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindparam(1, $project_id);
        $stmt->bindparam(2, $investor_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Get Total Investments By Investor ID
    public function getTotalInvestmentsByInvestorID($investor_id){
        $sql = "SELECT SUM(investment_deposit) AS totalInvested FROM investments WHERE investor_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindparam(1, $investor_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Get Total Withdrawal from investmernts By Investor ID
    public function getTotalWithdrawalByInvestorID($investor_id){
        $sql = "SELECT SUM(investment_withdrawal) AS totalWithdrawal FROM investments WHERE investor_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindparam(1, $investor_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Update project info
    public function updateProject($action,$project_id,$amount,$investor_id): bool
    {
            if ($action == "deposit") {
                $sql = "UPDATE `investments` SET `investment_deposit` = `investment_deposit` + :amount 
                        WHERE `investment_id` = :project_id AND `investor_id` = :investor_id";
            } else if ($action == "withdrawal") {
                $sql = "UPDATE `investments` SET `investment_withdrawal` = `investment_withdrawal` + :amount
                        WHERE `investment_id` = :project_id AND `investor_id` = :investor_id";
            }else{
                return false;
            }
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindparam(':amount', $amount);
            $stmt->bindparam(':project_id', $project_id);
            $stmt->bindparam(':investor_id', $investor_id);
            $stmt->execute();
            return $stmt->rowCount();
    }
    //DELETE project
    public function deleteProjectId($project_id,$investor_id): bool
    {
        $sql = "DELETE FROM `investments` WHERE `investment_id` = :project_id AND `investor_id` = :investor_id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindparam(':project_id', $project_id);
        $stmt->bindparam(':investor_id', $investor_id);
        $stmt->execute();
        return $stmt->rowCount();
    }
}