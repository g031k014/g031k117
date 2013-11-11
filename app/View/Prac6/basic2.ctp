<?php echo $this->Html->link($result['channel']['title'], $result['channel']['link']); ?><br /><br /><br /><br />

<?php for($i = 0; $i < count($result['bookmark']); $i++): ?>
    <?php echo $i; ?>:<?php echo $this->Html->link($result['bookmark'][$i]['title'], $result['bookmark'][$i]['link']); ?><br />
    <?php echo $result['bookmark'][$i]['description']; ?><br />
    キーワード:
    <?php
        for($j = 0; $j < count($result['bookmark'][$i]['keyphrase']); $j++){
            echo $result['bookmark'][$i]['keyphrase']->Result->$j->Keyphrase;
        }
    ?>
    <br /><br /><br />
<?php endfor; ?>
