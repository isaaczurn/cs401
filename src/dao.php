<?php
class Dao {
    // mysql://b993265730bbb4:39405070@us-cdbr-iron-east-05.cleardb.net/heroku_1b69752d5d186c4?reconnect=true
    private $host = "us-cdbr-iron-east-05.cleardb.net";
    private $db = "heroku_1b69752d5d186c4";
    private $user = "b993265730bbb4";
    private $pass = "39405070";
    protected $logger;

    public function __construct () {

    }

    private function getConnection () {
        try {
            $conn =
            new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pass);
            return $conn;
        } catch (Exception $e) {
            echo "connection failed: " . $e->getMessage();
        }
    }

    public function saveUser ($username, $password) {
        $conn = $this->getConnection();
        $query = $conn->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        // $this->logger->logDebug(__FUNCTION__ . " name=[{$name}] comment=[{$comment}]");
        $query->execute();
    }

    public function login ($username, $password) {
        $conn = $this->getConnection();
        $query = $conn->prepare("SELECT * FROM user WHERE loginname=:username");
        $query->bindParam(':username', $username);
        // $query->bindParam(':password', $password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        // print_r($result);
        // echo $username;
        // echo $password;
        $login_success = false;
        if($result['password'] == $password) {
            $login_success = true;
        }
        return $login_success;
    }

    public function getGame($search_term) {
        $conn = $this->getConnection();
        $query = $conn->prepare("SELECT * FROM games WHERE applist_apps_name=:searchterm");
        $query->bindParam(':searchterm', $search_term);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getPlayers() {

    }
}
?>
