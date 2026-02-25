<?php

    define('HOSTNAME','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DBNAME','student_skill');

    class dataConnection{
        public $c1="";

        public function __construct()
        {
            $this->c1 = new mysqli(HOSTNAME,USERNAME,PASSWORD,DBNAME);

            if($this->c1->connect_error)
            {
                die("connection Failed");
            }
            else{
                echo "connected successfully";
            }
        }

        public function showskill()
        {
            $sql = "SELECT * FROM skill";
            $res = $this->c1->query($sql);
            if($res)
            {
                return $res;
            }
            else{
                return false;
            }
        }

        public function showstudent()
        {
            $sql = "SELECT * FROM student";
            $res = $this->c1->query($sql);
            if($res)
            {
                return $res;
            }
            else{
                return false;
            }
        }

        public function student_insert($input){
            $sql = "INSERT INTO student VALUES('$input[0]','$input[1]','$input[2]','$input[3]','$input[4]')";
            $res = $this->c1->query($sql);
            return $res;
        }

        public function student_where($input)
        {
            $sql = "SELECT * FROM student WHERE skill_id='$input'";
            $res = $this->c1->query($sql);

            if($res)
            {
                return $res;
            }
            else{
                return false;
            }
        }
       
        public function delete($sid)
        {
            $sql = "DELETE FROM student WHERE stud_id='$sid[0]'";
            $res = $this->c1->query($sql);
            return $res;
        }
    }


?>