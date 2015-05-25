<?php

namespace esprit\voitureBundle\Entity;
use Doctrine\ORM\Mapping as ORM; //biblioteke
use Symfony\Component\Validator\Constraint as Assert;  //validateurs
// orm lintermediaire entre la bd et notre classe on necri pas les cmdes sql

/**
 * @ORM\Entity 
 */

class annnonce
{
    /**
     * @ORM\Id;
     * @ORM\Column(type ="integer");
     * @ORM\GeneratedValue;
     */
    protected $id;
    
    /**
     *
     * @ORM\Column(type ="string",length=255);
     */
    protected $description;
    
    
    
        /**
     *
     * @ORM\Column(type ="integer");
     */
    protected $prix;
    
    
    /**
     * 
     * *@ORM\ManyToOne(targetEntity="model");
     */
    protected $model;
        
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getprix() {
        return $this->prix;
    }

    public function setprix($prix) {
        $this->id = $prix;
    }

    public function getdescription() {
        return $this->description;
    }

    public function setdescription($description) {
        $this->description = $description;
    }
    
    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }



   
}