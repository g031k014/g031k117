<?php
    echo $this->Form->create('registration', array('type' => 'post', 'url'  => 'basic3_result'));

    // 名字
    echo $this->Form->label('registrationLastName' , '名字', array());
    echo $this->Form->text('lastName' , array());

    // 名前
    echo $this->Form->label('firstName', '名前', array());
    echo $this->Form->text('firstName', array());

    // 性別
    echo $this->Form->label('sex', '性別', array());
    echo $this->Form->radio('sex', array(0 => 'male', 1 => 'female'), array('legend' => false, 'default' => 1));

    // 学年
    echo $this->Form->label('grade', '学年', array());
    echo $this->Form->select('grade',
        array(
            1 => '学部1年',
            2 => '学部2年',
            3 => '学部3年',
            4 => '学部4年',
            5 => '院1年',
            6 => '院2年'
        ),
        array(
            'label'   => '学年',
            'default' => 2
    ));

    // 好きなもの
    echo $this->Form->label('favorite', '好きなモノ', array());
    echo $this->Form->checkbox('favorite0', array('value' => 'プログラム', 'checked' => true));
    echo $this->Form->label('favorite0', 'プログラム', array());
    echo $this->Form->checkbox('favorite1', array('value' => '読書'));
    echo $this->Form->label('favorite1', '読書', array());
    echo $this->Form->checkbox('favorite2', array('value' => 'プログラミング', 'checked' => true));
    echo $this->Form->label('favorite2', 'プログラミング', array());
    echo $this->Form->checkbox('favorite3', array('value' => 'ほげ'));
    echo $this->Form->label('favorite3', 'ほげ', array());

    // コメント
    echo $this->Form->label('comment', 'コメント', array());
    echo $this->Form->textarea('comment', array());

    // パスワード
    echo $this->Form->label('password', 'パスワード', array());
    echo $this->Form->password('password', array());

    echo $this->Form->hidden('time', array('value' => date('H:i:s')));

    echo $this->Form->submit();
    echo $this->Form->end();
