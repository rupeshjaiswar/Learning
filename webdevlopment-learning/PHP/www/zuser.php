

<?php
class User{
    private $firstname;
    private $password;
    private $mobile;
    private $gender;
    private $city;

    function __construct($firstname,$password,$mobile,$gender,$city)
    {
        $this->firstname = $firstname;
        $this->password = $password;
        $this->mobile = $mobile;
        $this->gender = $gender;
        $this->city = $city;
        
    }
    public function get_name(){
        return $this->firstname;
    }
}




?>