<?php
require_once 'inc/Db.php';

class Student extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStudents()
    {
        $sql = 'select * from student';

        $result= mysqli_query($this->link, $sql) or die (mysqli_error($this->link));

        $data= [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function getStudent($id)
    {
        $sql = sprintf('select * from student where id=%s', $this->escape($id));

        $result= mysqli_query($this->link, $sql) or die (mysqli_error($this->link));

        return mysqli_fetch_assoc($result);
    }

    public function insertStudent()
    {
        if ($_POST) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $sql = sprintf("insert into student (id, name) values (%s, %s)",
                $this->escape($id),
                $this->escape($name)
            );

            $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));

            if ($result) {
                return true;
            }
        }

        return false;
    }

    public function updateStudent()
    {
        if ($_POST) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $sql = sprintf("update student set name=%s where id=%s",
                $this->escape($name),
                $this->escape($id)

            );

            $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));

            if ($result) {
                return true;
            }
        }

        return false;
    }

    public function deleteStudent($id)
    {
        $sql = sprintf('delete from student where id = %s',
            $this->escape($id)
        );

        $result = mysqli_query($this->link, $sql);
        if ($result) {
            return true;
        }
        return false;
    }
}