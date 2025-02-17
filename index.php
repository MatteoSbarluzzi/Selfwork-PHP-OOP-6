<?php

require_once 'class.php';

class Categoria {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Post {
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($titolo, Categoria $categoria, array $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function getPostDetails() {
        echo "Titolo: " . $this->titolo . "\n";
        echo "Categoria: " . $this->categoria->getNome() . "\n";
        echo "Tag: " . implode(", ", $this->tag) . "\n\n";
    }
}



$attualita = new Categoria("Attualità");
$sport = new Categoria("Sport");
$gossip = new Categoria("Gossip");
$storia = new Categoria("Storia");


$post1 = new Post("Ultime Notizie", $attualita, ["politica", "economia"]);
$post2 = new Post("Finale di Champions League", $sport, ["calcio", "Champions League"]);
$post3 = new Post("Nuovi Gossip", $gossip, ["celebrità", "rumors"]);
$post4 = new Post("Eventi Storici", $storia, ["antichità", "guerre"]);


$post1->getPostDetails();
$post2->getPostDetails();
$post3->getPostDetails();
$post4->getPostDetails();

?>
