<?php 

namespace Code\Salesforce;

enum ObjectType {
    case Account;
    case Lead;
}

abstract class CrmObject
{
    protected $data;

    private $id; 

    protected $type; 

    public function __construct($jsonData)
    {
        $this->data = json_decode($jsonData, true);
        
        $this->id = $this->data['id']; 

    }
    
    public function getId() {
        return $this->id; 
    }

    public function getType() {
        return $this->type; 
    }


    
}
