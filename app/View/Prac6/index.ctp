<?php $this->Html->doctype('html5'); ?>
<html lang="ja">
<html>
<head>
    <?php $this->Html->charset(); ?>
    <?php $this->Html->css('bootstrap.min.css', null, array('plugin' => false)); ?>
</head>

<body>
    index<br />
    <?php echo $this->Html->link('basic1', 'http://49.212.46.130/~g031k117/cake/reportAboutFrameworks', array('class' => 'btn btn-default')); ?><br />
    <?php echo $this->Html->link('basic2', 'basic2', array('class' => 'btn btn-default')); ?><br />
    <?php echo $this->Html->link('basic3', 'basic3', array('class' => 'btn btn-default')); ?><br />
    <?php echo $this->Html->link('dev1', 'dev1', array('class' => 'btn btn-default')); ?><br />
    <?php echo $this->Html->link('dev2', 'dev2', array('class' => 'btn btn-default')); ?><br /><br />
    発展課題やりました
</body>
</html>
