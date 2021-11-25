<?php
  Class Calculadora{
    public $total = 0;

    public function add($num){
      $this->total += $num;
    }

    public function sub($num){
      $this->total -= $num;
    }

    public function multiplica($num){
      $this->total *= $num;
    }

    public function divide($num){
      $this->total = $this->total / $num;
    }

    public function total(){
      return $this->total;
    }

    public function clear(){
      $this->total = 0;
    }
  };

  $calc = new Calculadora();
  $calc->add(12);
  $calc->add(2);
  $calc->sub(1);
  $calc->multiplica(3);
  $calc->divide(2);
  $calc->add(0.5);

  echo "TOTAL: ".$calc->total();

  $calc->clear();
?>