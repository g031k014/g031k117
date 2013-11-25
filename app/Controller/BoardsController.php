<?php
    class BoardsController extends AppController{
        public $name = 'Boards';
        public $uses = array('Board');
        public $components = array('DebugKit.Toolbar');
        public $layout = 'board';

        public function index(){
            // 最新30件を取得
            $this->set('data', $this->Board->find('all', array(
                'order' => 'Board.id desc',
                'limit' => '30'
            )));
        }

        // 入力フォームテンプレート
        public function form(){
        }

        // 投稿
        public function contribute(){
            $result = array('comment' => '', 'id' => '');
            $this->set('comment', $result);
            $this->render('form');
        }

        // 編集
        public function edit(){
            if($result = $this->Board->getComment($this->request->params)){
                $this->set('comment', $result);
                $this->render('form');
            } else
                $this->redirect('index');
        }

        // 削除
        public function delete(){
            $this->Board->deleteComment($this->request->params['pass']);
            $this->redirect('index');
        }

        // 投稿内容チェック
        public function check(){
            if($result = $this->Board->checkComment($this->request)){
                $this->set('comment', $result);
            } else{
                $this->redirect(isset($this->request->data['contribute']['action'], $this->request->data['contribute']['commentId'])? $this->request->data['contribute']['action'] . '/' . $this->request->data['contribute']['commentId']: 'index');
            }
        }

        // 投稿内容をDBに登録
        public function registration(){
            $this->Board->registrationComment($this->request);
            $this->redirect('index');
        }
    }
