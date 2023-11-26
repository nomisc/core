<?php

namespace Code\Salesforce;

class Account extends CrmObject
{    

    private $name; 

    public function __construct($jsonData) {
        $this->type = ObjectType::Account;
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