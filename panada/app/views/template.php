<?php

/* jenal<warungkopidigital.blogspot.com> */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
  <?php
$this->output('header');
?>
<body>
    <?php
    if(isset($leftdatas))$this->output('left',$leftdatas);
    $this->output($page,$datas);
    if(isset($rightdatas))$this->output('left',$rightdatas);
    ?>
</body>
<?php $this->output('footer'); 
   