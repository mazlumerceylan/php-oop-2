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



// Creazione dei prodotti
$ciboCane = new Prodotto($cane, "Cibo per cani", "Cibo", 10.99, "img/cibo_cane.jpeg");
$giocoCane = new Prodotto($cane, "Gioco per cani", "Gioco", 5.99, "img/gioco_cane.jpeg");
$cucciaCane = new Prodotto($cane, "Cuccia per cani", "Cuccia", 20.99, "img/cuccia_cane.avif");
$ciboGatto = new Prodotto($gatto, "Cibo per gatti", "Cibo", 8.99, "img/cibo_gatto.webp");
$giocoGatto = new Prodotto($gatto, "Gioco per gatti", "Gioco", 4.99, "img/gioco_gatto.jpeg");
$cucciaGatto = new Prodotto($gatto, "Cuccia per gatti", "Cuccia", 19.99, "img/cuccia_gatto.jpeg");


// Stampa delle card
$card = new Card();
echo "<div class='container'>";
$card->stampaProdotto($ciboCane);
$card->stampaProdotto($giocoCane);
$card->stampaProdotto($cucciaCane);
$card->stampaProdotto($ciboGatto);
$card->stampaProdotto($giocoGatto);
$card->stampaProdotto($cucciaGatto);

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