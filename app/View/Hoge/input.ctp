<h2>文字列を入力してくれりゃ</h2>

<?php
    echo $this->Form->create('string', array(
        'type' => 'post',
        'url'  => 'show'
    ));

    echo $this->Form->input('string.text', array(
        'label' => 'string',
        'type'  => 'text'
    ));

    echo $this->Form->submit();
    echo $this->Form->end();
