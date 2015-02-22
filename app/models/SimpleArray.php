<?php

  class SimpleArray {

    private $_data;

    public function __construct(Array $properties=array()){
      $this->_data = $properties;
    }

    // magic methods!
    public function __set($property, $value){
      return $this->_data[$property] = $value;
    }

    public function __get($property){
      return array_key_exists($property, $this->_data)
        ? $this->_data[$property]
        : null
      ;
    }
  }
