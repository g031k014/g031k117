<?php
    $list = array(
        "サイトマップを佐々木研のfacebookページへのリンクへ書き換える" => array(
            "$('ul.sub_navigation > li > a:eq(1)').attr('href', 'https://www.facebook.com/IPU.IS.Lab');"
        ),
        "お問い合わせの隣に「おはよ」と赤文字で表示させる" => array(
            htmlspecialchars("$('<li>').text('おはよ').css('color', 'red').insertAfter('ul.sub_navigation > li:eq(2)');")
        )
    );

    echo $this->Html->nestedList($list);
