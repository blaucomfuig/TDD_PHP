<?php

namespace App;

class RandomItem {


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