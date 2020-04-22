<?php
require 'email.php';
class emailTest extends \PHPUnit\Framework\TestCase
{
  public function testsenderemail()
  {
    $email=new \email;
    $email->setSenderemail('test75063@gmail.com');
    $emailaddr= $email->getSenderemail();
    $this->assertEquals('test75063@gmail.com',$emailaddr);
  }
  public function testpassword()
  {
    $email=new \email;
    $email->setSubject('Negotiation');
    $subject= $email->getSubject();
    $this->assertEquals('Negotiation',$subject);
  }
}
?>
