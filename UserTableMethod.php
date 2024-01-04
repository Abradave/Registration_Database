<?php 
class UserTableMethod{

    private $con;
    public function __construct(){
        $this -> con = new mysqli("localhost","root","", "php_reg");
    }
    
    function getAll(){
        $sql = "SELECT * FROM users";
        $result = $this -> con -> query($sql);
        var_dump($result);
    }
}
?>