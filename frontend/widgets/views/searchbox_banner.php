<?php

use yii\helpers\Url;

?>
<form data-action="<?=Url::toRoute($actionUrl)?>" method="post" class="tw_search" id="tw_search_banner">
  <div class="input_s">
    <input type="text" name="<?= $name ?>" class="form-control">
  </div>
  <div class="submit_s">
    <button type="submit"><i class="fa fa-search"></i></button>
  </div>
  <div class="clear_fix"></div>
</form>