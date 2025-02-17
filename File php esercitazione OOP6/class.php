<?php

abstract class Category {
    abstract public function getMyCategory(): string;
}

class News extends Category {
    public function getMyCategory(): string {
        return "News";
    }
}

class Sport extends Category {
    public function getMyCategory(): string {
        return "Sport";
    }
}

class Gossip extends Category {
    public function getMyCategory(): string {
        return "Gossip";
    }
}

class History extends Category {
    public function getMyCategory(): string {
        return "Storia";
    }
}


$storia = new History();
echo $storia->getMyCategory() . "\n";
