<?php
class Realisateur extends Personne
{
    
    private array $_realisation;

    public function __construct($nom,$prenom,$sexe,$dateBD)
    {
        parent::__construct($nom,$prenom,$sexe,$dateBD);
        $this->_realisation = [];
    }
    public function __toString()
    {
        return $this->get_nom().' '.$this->get_prenom().' '. $this->getAge();
    }

    public function get_realisation()
    {
        return $this->_realisation;
    }

    public function set_realisation($realisation)
    {
        $this->_realisation = $realisation;
        return $this;
    }
    public function ajoutRealisation($realisation){
        array_push($this->_realisation,$realisation);

        return $this;
    }
    public function showReal(){


        echo "<div><div class=\"uk-card uk-card-secondary uk-card-hover uk-card-body \">";
        echo "<h3 class=\"uk-card-title\">Réalisation de $this</h3>";
        echo "<ul class=\"uk-list\">";
        foreach ($this->_realisation as $real) {
            echo " <li><i class=\"fa-solid fa-clapperboard fa-shake\"></i>$real</br>";
        }       
        echo"</ul></div></div>";
    }

    
}