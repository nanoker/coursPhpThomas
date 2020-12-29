<?php

class Film{


    /**
     * @var int
     */
    protected $id;

    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $titre;

    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $annee;
    /**
     * 
     *
     * @var string
     */
    protected $genre;

    


    

    /**
     * Get the value of id
     *
     * @return  int;
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int;  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
    

    /**
     * Get undocumented variable
     *
     * @return  string
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set undocumented variable
     *
     * @param  string  $titre  Undocumented variable
     *
     * @return  self
     */ 
    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string;
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set undocumented variable
     *
     * @param  string;  $annee  Undocumented variable
     *
     * @return  self
     */ 
    public function setAnnee(string $annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of genre
     *
     * @return  string;
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @param  string;  $genre
     *
     * @return  self
     */ 
    public function setGenre(string $genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function ajouter(){

        echo $this->titre . ", année: " . $this->annee . ", " . "genre: " . $this->genre;
    }
}


?>