<?php
require 'login.php';
class loginTest extends \PHPUnit\Framework\TestCase
{

public function testuserName()
{
  $login=new \login;
  $login->setusername('archana21');
  $username= $login->getusername();
  $this->assertEquals('archana22',$username);
}
public function testpassword()
{
  $login=new \login;
  $login->setpassword('P$91word');
  $pass= $login->getpassword();
  $this->assertEquals('P$91word',$pass);
}
}
?>
