<div class="tt_btn_post top">
<form action="" method="post" style="display:inline">
    <input type="hidden" name="_adverts_action" value="" />
    <input type="hidden" name="_post_id" id="_post_id" value="<?php esc_attr_e($post_id) ?>" />
    <input type="submit" value="<?php _e("แก้ไข ประกาศ", "adverts") ?>" style="font-size:1.2em" class="adverts-cancel-unload" />
</form>
<form action="" method="post" style="display:inline">
    <input type="hidden" name="_adverts_action" value="save" />
    <input type="hidden" name="_post_id" id="_post_id" value="<?php esc_attr_e($post_id) ?>" />
    <input type="submit" value="<?php _e("โพสประกาศ", "adverts") ?>" style="font-size:1.2em" class="adverts-cancel-unload blink" />
</form>
</div>
<div class="tt_steps_post">
<ul class="steps">
  <li class="past setp1">
    <span>
      <strong class="steps_h">ขั้นตอนที่ 1</strong>
     <strong class="steps_f"> ใส่รายละเอียดสินค้า</strong>
    </span><i></i>
  </li>
  <li class="present setp2">
    <span>
      <strong class="steps_h">ขั้นตอนที่ 2</strong>
      <strong class="steps_f">โพสประกาศ</strong>
    </span><i></i>
  </li>
</ul>
</div>
<?php include_once ADVERTS_PATH . 'templates/single-step2.php'; ?>
 <div class="tt_btn_post">
<form action="" method="post" style="display:inline">
    <input type="hidden" name="_adverts_action" value="" />
    <input type="hidden" name="_post_id" id="_post_id" value="<?php esc_attr_e($post_id) ?>" />
    <input type="submit" value="<?php _e("แก้ไข ประกาศ", "adverts") ?>" style="font-size:1.2em" class="adverts-cancel-unload" />
</form>
<form action="" method="post" style="display:inline">
    <input type="hidden" name="_adverts_action" value="save" />
    <input type="hidden" name="_post_id" id="_post_id" value="<?php esc_attr_e($post_id) ?>" />
    <input type="submit" value="<?php _e("โพสประกาศ", "adverts") ?>" style="font-size:1.2em" class="adverts-cancel-unload blink" />
</form>
</div>