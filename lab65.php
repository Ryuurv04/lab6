<?php
class ClaseBase{

    public function test(){
        echo "ClaseBase::test() llamada\n";
    }
    final public function masTests(){
        echo "ClaseBase::masTests() llamada\n";
    }
}
class ClaseHijo extends ClaseBase{

    public function masTests() {
        echo "ClaseHijo::masTests() llamada\n";
    }
    //esto pasa ya que la clase padre tiene una funcion con 
    //final y no puede ser heredada

}


?>