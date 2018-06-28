<?php
class Db {
    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect(
            'localhost',
            'root',
            'Zhuauth+',
            'php_apr_18'
        ) or die (mysqli_connect_error());

        if (!session_start()) {
            session_start();
        }
    }

    protected function escape($data)
    {
        if (!is_numeric($data)) {
            return "'{$data}'";
        }

        return $data;
    }
}
