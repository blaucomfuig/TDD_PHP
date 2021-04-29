<?php

namespace App;

class RandomItem {
    public $array = array(array("name" => "Andrea",
    "id" => 0), array("name" => "Joan",
    "id" => 1), array("name" => "Berta",
    "id" => 2));


    public function execute ($array)
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

?>