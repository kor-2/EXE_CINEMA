<?php

class Role
{
    private string $_role ;
    private Film $_film;
    private Acteur $_acteur;

    public function __construct($role, $film)
    {
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteur = [];
    }

    public function __toString()
    {
        return $this->get_role() .' '.$this->get_film().' '.$this->get_acteur();
    }

    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($role)
    {
        $this->_role = $role;

        return $this;
    }

    public function get_film()
    {
        return $this->_film;
    }

    public function set_film($film)
    {
        $this->_film = $film;

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
    public function ajoutActeur($acteur){
        array_push($this->_acteur,$acteur);

        return $this;
    }

}
