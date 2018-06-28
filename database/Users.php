<?php
require_once 'inc/Db.php';
class Users extends Db
{
    public function __construct()
    {
        parent::__construct();
    }


    public function loginUser($username, $password)
    {
        $sql = sprintf('select * from users where username=%s and password=%s',
            $this->escape($username), $this->escape($password));

        $result= mysqli_query($this->link, $sql) or die (mysqli_error($this->link));

        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
            return true;
        }

        return false;
    }
}