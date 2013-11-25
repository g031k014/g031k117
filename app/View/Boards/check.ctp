以下の内容で登録しますか?

<?php
    echo $this->Html->tag('br');
    echo $this->Html->tag('br');
    echo $comment['comment'];

    echo $this->Form->create('contribute', array('type' => 'post', 'url' => 'registration'));
        echo $this->Form->hidden('id', array('value' => $comment['commentId']));
        echo $this->Form->hidden('comment', array('value' => $comment['comment']));
        echo $this->Form->submit('登録');
    echo $this->Form->end();
