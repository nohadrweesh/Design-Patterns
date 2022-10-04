<?php

class Shape{

    protected $color;

    public function __construct(Color $color){
        $this->color = $color;
    }

    public function paint(){
        return "Shape Painting : ".$this->color->paint();
    }
}

class CircleShape extends Shape{
    public function paint(){
        return "CircleShape Painting : ".$this->color->paint();
    }
}

class SquareShape extends Shape{
    public function paint(){
        return "SquareShape Painting : ".$this->color->paint();
    }
}

Interface Color{
    public function paint();
}

class RedColor implements Color
{
    public function paint(){
        return "Paint in Red";
    }
}

class YellowColor implements Color
{
    public function paint(){
        return "Paint in Red";
    }
}

///////////////////////////// ClientCode /////////////////////////

function clientCode(Shape $shape){
    echo $shape->paint();
}

$redColor = new RedColor();
$squareShape = new SquareShape($redColor);
clientCode($squareShape);

echo "\n";

$yellowColor = new YellowColor();
$circleShape = new CircleShape($yellowColor);
clientCode($circleShape);