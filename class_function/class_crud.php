<?php
class allclass
{
    public $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'employee');
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    function selectfun($table1 = NULL, $var = NULL)
    {
        $sql = "SELECT * FROM " . $table1 . " WHERE ";
        if ($var != NULL) {
            $sql .= $var;
        } else {
            $sql .= "1";
        }
        $sqlconn = mysqli_query($this->conn, $sql);
        return $sqlconn;
    }

    function deletelogin($table1 = NULL, $var = NULL)
    {
        define('tablename', $table1);
        $sql = "DELETE FROM " . tablename . " WHERE ";
        if ($var != NULL) {
            $sql .= $var;
        } else {
            $sql .= "1";
        }
        $sqlconn = mysqli_query($this->conn, $sql);
        return $sqlconn;
    }

    function insertfunction($table1 = null, $val = null)
    {
        $sql = "INSERT INTO $table1";
        if ($val != null) {
            $sql .= $val;
        } else {
            $sql .= "1";
        }
        $sqlconn = mysqli_query($this->conn, $sql);
        return $sqlconn;
    }

    function updatefun($table1 = NULL, $var = NULL)
    {
        define('tablename', $table1);
        $sql = "UPDATE " . tablename . " SET ";
        if ($var != NULL) {
            $sql .= $var;
        } else {
            $sql .= "1";
        }
        $sqlconn = mysqli_query($this->conn, $sql);
        return $sqlconn;
    }
}
$obj = new allclass();
?>
