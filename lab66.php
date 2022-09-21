<?php

use ClaseBase as GlobalClaseBase;

final class ClaseBase{

public function test(){
    echo "ClaseBase::test() llamada\n";
}
final public function moreTesting(){
    echo "ClaseBase::moreTesting() llamada\n";

}
}
class ClaseHijo extends ClaseBase{}
//no se puede herdar la clase ClaseBase
?>