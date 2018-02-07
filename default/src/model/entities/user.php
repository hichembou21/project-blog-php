<?php 

class User {
    private $userName;
    private $email;
    private $password;
    private $gender;
    private $avatar;

    public function __construction($userName, $email, $password, $gender, $avatar) {
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->gender = $gender;
        $this->avatar = $avatar;
    }
}

?>