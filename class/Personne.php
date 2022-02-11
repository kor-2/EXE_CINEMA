<?php

class Personne
{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_dateBD;

    public function __construct($nom,$prenom,$sexe,$dateBD)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateBD = new DateTime($dateBD);
    }

    public function __toString()
    {
        return $this->get_nom().' '.$this->get_prenom().' '.$this->get_sexe().' '. $this->getAge();
    }

   
    public function get_nom()
    {
        return $this->_nom;
    }

   
    public function set_nom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    public function get_sexe()
    {
        return $this->_sexe;
    }

    public function set_sexe($sexe)
    {
        $this->_sexe = $sexe;

        return $this;
    }

    public function get_dateBD()
    {
        return $this->_dateBD;
    }

    public function set_dateBD($_dateBD)
    {
        $this->_dateBD = $_dateBD->format('Y-m-d');
        return $this;
    }
    public function getAge()
    {
        $dateJour = new DateTime();
        $date = $this->get_dateBD();
        $age = $dateJour->diff($date)->format('%y ans ');

        return $age;
    }
}
class Acteur extends Personne
{
    
    private array $_filmographies;

    public function __construct($nom,$prenom,$sexe,$dateBD)
    {
        parent::__construct($nom,$prenom,$sexe,$dateBD);
        $this->_filmographies = [];

    }
    
    public function __toString()
    {
        return $this->get_nom().' '.$this->get_prenom().' '. $this->getAge();
    }

        public function get_filmographies()
        {
                return $this->_filmographies;
        }

        public function set_filmographies($filmographies)
        {
                $this->_filmographies = $filmographies;

                return $this;
        }

        public function ajoutFilmographie($filmographies){

            array_push($this->_filmographies,$filmographies);
    
            return $this;
        }
        public function showFilmo(){
            echo "<h4> Filmographie de $this</h4>";
            echo "<ul>";
            foreach ($this->_filmographies as $filmo) {
                echo " <li>$filmo</br>";
            }
            echo "</ul>";
        }


}
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
        return $this->get_nom().' '.$this->get_prenom().' '.$this->get_sexe().' '. $this->getAge();
    }

    public function get_realisation()
    {
        return $this->_realisation;
    }

    public function set_realisation($_realisation)
    {
        $this->_realisation = $_realisation;
        return $this;
    }
    public function ajoutRealisation($realisation){
        array_push($this->_realisation,$realisation);

        return $this;
    }
    public function showReal(){
        echo "<h4> Réalisation de $this</h4>";
        echo "<ul>";
        foreach ($this->_realisation as $real) {
            echo " <li>$real</br>";
        }
        echo "</ul>";
    }

    
}