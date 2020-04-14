<?php
require 'usersignup.php';
class usersignupTest extends \PHPUnit\Framework\TestCase
{
  public function testfullName()
  {
    $usignup=new \usersignup;
    $usignup->setfname('Kavya');
    $fullname= $usignup->getfname();
    $this->assertEquals('Kavya',$fullname);
  }
  public function testuserName()
  {
    $usignup=new \usersignup;
    $usignup->setuname('kavya28');
    $username= $usignup->getuname();
    $this->assertEquals('kavya28',$username);
  }
  public function testuserEmail()
  {
    $usignup=new \usersignup;
    $usignup->setuemail('');
    $useremail= $usignup->getuemail();
    $this->assertEquals('',$useremail);
  }
  public function testuserPass()
  {
    $usignup=new \usersignup;
    $usignup->setupass('P#94word');
    $userpassword= $usignup->getupass();
    $this->assertEquals('P#94word',$userpassword);
  }
  public function testuserPhone()
  {
    $usignup=new \usersignup;
    $usignup->setuphone('7372100662');
    $userphone= $usignup->getuphone();
    $this->assertEquals('7372100662',$userphone);
  }
  public function testuserType()
  {
    $usignup=new \usersignup;
    $usignup->setutype('Individual');
    $usertype= $usignup->getutype();
    $this->assertEquals('Individual',$usertype);
  }
  public function testDate()
  {
    $usignup=new \usersignup;
    $usignup->setdate('2020-04-01 01:37:46');
    $addate=$usignup->getdate();
    $this->assertEquals('2020-04-01 01:37:46',$addate);
  }
}
?>
