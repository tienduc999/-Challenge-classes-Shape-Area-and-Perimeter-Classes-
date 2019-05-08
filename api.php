<?php
include 'class/Shape.php';
include 'class/Rectangle.php';
include 'class/Square.php';
include 'class/Triangle.php';
include 'class/Rhombus.php';
include 'class/Circle.php';
$shape = null;

switch ($_POST['type']){
    case 1:
        $shape = new Rectangle($_POST['length'], $_POST['width']);
        break;
    case 2:
        $shape = new Square($_POST['width']);
        break;
    case 3:
        $shape = new Triangle($_POST['slide_a'], $_POST['slide_b'], $_POST['slide_c']);
        break;
    case 4:
        $shape = new Rhombus($_POST['length'], $_POST['diagonal_line_1'], $_POST['diagonal_line_2']);
        break;
    case 5:
        $shape = new Circle($_POST['radius']);
        break;
}

echo json_encode([
    'acreage' =>  $shape->calculationAcreage(),
    'perimeter' => $shape->calculationPerimeter()
])
?>