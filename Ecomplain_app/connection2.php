<?php

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','e_complain');

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

            public function classcreate($input)
            {
                $insquery = "INSERT INTO class_details VALUES('','$input')";
                //print_r($insquery); echo "<br>";
                $output = $this->c1->query($insquery);
                return $output;
            }

           

            public function complainadd($inputrr)
            {

                // $sqlqry = "select max(complain_id) from complain_details";
                // $res=$this->c->query($sqlqry);
                // $cid=mysqli_fetch_array($res);
                // //print_r($cid);
                // $cidnew = ++$cid[0];
                // echo $cidnew;


                $insqry = "INSERT INTO complain_details VALUES('','$inputrr[0]','$inputrr[1]','$inputrr[2]','$inputrr[3]','$inputrr[4]','$inputrr[5]')";
                //print_r($insqry);
                $output=$this->c1->query($insqry);
                return $output;
                // if(!$output)
                // {
                //     echo "MYSQL Error". $this->c1->error;
                //     return false;
                // }
                // return true;
                
            }

            
            public function showstudent(){

                $insert ="SELECT * FROM student_details ";
                $result = $this->c1->query($insert);
               
                //print_r($result);
                if($result->num_rows > 0){
                    return $result;
                }
                else{
                    return false; 
                }
            }

            public function showclass(){

                $query ="SELECT * FROM class_details";
                $result = $this->c1->query($query);

                //print_r($result);
                if($result->num_rows > 0){
                    return $result;
                }
                else{
                    return false; 
                }
            }

            public function wherestud($studenroll1)
            {

                $sql1 = "SELECT * FROM student_details WHERE stud_enroll=".$studenroll1;
                $result1 =$this->c1->query($sql1);
                
               $num = mysqli_num_rows($result1);

               if($num>=0)
               {
                return $result1;
               }
               else{
                    return false;
               }
               
                // $update = "UPDATE student_details 
                // SET stud_name='$earr[1]',stud_contact='$earr[2]', profile_file='$earr[3]'
                // WHERE stud_enroll='$earr[0]'";
                // $sql2 =$this->c1->query($update);
                // return $sql2;
               
               
         
            }

            // public function updatestudent($earraystud)
            // {
                
            //     $update = "UPDATE student_details 
            //     SET stud_name=$earraystud[1] , stud_contact=$earraystud[2] , profile_file=$earraystud[3]
            //     WHERE stud_enroll=$earraystud[0]";
            //     $sql2 =$this->c1->query($update);
            //     return $sql2;
            // }

            public function updatecomplain($enroll){
                $sql = "SELECT * FROM complain_details WHERE stud_enroll=".$enroll;
                $result =$this->c1->query($sql);
                
               $num = mysqli_num_rows($result);

               if($num>0)
               {
                return $result;
               }
               else{
                    return false;
               }
            }

        
            // public function email_validation($str) {
            //     return (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))
            //         ? FALSE : TRUE;

            //          // Function call
            // if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //     echo "Invalid email address.";
            // }
            // else {
            //     echo "Valid email address.";
            // }
            // }

            public function comajax($com){
                $sql = "SELECT * FROM complain_details WHERE complain_status='$com'";
                $res= $this->c1->query($sql);

                if($res->num_rows>0)
                {
                    return $res;
                }
                else{
                    return false;
                }
            }
           
        }
        

           
        
?> 