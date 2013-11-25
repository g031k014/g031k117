<?php if(isset($comment)): ?>
    <?php
        
        echo $this->Form->create('contribute', array('type' => 'post', 'url' => 'check'));
            echo $this->Form->input('comment', array('type' => 'textarea', 'value' => $comment['comment']));

            echo $this->Form->submit('投稿', array('class' => 'btn btn-primary'));
            echo $this->Form->hidden('action', array('value' => $this->request->params['action']));
            echo $this->Form->hidden('commentId', array('value' => $comment['id']));
        echo $this->Form->end();
    ?>
<?php else: ?>
    <?php //echo $this->redirect('index'); ?>
<?php endif; ?>
