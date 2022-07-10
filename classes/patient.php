<?php
    class Patient {
        private $patient_id;
        private $username;
        private $password;
        private $fname;
        private $mname;
        private $lname;
        private $address;
        private $contactNumber;
        private $email;
        private $weight;
        private $height;

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

        public function getAddress(){
            return $this->address;
        }

        public function setAddress($address){
            $this->address = $address;
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

        public function getWeight(){
            return $this->weight;
        }

        public function setWeight($weight){
            $this->weight = $weight;
        }

        public function getHeight(){
            return $this->height;
        }

        public function setHeight($height){
            $this->height = $height;
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

    // $samplePatient = new Patient();

    // $samplePatient->setFname("Chris Samuel");
    // $samplePatient->setMname("Alba");
    // $samplePatient->setLname("Margate");

    // echo $samplePatient->getFullName();

?>