<?php
    class HogeController extends AppController{
        public $name = "Hoge";
        public $components = array('DebugKit.Toolbar');

        public function index(){ // cakeの場合はアクションと言う
            // http://~g031k117/cake/hoge/index/
        }

        public function show(){
            // http://~g031k117/cake/hoge/show/
            var_dump($this->request->data['string']['text']);
            if($this->request->is('POST')){ // POST送信がされたかどうか
                $output = $this->Hoge->annotation($this->request->data['string']['text']);
                $this->set('say', $output); // ビューに値を渡す
            } else{ // 直打ちしてきた場合の対策
                $this->flash(
                    'inputアクションから来てください',
                    array(
                        'controller' => 'hoge',
                        'action'     => 'input'
                    )
                );
            }
        }

        public function input(){
        }
    }
