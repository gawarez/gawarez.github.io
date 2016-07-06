<?php
class Internauta {
  private $nomecompleto;
  private $datanascimento;
  private $sexo;
  private $peso;
  private $altura;
  private $imc;
  private $categoria;

  public function getNomeCompleto () {
    return $this->nomecompleto;
  }

  public function setNomeCompleto ($nc) {
    $this->nomecompleto = $nc;
  }

  public function getDataNascimento () {
    return $this->datanascimento;
  }

  public function setDataNascimento ($dn) {
    $this->datanascimento = $dn;
  }

  public function getSexo () {
    return $this->sexo;
  }

  public function setSexo ($s) {
    $this->sexo = $s;
  }

  public function getPeso () {
    return $this->peso;
  }

  public function setPeso ($p) {
    $this->peso = $p;
  }

  public function getAltura () {
    return $this->altura;
  }

  public function setAltura ($a) {
    $this->altura = $a;
  }

  public function buscaIMC () {
    return $this->imc;
  }

  public function calculaIMC () {
    $this->imc = $this->peso / ($this->altura * $this->altura);
    $this->avaliaCategoria();
  }

  public function buscaCategoria () {
    return $this->categoria;
  }

  private function avaliaCategoria () {
    if ($this->imc < 18.5) {
      $this->categoria = "Abaixo do peso";
    }
    elseif ($this->imc >= 18.5 and $this->imc < 25) {
      $this->categoria = "Peso normal";
    }
    elseif ($this->imc >= 25 and $this->imc < 30) {
      $this->categoria = "Sobrepeso";
    }
    elseif ($this->imc >= 30 and $this->imc < 35) {
      $this->categoria = "Obesidade Grau I";
    }
    elseif ($this->imc >= 35 and $this->imc < 40) {
      $this->categoria = "Obesidade Grau II";
    }
    else {
      $this->categoria = "Obesidade Grau III";
    }
  }
}
?>