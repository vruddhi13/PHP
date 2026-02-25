<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','event_system');

    class DatabaseConnection{
        public $c1="";

        public function __construct(){
            $this->c1 = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

            if($this->c1->connect_error)
            {
                die("<h1> Database Connection failed </h1>");
            }
                
            else{
                echo "Database Connected Successfully !";
                return $this->c1;
            }


        }

        public function showevent()
        {
            $sql = "SELECT * FROM event";
            $res = $this->c1->query($sql);
            if($res->num_rows)
            {
                return $res;
            }
            else{
                return false;
            }
        }

        public function showparticipant()
        {
            $sql = "SELECT * FROM participants";
            $res = $this->c1->query($sql);
            if($res->num_rows)
            {
                return $res;
            }
            else{
                return false;
            }
        }

        public function part_display()
        {
            $sql = "SELECT e.event_name,p.part_name,p.fee_status,p.part_type,e.event_fee AS fee 
                    FROM event e
                    JOIN participants p ON e.event_id=p.event_id";
                    $res = $this->c1->query($sql);
                    return $res;
        }
    }

?>