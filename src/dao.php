<?php
class Dao {

    private $host = "localhost";
    private $db = "webdev";
    private $user = "isaac";
    private $pass = "password";
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

    public function getPlayers() {

    }
}
?>
