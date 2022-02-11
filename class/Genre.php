<?php

class Genre {
    private string $_genre;
    private array $_films;

    public function __construct($genre){
        $this->_genre = $genre;
        $this->_films = [];
    }

    public function __toString(){
        return $this->get_genre();
    }

    public function ajoutfilms($films){
        array_push($this->_films,$films);

        return $this;
    }

    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($genre)
    {
        $this->_genre = $genre;

        return $this;
    }


    public function get_films()
    {
        return $this->_films;
    }

    public function set_films($films)
    {
        $this->_films = $films;

        return $this;
    }
    public function showGenre(){
        echo "<h4> Films de $this</h4>";
        echo "<ul>";
        foreach ($this->_films as $film) {
            echo " <li>$film</br>";
        }
        echo "</ul>";
    }
    public function ajoutGenre($films){

        array_push($this->_films,$films);

        return $this;
    }
}