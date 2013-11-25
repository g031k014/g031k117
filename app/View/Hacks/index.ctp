<?php
    $list = array(
        'ページ上部' => array(
            '左側のロゴをセレクタ属性を使わず変更'  => array(
                "$('#header > div > .box_left > .logo > a > img').attr('src', 'http://atnd.org/event_images/0004/1623/Vim_logo_original.png?1317617866');"
            ),
            '右側の人物の画像をセレクタ属性を使って変更' => array(
                "$('img[alt=" . '"広報担当 ひろゆき"' . "]').attr('src', 'http://www.officiallyjd.com/wp-content/uploads/2013/03/20130308_sugiuchitoshiya_22.jpg')"
            ),
            'ロゴの隣に書いてある文字列を任意の文字列に変更' => array(
                "$('#header > div > .box_left > h1').html('ワイはVim派や!!');"
            )
        ),
        'ページ下部' => array(
            '任意のwebページへのリンクを追加' => array(
                'var $hoge = $("#footer > .box_wrap > .sitemap > .sitemap_about > ul").filter(":last").find("li").filter(":last");',
                htmlspecialchars('$("<li>").html("<a href=' . "'" . 'http://www.iwate-pu.ac.jp/' . "'" . '>岩手県立大学</a>").insertAfter($hoge);')
            )
        )
    );

    echo $this->Html->nestedList($list);
