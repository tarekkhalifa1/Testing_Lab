<?php 

class User {
    public function __construct($user_name, $user_email)
    {
        $this->name= $user_name;
        $this->email = $user_email;

    } // end user constructor

    public function name($name=null)
    {
        if ($name) {
            $this->name=$name;
        }
        return $this->name;
    } // end function name

    public function email($email=null)
    {
        if ($email) {
            $this->email=$email;
        }
        return $this->email;

    } // end function email

} // end user class