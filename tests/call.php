<?php

use Vips\Image\Image;

class VipsCallTest extends PHPUnit_Framework_TestCase 
{

  public function testVipsCall()
  {
    $image = Image::newFromArray([1, 2, 3]);
    $image = $image->embed(10, 20, 3000, 2000, ["extend" => "copy"]);

    $this->assertEquals($image->width, 3000);
    $this->assertEquals($image->height, 2000);
    $this->assertEquals($image->bands, 1);
  }

  public function testVipsCallStatic()
  {
    $image = Image::black(1, 2, ["bands" => 3]);

    $this->assertEquals($image->width, 1);
    $this->assertEquals($image->height, 2);
    $this->assertEquals($image->bands, 3);
  }

}
