<?php
class Veiculo {
    function Veiculo() {
        $this->model = "Carro";
    }
}

// create an object
$herbie = new Veiculo();

// show object properties
echo $herbie->model;
?>