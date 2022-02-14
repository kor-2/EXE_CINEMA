<?php

class Role
{
    private string $_role ;
    private array $_acteur;

    public function __construct($role, array $acteur = [])
    {
        $this->_role = $role;

        $this->_acteur = $acteur;
    }

    public function __toString()
    {
        
        
        return $this->get_role();
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
    public function showRole(){
        echo "<h4> Dans le role de $this</h4>";
        echo "<ul>";
        foreach ($this->_acteur as $act) {
            echo " <li>$act</br>";
        }
        echo "</ul>";
    }

}
