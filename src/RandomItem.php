<?php

namespace App;

class RandomItem {


    public function chooseCoder ($array)
    {
        $random = rand(0, 2);
        $randomId = $array[$random]['id'];
        foreach($array as $coder){
            if($coder['id'] === $randomId){
                $key = array_search($coder, $array);
                unset($array[$key]);
            }
            if(!(in_array($coder, $array))){
                return "true";
            }
        }
    }
}

class Person {

    public $health = 100;
    public function execute (Person $victim){
        $this -> health -= 5;
        return $this -> health;
    }
}

?>