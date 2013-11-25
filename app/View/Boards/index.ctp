<?php
    echo $this->Html->link('contribute', 'contribute', array('class' => 'btn btn-primary'));

    echo $this->Html->tag('table');
        echo $this->Html->tableHeaders(array(
            'コメント',
            array('投稿時間' => array('class' => 'span2')),
            array('編集'     => array('class' => 'span1')),
            array('削除'     => array('class' => 'span1'))
        ));
        foreach($data as $comment){
            echo $this->Html->tableCells(array(array(
                $comment['Board']['comment'],
                $comment['Board']['modified'],
                $this->Html->link('edit', 'edit/' . $comment['Board']['id'], array('class' => 'btn btn-default')),
                $this->Html->link('delete', 'delete/' . $comment['Board']['id'], array('class' => 'btn btn-danger'))
            )));
        }
    echo $this->Html->tag('/table');
