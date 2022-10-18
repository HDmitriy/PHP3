<?php

interface ISquare {
    function squareArea(int $sideSquare);
}

interface ICircle {
    function circleArea(int $circumference);
}

class SquareAreaLib {
    public function getSquareArea(int $diagonal) {
        $area = ($diagonal**2)/2;
        return $area;
    }
}

class CircleAreaLib {
    public function getCircleArea(int $diagonal) {
        $area = (M_PI * $diagonal**2))/4;
        return $area;
    }
}

class AdaptedSquare implements ISquare {
    protected $getAdaptedSquare;
    public function __construct() {
        $this->getAdaptedSquare = new SquareAreaLib();
    }
    public function squareArea(int $sideSquare) {
        $this->getAdaptedSquare->getSquareArea($diagonal);
    }
}

class AdaptedCircle implements ICircle {
    protected $getAdaptedCircle;
    public function __construct() {
        $this->getAdaptedCircle = new CircleAreaLib();
    }
    public function circleArea(int $circumference) {
        $this->getAdaptedCircle->getCircleArea($diagonal);
    }
}

$square = new AdaptedSquare();
$square->squareArea();
$circle = new AdaptedCircle();
$circle->circleArea();
