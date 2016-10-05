<div class="tt_center">  
<div class="tt_steps_post">
<ul class="steps">
  <li class="past">
    <span>
      <strong class="steps_h">ขั้นตอนที่ 1</strong>
     <strong class="steps_f"> ใส่รายละเอียดสินค้า</strong>
    </span><i></i>
  </li>
  <li class="present">
    <span>
      <strong class="steps_h">ขั้นตอนที่ 2</strong>
      <strong class="steps_f">โพสประกาศ</strong>
    </span><i></i>
  </li>
</ul>
</div>
<?php adverts_flash( $adverts_flash ) ?>
<form action="" method="post" class="adverts-form adverts-form-aligned">
        <?php foreach($form->get_fields( array( "type" => array( "adverts_field_hidden" ) ) ) as $field): ?>
        <?php call_user_func( adverts_field_get_renderer($field), $field) ?>
        <?php endforeach; ?>
        <?php foreach($form->get_fields() as $field): ?>
        <div class="adverts-control-group <?php esc_attr_e( str_replace("_", "-", $field["type"] ) ) ?> <?php if(adverts_field_has_errors($field)): ?>adverts-field-error<?php endif; ?>">
		<?php if($field["name"] == "thaitheme_mata_location_province"): ?>
		 <div class="postcode-input">
		 <select id="province" name="province">
		<option value="0">เลือกจังหวัด</option>
		<option value="9" >กรุงเทพมหานคร</option><option value="8" >กระบี่</option><option value="10" >กาญจนบุรี</option><option value="11" >กาฬสินธุ์</option><option value="12" >กำแพงเพชร</option><option value="13" >ขอนแก่น</option><option value="14" >จันทบุรี</option><option value="15" >ฉะเชิงเทรา</option><option value="16" >ชลบุรี</option><option value="17" >ชัยนาท</option><option value="18" >ชัยภูมิ</option><option value="19" >ชุมพร</option><option value="2" >เชียงราย</option><option value="1" >เชียงใหม่</option><option value="20" >ตรัง</option><option value="21" >ตราด</option><option value="22" >ตาก</option><option value="23" >นครนายก</option><option value="24" >นครปฐม</option><option value="25" >นครพนม</option><option value="26" >นครราชสีมา</option><option value="27" >นครศรีธรรมราช</option><option value="28" >นครสวรรค์</option><option value="29" >นนทบุรี</option><option value="30" >นราธิวาส</option><option value="31" >น่าน</option><option value="32" >บุรีรัมย์</option><option value="79" >บึงกาฬ</option><option value="33" >ปทุมธานี</option><option value="34" >ประจวบคีรีขันธ์</option><option value="35" >ปราจีนบุรี</option><option value="36" >ปัตตานี</option><option value="37" >พระนครศรีอยุธยา</option><option value="38" >พะเยา</option><option value="39" >พังงา</option><option value="40" >พัทลุง</option><option value="41" >พิจิตร</option><option value="42" >พิษณุโลก</option><option value="3" >เพชรบุรี</option><option value="4" >เพชรบูรณ์</option><option value="6" >แพร่</option><option value="43" >ภูเก็ต</option><option value="45" >มุกดาหาร</option><option value="7" >แม่ฮ่องสอน</option><option value="44" >มหาสารคาม</option><option value="47" >ยะลา</option><option value="46" >ยโสธร</option><option value="48" >ร้อยเอ็ด</option><option value="49" >ระนอง</option><option value="50" >ระยอง</option><option value="51" >ราชบุรี</option><option value="52" >ลพบุรี</option><option value="53" >ลำปาง</option><option value="54" >ลำพูน</option><option value="5" >เลย</option><option value="55" >ศรีสะเกษ</option><option value="56" >สกลนคร</option><option value="57" >สงขลา</option><option value="58" >สตูล</option><option value="59" >สมุทรปราการ</option><option value="60" >สมุทรสงคราม</option><option value="61" >สมุทรสาคร</option><option value="62" >สระแก้ว</option><option value="63" >สระบุรี</option><option value="64" >สิงห์บุรี</option><option value="65" >สุโขทัย</option><option value="66" >สุพรรณบุรี</option><option value="67" >สุราษฎร์ธานี</option><option value="68" >สุรินทร์</option><option value="69" >หนองคาย</option><option value="70" >หนองบัวลำภู</option><option value="73" >อ่างทอง</option><option value="74" >อำนาจเจริญ</option><option value="75" >อุดรธานี</option><option value="76" >อุตรดิตถ์</option><option value="78" >อุทัยธานี</option><option value="71" >อุบลราชธานี</option>
		</select>
		</div>
		<?php endif; ?>
		<?php if($field["name"] == "thaitheme_mata_location_district"): ?>
		<div id="district_box" class="select-data clear">
		<select id="district" name="district"><option value="0">เลือกอำเภอ</option></select>
		</div>
		<?php endif; ?>
            <?php if($field["type"] == "adverts_field_header"): ?>
            <?php else: ?>
            <label for="<?php esc_attr_e($field["name"]) ?>">
                <?php esc_html_e($field["label"]) ?>
                <?php if(adverts_field_has_validator($field, "is_required")): ?>
                <?php endif; ?>
            </label>
            <?php call_user_func( adverts_field_get_renderer($field), $field) ?>
            <?php endif; ?>
            <?php if(adverts_field_has_errors($field)): ?>
            <ul class="adverts-field-error-list">
                <?php foreach($field["error"] as $k => $v): ?>
                <li><?php esc_html_e($v) ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
<div class="adverts-checkbox_post">
	<input type="checkbox" name="checkbox" value="" required="required">  ยอมรับเงื่อนไข <a title="กฎกติกาการลงประกาศ" target="_blank" href="<?php echo home_url( '/' ); ?>?p=<?php global $thaitheme_option; echo $thaitheme_option['thaitheme_select_post_rules'];  ?>">กฎกติกาการลงประกาศ</a> 
</div>	
<div class="tt_btn_post">
<input type="submit" name="submit" value="<?php _e("ขั้นตอนถัดไป", "adverts") ?>" class="adverts-cancel-unload" />
</div>
</form>
</div>

