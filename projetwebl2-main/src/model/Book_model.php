<?php

class Book implements JsonSerializable
{
    private $id;
    private $couverture;
    private $titre;
    private $auteur;
    private $description;
    private $themes;

    private $langue_original;
    private $date_parution_originale;
    private $date_parution_fr;
    private $date_de_sortie;


    public function __construct(
    string $id,
    ?string $couverture, 
    string $titre, 
    string $auteur, 
    string $description, 
    ?string $themes, 
    string $langue_original, 
    ?string $date_parution_originale, 
    ?string $date_parution_fr, 
    ?string $date_de_sortie)
{
    $this->id = $id;
    $this->couverture = $couverture;
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->description = $description;
    $this->themes = $themes;
    $this->langue_original = $langue_original;
    $this->date_parution_originale = $date_parution_originale;
    $this->date_parution_fr = $date_parution_fr;
    $this->date_de_sortie = $date_de_sortie;
}

    public function getId()
    {
        return $this->id;
    }

    public function getCouverture(): string
    {    
        return $this->couverture;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function getDescription(): string
    {   
        return $this->description;
    }

    public function themes(): string
    {
        if($this->themes == null)
        {
            return "";
        }
        return $this->themes;
    }

    public function getLangueOriginal(): string
    {
        return $this->langue_original;
    }

    public function date_parution_originale(): string
    {
        if($this->date_parution_originale == null)
        {
            return "";
        }
        return $this->date_parution_originale;
    }

    public function date_parution_fr(): string
    {
        if($this->date_parution_fr == null)
        {
            return "";
        }
        return $this->date_parution_fr;
    }

    public function date_de_sortie(): string
    {
        if($this->date_de_sortie == null)
        {
            return "";
        }
        return $this->date_de_sortie;
    }



    
    public function setTitre(string $titre): string
    {
        $this->titre = $titre;
    }

    public function setAuteur(string $auteur): string
    {
        $this->auteur = $auteur;
    }

    public function setdescription(string $description): string
    {   
        $this->description = $description;
    }

    public function setthemes(array $themes): array
    {
        $this->themes = $themes;
    }

    public function setLangueOriginal(string $langue_original): string
    {
        $this->langue_original = $langue_original ;
    }

    public function setdate_parution_originale(string $date_parution_originale): string
    {
        $this->date_parution_originale = $date_parution_originale;
    }

    public function setdate_parution_fr(string $date_parution_fr): string
    {
        $this->date_parution_fr = $date_parution_fr;
    }

    public function setdate_de_sortie(string $date_de_sortie): string
    {
        $this->date_de_sortie = $date_de_sortie;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'couverture' => $this->couverture,
            'titre' => $this->titre,
            'auteur' => $this->auteur,
            'description' => $this->description,
            'themes' => $this->themes,
            'langue_original' => $this->langue_original,
            'date_parution_originale' => $this->date_parution_originale,
            'date_parution_fr' => $this->date_parution_fr,
            'date_de_sortie' => $this->date_de_sortie

        ];
    }







}

