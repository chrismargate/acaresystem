<?php
class Doctor {
    private $doctor_id;
    private $date_created;
    private $username;
    private $password;
    private $fname;
    private $mname;
    private $lname;
    private $field;
    private $email;
    private $contactNumber;
    private $schedule_id;

    public function __construct(){

    }

    // public function __construct($username="user",$password="user",$fname="John",$lname="Doe",$address="Philippines",$contactNumber="12345",$email="johndoe@gmail.com")
    // {
    //     $this->username = $username;
    //     $this->password = $password;
    //     $this->fname = $fname;
    //     $this->lname = $lname;
    //     $this->address = $address;
    //     $this->contactNumber = $contactNumber;
    //     $this->email = $email;
    // }

    public function getDoctorid(){
        return $this->patient_id;
    }

    public function getDatecreated(){
        return $this->date_created;
    }

    public function getUsername(){
        return $this->username;
    }

    public  function setUsername($username){
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getFname(){
        return $this->fname;
    }

    public function setFname($fname){
        $this->fname = $fname;
    }

    public function getMname(){
        return $this->mname;
    }

    public function setMname($mname){
        $this->mname = $mname;
    }

    public function getLname(){
        return $this->lname;
    }

    public function setLname($lname){
        $this->lname = $lname;
    }

    public function getField(){
        return $this->field;
    }

    public function setField($field){
        $this->field = $field;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getContactNumber(){
        return $this->contactNumber;
    }

    public function setContactNumber($contactNumber){
        $this->contactNumber = $contactNumber;
    }

    public function getScheduleid(){
        return $this->schedule_id;
    }

    public function setScheduleid($schedule_id){
        $this->schedule_id = $schedule_id;
    }

    // Additional methods

    public function getFullName(){
        $fullName = $this->fname;

        if(!empty($this->mname)){
            $fullName = $fullName . " " . $this->mname;
        }

        $fullName = $fullName . " " . $this->lname;
        
        return $fullName;
    }

}


?>