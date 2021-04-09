<?php
class Point2D{
    public $name;
    public $x;
    public $y;
    public $xy = [];

    public function __construct($name,$x,$y)
    {
     $this->name;
     $this->x = $x;
     $this->y = $y;
    }
    public function setX($x): void
    {
        $this->x = $x;
    }
    public function setY($y): void
    {
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
    public function setXY($x,$y)
    {
     $this->x;
     $this->y;
    }
    public function getXY(): array
    {
        return [$this->x, $this->y];
    }
    public function __toString(){
        return $this->x." ".$this->y;
    }
}



 class Point3D extends Point2D
 {
     public $z;
     public $xyz = [];

     public function __construct($name,$x, $y, $z)
     {
         parent::__construct($name,$x, $y);
         $this->z = $z;
     }

     public function setZ($z): void
     {
         $this->z = $z;
     }

     public function getZ()
     {
         return $this->z;
     }

     public function setXYZ($x, $y, $z)
     {
         $this->x;
         $this->y;
         $this->z;
     }

     public function getXYZ(): array
     {
         return [$this->x, $this->y, $this->z];
     }
     public function __toString()
     {
         return $this->x .' '. $this->y .' '. $this->z;
     }
 }
$point2D = new Point2D('Point2D',3,4);
$point3D = new Point3D('Point3D',8,9,10);
print_r( $point2D->getXY());
echo '</br>';
print_r($point2D->__toString());
echo '</br>';
print_r( $point3D->getXYZ());
echo '</br>';
print_r($point3D->__toString());

