<?php

class Categoria {
  private $nome;
  
  public function __construct($nome) {
      $this->nome = $nome;
  }
  
  public function getNome() {
      return $this->nome;
  }
}


class Prodotto {
  private $categoria;
  private $nome;
  private $tipo;
  private $prezzo;
  private $immagine;

  public function __construct(Categoria $categoria, $nome, $tipo, $prezzo, $immagine) {
      $this->categoria = $categoria;
      $this->nome = $nome;
      $this->tipo = $tipo;
      $this->prezzo = $prezzo;
      $this->immagine = $immagine;
  }

  public function getCategoria() {
      return $this->categoria;
  }

  public function getNome() {
      return $this->nome;
  }

  public function getTipo() {
      return $this->tipo;
  }

  public function getPrezzo() {
      return $this->prezzo;
  }

  public function getImmagine() {
      return $this->immagine;
  }
}


class Card {
  public function stampaProdotto(Prodotto $prodotto) {
      echo "<div class='card'>";
      echo "<img src='".$prodotto->getImmagine()."' alt='".$prodotto->getNome()."' />";
      echo "<h2>".$prodotto->getNome()."</h2>";
      echo "<p>".$prodotto->getTipo()."</p>";
      echo "<p>".$prodotto->getPrezzo()."€</p>";
      echo "<p>Categoria: ".$prodotto->getCategoria()->getNome()."</p>";
      echo "</div>";
  }
}


// Creazione delle categorie
$cane = new Categoria("Cane");
$gatto = new Categoria("Gatto");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
</body>
</html>