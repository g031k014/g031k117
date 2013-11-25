<?php
    class Board extends Model{
        public $name = 'Board';

        // コメント削除
        public function deleteComment($id){
            if(isset($id[0])){
                $this->delete($id[0]);
            }
        }

        // コメント情報を取得
        public function getComment($params){
            if(isset($params['action'])){
                switch($params['action']){
                    case 'contribute':
                        $result = array('comment' => '', 'id' => '', 'action' => 'contribute');
                        break;

                    case 'edit':
                        if(isset($params['pass'][0])){
                            // Board.idがparams['pass'][0]のレコードを1行だけ取得してくる
                            $comment = $this->find('first', array('conditions' => array('Board.id' => $params['pass'][0])));
                            if(isset($comment)){
                                $result = array(
                                    'comment' => $comment['Board']['comment'],
                                    'id'      => $comment['Board']['id'],
                                    'action'  => 'edit'
                                );
                            } else{
                                $result = NULL;
                            }
                        } else{
                            $result = NULL;
                        }
                        break;

                    default:
                        $result = NULL;
                }

                return $result;
            }
        }

        // 投稿内容をチェック
        public function checkComment($request){
            if(isset($request->data['contribute'])){
                if($request->data['contribute']['comment'] != ''){
                    return $request->data['contribute'];
                } else{
                    return NULL;
                }
            } else{
                return NULL;
            }
        }

        public function registrationComment($request){
            if(isset($request->data['contribute']['comment'])){
                $comment = array('id' => $request->data['contribute']['id'], 'comment' => $request->data['contribute']['comment']);
                $this->save($comment);
            } else{
                debug($request);
            }
        }
    }
