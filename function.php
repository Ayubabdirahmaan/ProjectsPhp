<?php
class system
{
    public $username, $password;
    public function showUs($user, $pass)
    {
        $this->username = $user;
        $this->password = $pass;
        echo "Username is <b> $user </b> and Password is <b>$pass</b>";
    }
}
