<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <h2>PHP CALCULATOR</h2>
<?php
class MyCalculator {
private $_calc1, $_calc2;
public function __construct( $calc1, $calc2){
$this->_calc1 = $calc1;
$this->_calc2 = $calc2;
}
  public function add() {
  return $this->_calc1 + $this->_calc2;
}
  public function subtract() {
  return $this->_calc1 - $this->_calc2;
}
  public function multiply() {
  return $this->_calc1 * $this->_calc2;
}
  public function divide() {
  return $this->_calc1 / $this->_calc2;
}
}
$mycalc = new MyCalculator(18, 3); 
echo "By Adding we get, ".$mycalc-> add()."<br>"; 
echo "By Multiplying we get, ". $mycalc-> multiply()."<br>";
echo "By Subtract we get, ". $mycalc-> subtract()."<br>"; 
echo  "By Dividing we get, ".$mycalc-> divide()."<br>"; 
?>