<?php

require_once 'class.php';

class Post {
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Category $categoria, array $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function getPostDetails() {
        echo "Titolo: " . $this->titolo . "<br>";
        echo "Categoria: ";
        $this->categoria->getMyCategory();
        echo "<br>Tag: " . implode(", ", $this->tag) . "<br><br>";
    }
}


$post1 = new Post("Ultime Notizie", new Attualita(), ["politica", "economia"]);
$post2 = new Post("Finale di Champions League", new Sport(), ["calcio", "Champions League"]);
$post3 = new Post("Nuovi Gossip", new Gossip(), ["celebrità", "rumors"]);
$post4 = new Post("Eventi Storici", new Storia(), ["antichità", "guerre"]);


$post1->getPostDetails();
$post2->getPostDetails();
$post3->getPostDetails();
$post4->getPostDetails();

?>
