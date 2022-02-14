<?php



class Film{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_resume;
    private Genre $_genre;
    private array $_acteur;
    

    public function __construct(string $titre,string $dateSortie, int $duree, Realisateur $realisateur, string $resume, Genre $genre, array $acteur = [])
    {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $realisateur->ajoutRealisation($this);
        $this->_resume = $resume;
        $this->_genre = $genre;
        $genre->ajoutGenre($this);
        $this->_acteur = $acteur;
        foreach ($acteur as $act) {
            $unserAct = unserialize($act);
            $unserAct->ajoutFilmographie($this);
        }
        //$acteur->ajoutFilmographie($this);
    }

    public function __toString()
    {
        return $this->get_titre() .' '. $this->get_dateSortie().' '.$this->get_duree().' '.$this->get_realisateur().' '.$this->get_resume().' '.$this->get_genre();
    }

    public function get_titre()
    {
            return $this->_titre;
    }

    public function set_titre($titre)
    {
            $this->_titre = $titre;

            return $this;
    }
    
    public function get_dateSortie()
    {
        return $this->_dateSortie->format('Y-m-d');
    }

    public function set_dateSortie($dateSortie)
    {
        $this->_dateSortie = $dateSortie;

        return $this;
    }
    public function get_duree()
    {
        return "$this->_duree min";
    }

    public function set_duree($duree)
    {
        $this->_duree = $duree;

        return $this;
    }

    public function get_realisateur()
    {
            return $this->_realisateur;
    }

    
    public function set_realisateur($realisateur)
    {
            $this->_realisateur = $realisateur;

            return $this;
    }

    public function get_resume()
    {
        return $this->_resume;
    }

    
    public function set_resume($resume)
    {
        $this->_resume = $resume;

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

    public function get_acteur()
    {
        return $this->_acteur;
    }

    public function set_acteur($acteur)
    {
        $this->_acteur = $acteur;

        return $this;
    }
    public function getSortie()
    {
        $dateJour = new DateTime();
        $date = $this->get_dateSortie();
        $age = $dateJour->diff($date)->format('%y ans ');

        return $age;
    }
}
