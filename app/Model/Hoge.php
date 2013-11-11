<?php
    class Hoge extends Model{
        public $name = "Hoge";
        public $useTable = false;

        public function annotation($string){
            $output = '';

            for($i = 0; $i < 3; $i++){
                $output += $string;
            }

            return $output;
        }
    }
