<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','e_banking');

class DatabaseConnection
{
	public $c1="";
    
    public function __construct()
    {
        $this->c1 = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

        if($this->c1->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
        else{
        //echo "Database Connected Successfully";

        return $this->c1;
    	}
    }

/*public function create($inputData)
    {
    	$studIdquery="select max(StudEnroll) from stud_det";
    	$sid = $this->c->query($studIdquery);   
		$id=mysqli_fetch_array($sid);   	
		$v="AB".++$id[0];
    	echo $v;
        $fullname = $inputData['fullname'];
        $email = $inputData['email'];
        $phone = $inputData['phone'];
        $course = $inputData['course'];

        $studentQuery = "INSERT INTO students (Studentid, fullname,email,phone,course) VALUES ('$v',$fullname','$email','$phone','$course')";
        $result = $this->conn->query($studentQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }
*/
      public function dispbankuser()
    {
        $studentQuery = "SELECT * FROM user_details";
        $result = $this->c1->query($studentQuery);
		//	print_r($result);

        if($result){
             if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
            } 
        }
        
       
    }


public function dispuserprofile($whr)
    {
       // echo $whr;
        $studentQuery = "SELECT * FROM user_details where user_name='$whr'";
        $result = $this->c1->query($studentQuery);
        //  print_r($result);
        if($result){
                    if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        } 
        }
   
    }



public function instype($typename)
{
    $insqry="insert into account_types values('','$typename')";
  //  print_r($insqry);
    $res=$this->c1->query($insqry);
  //  print_r($res);
    return $res;

}

public function instrasdetails($inputarray)
{
        //print_r($inputarray);
    $selqry="select max(transaction_id) from account_transaction";
        $selres=$this->c1->query($selqry);
           $out= mysqli_fetch_array($selres);
                       // print_r($out);
                        $tid=++$out[0];
                            echo $tid;
   $insqry="insert into account_transaction values('$tid',$inputarray[0],'$inputarray[1]','$inputarray[2]','$inputarray[3]','$inputarray[4]')";
  //  print_r($insqry);
    $res=$this->c1->query($insqry);
   //print_r($res);
    return $res;
}


public function dispacctype()
    {
        $studentQuery = "SELECT * FROM account_types";
        $result = $this->c1->query($studentQuery);
        //  print_r($result);

       if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        } 
    }


public function editbankuserprofile($editarr)
{
    $updtqry="update user_details set contact_no=$editarr[1] where user_name='$editarr[0]'";
 //print_r($updtqry);   
    $result = $this->c1->query($updtqry);
    return $result;

}


/* 

public function edit($id)
    {
        $student_id = mysqli_real_escape_string($this->conn, $id);
        $studentQuery = "SELECT * FROM students WHERE id='$student_id' LIMIT 1";
        $result = $this->conn->query($studentQuery);
        if($result->num_rows == 1){
            $data = $result->fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }
*/
}








?>




