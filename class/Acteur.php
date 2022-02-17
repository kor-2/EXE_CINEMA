<?php

class Acteur extends Personne
{
    private array $_casting;

    public function __construct($nom,$prenom,$sexe,$dateBD)
    {
        parent::__construct($nom,$prenom,$sexe,$dateBD);
        $this->_casting =[];

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

            echo "<div><div class=\"uk-card uk-card-secondary uk-card-hover uk-card-body \">";
            echo "<h3 class=\"uk-card-title\">Filmographie de $this</h3>";
            echo "<ul class=\"uk-list\">";
            foreach ($this->_casting as $cast) {
                echo "<li>  <i class=\"fa-solid fa-clapperboard fa-shake\"></i>".$cast->getFilms()->get_titre() .' sortie le '. $cast->getFilms()->get_dateSortie().'. Il dure '.$cast->getFilms()->get_duree().'. Résumé : '.$cast->getFilms()->get_resume().' Genre : '.$cast->getFilms()->get_genre()."</br>";
            }       
            echo"</ul></div></div>";
        }
        public function ajoutCasting($casting){
            array_push($this->_casting,$casting);
    
            return $this;
    
        }


}