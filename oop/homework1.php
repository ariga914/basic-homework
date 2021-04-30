<?php
class Shape 
{
    protected $width;
    protected $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends Shape 
{
    public function area() 
    {
        return ($this->width * $this->height) / 2; 
    } 
}

class Rectangle extends Shape 
{
    public function area() 
    {
        return $this->width * $this->height; 
    }
}

$triangle = new Triangle(3, 6);
$rectangle = new Rectangle(2, 7);

echo $triangle -> area()."<br>";
echo $rectangle -> area();
?>
