<?php
    class Prac6sController extends AppController{
        public $name = "Prac6";
        public $components = array('DebugKit.Toolbar');
        public $layout = 'prac';

        public function index(){
        }

        public function basic1(){
        }

        public function basic2(){
            $result = $this->Prac6->useApi();

            $this->set('result', $result);
        }

        public function basic3(){
        }

        public function basic3_result(){
            $result = $this->Prac6->hoge($this->request->data); // hogeとかあり得ないからメソッド名を変更すること
            $this->set('result', $result);
        }

        public function dev1(){
        }

        public function dev2(){
        }
    }
