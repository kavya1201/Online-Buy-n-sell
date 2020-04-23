<?php
require 'adspost1.php';
class adspostTest extends \PHPUnit\Framework\TestCase
{
  public function testuserId()
  {
    $postad=new \adspost1;
    $postad->setUserid('2');
    $userid= $postad->getUserid();
    $this->assertTrue('2');
  }
  public function testareaId()
  {
    $postad=new \adspost1;
    $postad->setAreaid('3');
    $areaid= $postad->getAreaid();
    $this->assertEquals('3',$areaid);
  }
  public function testsubareaId()
  {
    $postad=new \adspost1;
    $postad->setSubareaid('37');
    $subareaid= $postad->getSubareaid();
    $this->assertEquals('37',$subareaid);
  }
  public function testcategoryId()
  {
    $postad=new \adspost1;
    $postad->setCategoryid('7');
    $categoryid= $postad->getCategoryid();
    $this->assertEquals('7',$categoryid);
  }
  public function testsubcategoryId()
  {
    $postad=new \adspost1;
    $postad->setSubcategoryid('50');
    $subcategoryid= $postad->getSubcategoryid();
    $this->assertEquals('50',$subcategoryid);
  }
  public function testTitle()
  {
    $postad=new \adspost1;
    $postad->setTitle('Condo');
    $title= $postad->getTitle();
    $this->assertEquals('Condo',$title);
  }
  public function testDesc()
  {
    $postad=new \adspost1;
    $postad->setDesc('Located at 34125, 1410 Village in Park Schaumburg IL 60485');
    $desc= $postad->getDesc();
    $this->assertEquals('Located at 34125, 1410 Village in Park Schaumburg IL 60485',$desc);
  }
  public function testType()
  {
    $postad=new \adspost1;
    $postad->setType('For Sale');
    $type=$postad->getType();
    $this->assertEquals('For Sale',$type);
  }
  public function testCondition()
  {
    $postad=new \adspost1;
    $postad->setCondition('New');
    $condition=$postad->getCondition();
    $this->assertEquals('New',$condition);
  }
  public function testPrice()
  {
    $postad=new \adspost1;
    $postad->setValue('$453000');
    $price=$postad->getValue();
    $this->assertEquals('$453000',$price);
  }
}
?>
