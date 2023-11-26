<?php

namespace Code\Salesforce;

class Lead extends CrmObject
{    

    private $name; 
    
    public function __construct($jsonData) {
        $this->type = ObjectType::Lead;
        parent::__construct($jsonData);        
        $this->map(); 
    }
    
    private function map() {
        $this->name = $this->data['name']; 
    }    

    public function getName() {
        return $this->name; 
    }

}