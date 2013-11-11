<?php if(isset($result['complete']) && $result['complete'] == true): // true:登録完了 ?>
    登録完了
    <?php echo $this->Html->tag('br'); ?>
    <?php echo $this->Html->link('最初に戻る', 'basic3'); ?>
<?php elseif(isset($result['inputCheck']) && $result['inputCheck'] == true): // true:入力チェック ?>
    名前:<?php echo $result['name']; ?>
    <?php echo $this->Html->tag('br'); ?>
    性別:<?php echo $result['sex']; ?>
    <?php echo $this->Html->tag('br'); ?>
    学年:<?php echo $result['grade']; ?>
    <?php echo $this->Html->tag('br'); ?>
    好きなモノ:
    <?php
        for($i = 0; $i < count($result['favorite']); $i++){
            echo $result['favorite'][$i];
        }
    ?>
    <?php echo $this->Html->tag('br'); ?>
    コメント:<?php echo $result['comment']; ?>
    <?php echo $this->Html->tag('br'); ?>
    パスワード:<?php echo $result['password']; ?>
    <?php echo $this->Html->tag('br'); ?>
    登録時間: <?php echo $result['time']; ?>
    <?php echo $this->Html->tag('br'); ?>
    <?php echo $this->Form->create('registration', array('type' => 'post', 'url' => 'basic3_result')); ?>
        <?php echo $this->Form->hidden('complete', array('value' => true)); // 登録完了フラグ ?>
        <?php echo $this->Form->submit(); ?>
    <?php echo $this->Form->end(); ?>
<?php else: ?>
    入力フォームからアクセスしてください
    <?php echo $this->Html->tag('br'); ?>
    <?php echo $this->Html->link('最初に戻る', 'basic3'); ?>
<?php endif; ?>
