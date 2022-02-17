<?php


class Casting {
    
    private Role $_role;
    private Acteur $_acteur;
    private Film $_films;

    public function __construct(Role $role, Acteur $acteur,Film $films)
    {
        $this->_role = $role;
        $role->ajoutCasting($this);
        $this->_acteur = $acteur;
        $acteur->ajoutCasting($this);
        $this->_films = $films;
        $films->ajoutCasting($this);
    }

    public function __toString()
    {
        return $this->_role.' joué par '.$this->_acteur;
    }

    public function getRole()
    {
            return $this->_role;
    }

    
    public function setRole($role)
    {
            $this->_role = $role;

            return $this;
    }

    public function getActeur()
    {
            return $this->_acteur;
    }

    public function setActeur($acteur)
    {
            $this->_acteur = $acteur;

            return $this;
    }

    public function getFilms()
    {
            return $this->_films;
    }

    
    public function setFilms($films)
    {
            $this->_films = $films;

            return $this;
    }
}