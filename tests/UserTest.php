<?php
use PHPUnit\Framework\TestCase;
require_once 'src/User.php';

class UserTest extends TestCase {

    public function testName()
    {
        $user= new User("Tarek", "user.tarek@outlook.com");
        $this->assertEquals("Tarek", $user->name());
        $testName= "Samy";
        $this->assertSame($testName, $user->name($testName));

    } // end test name function

    public function testEmail()
    {
        $user= new User("Tarek", "user.tarek@outlook.com");
        $this->assertEquals("user.tarek@outlook.com", $user->email());
        $testEmail= "samy@gmail.com";
        $this->assertEquals($testEmail, $user->email($testEmail));

    } // end test email function

} // end user test class
?>