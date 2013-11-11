<?php
    class Prac6 extends Model{
        public $name = "Prac6";
        public $useTable = false;

        // APIを叩くメソッド
        // 成功時はAPIからの返却値を返す
        // 失敗時はfalseを返す
        private function api($url){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);         // 取得するURL
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 取得内容を変数に格納
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5); // タイムアウト
            $res  = curl_exec($curl); // セッション実行
            $info = curl_getinfo($curl); // 内容を配列で取得
            curl_close($curl);

            if($res != false){
                return $res;
            } else{
                $this->log("API connect error");
                return false;
            }
        }

        // APIから受け取ったデータをViewに渡すメソッド
        public function useApi(){
            $hatena = simplexml_load_string($this->api('http://b.hatena.ne.jp/FATE7372/rss'));

            if($hatena != false){
                $result    = array(); // Viewに渡す値
                $keyphrase = null;

                $result['channel'] = array('title' => $hatena->channel->title, 'link' => $hatena->channel->link);

                for($i = 0; $i < count($hatena->item); $i++){
                    // Yahoo!キーフレーズ抽出API
                    $keyphrase = $this->api("http://jlp.yahooapis.jp/KeyphraseService/V1/extract?appid=dj0zaiZpPWgyRzlvNHBaWjFVYSZzPWNvbnN1bWVyc2VjcmV0Jng9MTM-&output=xml&sentence=" . urlencode($hatena->item->$i->title));
                    $keyphrase = simplexml_load_string($keyphrase);

                    $result['bookmark'][$i] = array('title' => $hatena->item->$i->title, 'link' => $hatena->item->$i->link, 'description' => $hatena->item->$i->description, 'keyphrase' => $keyphrase);
                }

                return $result;
            }
        }

        // hoge
        public function hoge($data){
            if(isset($data['registration'])){
                $post = $data['registration'];
                $result = array();

                if(isset($post['complete']) && $post['complete'] == true){
                    // 登録完了
                    $result['complete'] = true;
                } else{
                    // 登録情報確認
                    $sex   = array('男', '女');
                    $grade = array('学部1年', '学部2年', '学部3年', '学部4年', '院1年', '院2年');
                    $favorite = array();
                    $j = 0;
                    for($i = 0; isset($post['favorite' . $i]); $i++){
                        if($post['favorite' . $i] != 0){
                            $favorite[$j++] = $post['favorite' . $i];
                        }
                    }

                    $result['name']       = $post['lastName'] . ' ' . $post['firstName'];
                    $result['sex']        = $sex[$post['sex']];
                    $result['grade']      = $grade[$post['grade'] - 1];
                    $result['favorite']   = $favorite;
                    $result['comment']    = $post['comment'];
                    $result['password']   = $post['password'];
                    $result['inputCheck'] = true;
                    $result['time']       = $post['time'];
                }

                return $result;
            }
        }
    }
