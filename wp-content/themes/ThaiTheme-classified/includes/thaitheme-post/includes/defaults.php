<?php
if ( ! defined( 'ABSPATH' ) ) exit;
Adverts::instance()->set("form", array(
    "name" => "post",
    "action" => "",
    "field" => array(
        array(
            "name" => "_post_id",
            "type" => "adverts_field_hidden",
            "order" => 10,
            "label" => ""
        ),
        array(
            "name" => "_adverts_action",
            "type" => "adverts_field_hidden",
            "order" => 10,
            "label" => ""
        ),
        array(
            "name" => "_contact_information",
            "type" => "adverts_field_header",
            "order" => 10,
             "label" => __( 'ข้อมูลผู้ลงประกาศ', 'adverts' ),
        ),
        array(
            "name" => "_adverts_account",
            "type" => "adverts_field_account",
            "order" => 10,
            "label" => __( "", "adverts" ),
        ),
        
        array(
            "name" => "post_title",
            "type" => "adverts_field_text",
            "order" => 20,
            "label" => __( "ตั้งชื่อสินค้าที่คุณต้องการลงขาย", "adverts" ),
			"is_required" => true,
            "validator" => array(
                array( "name"=> "is_required_title" )
            )
        ),
        array(
            "name" => "category",
            "type" => "adverts_field_select",
            "order" => 20,
            "label" => __("เลือกหมวดหมู่ให้ตรงกับสินค้า", "adverts"),
            "options" => array(),
			"is_required" => true,
            "validator" => array( 
                array( "name" => "is_required_cat" ),
            ),
            "options_callback" => "adverts_taxonomies"
        ),
		array(
            "name" => "adverts_price",
            "type" => "adverts_field_text",
            "order" => 20,
            "label" => __("ระบุราคาที่เหมาะสม", "adverts"),
            "description" => "",
            "attr" => array(
                "key" => "value"
            ),
            "filter" => array(
                array( "name" => "money" )
            ),
			"is_required" => true,
            "validator" => array( 
                array( "name" => "is_required_price" ),
            ),
        ),
        array(
            "name" => "gallery",
            "type" => "adverts_field_gallery",
            "order" => 20,
			"max_choices" => 1,
            "label" => __( "รูปภาพสินค้า", "adverts" )
        ),
        array(
            "name" => "post_content",
            "type" => "adverts_field_textarea",
            "order" => 20,
            "label" => __( "ใส่รายละเอียดสินค้าให้ครบถ้วน", "adverts" ),
			"is_required" => true,
            "validator" => array(
                array( "name"=> "is_required_content" )
            ),
            "mode" => "tinymce-mini"
        ),
		array(
            "name" => "adverts_person",
            "type" => "adverts_field_text",
            "order" => 20,
             "label" => __( "ชื่อผู้ลงประกาศ", "adverts" ),
            "is_required" => true,
            "validator" => array( 
                array( "name" => "is_required_name" ),
            )
        ),
        
       
		 array(
            "name" => "adverts_email",
            "type" => "adverts_field_text",
            "order" => 20,
            "label" => __( "อีเมล์", "adverts" ),
            "is_required" => true,
            "validator" => array( 
                array( "name" => "is_required" ),
                array( "name" => "is_email" )
            )
        ),
      
		array(
           "name" => "thaitheme_mata_location_province",
            "type" => "adverts_field_text",
			"order" => 20,
           "label" => __( "ระบุพื้นที่ของสินค้า", "adverts" ),
			"is_required" => true,
            "validator" => array( 
                array( "name" => "is_required_loca" ),
            )
        ),
		
		array(
           "name" => "thaitheme_mata_location_district",
            "type" => "adverts_field_text",
			"order" => 20,
           "label" => __( "เขต / อำเภอ", "adverts" )
        ),
		 array(
            "name" => "adverts_phone",
            "type" => "adverts_field_text_phone",
            "order" => 20,
             "label" => __( "เบอร์ติดต่อ", "adverts"),
			 "is_required" => true,
             "validator" => array( 
                 array( "name"=> "string_length" ),
				 array( "name"=> "string_length2" )
            )
        ),
    )
));



// Register <span> input
/** @see adverts_field_label() */
adverts_form_add_field("adverts_field_label", array(
    "renderer" => "adverts_field_label",
    "callback_save" => null,
    "callback_bind" => null,
));

// Register <input type="hidden" /> input
/** @see adverts_field_hidden() */
adverts_form_add_field("adverts_field_hidden", array(
    "renderer" => "adverts_field_hidden",
    "callback_save" => "adverts_save_single",
    "callback_bind" => "adverts_bind_single",
));

// Register <input type="text" /> input
/** @see adverts_field_text() */
adverts_form_add_field("adverts_field_text", array(
    "renderer" => "adverts_field_text",
    "callback_save" => "adverts_save_single",
    "callback_bind" => "adverts_bind_single",
));
adverts_form_add_field("adverts_field_text_phone", array(
    "renderer" => "adverts_field_text_phone",
    "callback_save" => "adverts_save_single",
    "callback_bind" => "adverts_bind_single",
));
// Register <textarea></textarea> input
/** @see adverts_field_textarea() */
adverts_form_add_field("adverts_field_textarea", array(
    "renderer" => "adverts_field_textarea",
    "callback_save" => "adverts_save_single",
    "callback_bind" => "adverts_bind_single",
));

// Register <select>...</select> input
/** @see adverts_field_select() */
adverts_form_add_field("adverts_field_select", array(
    "renderer" => "adverts_field_select",
    "callback_save" => "adverts_save_multi",
    "callback_bind" => "adverts_bind_multi",
));


// Register <input type="checkbox" /> input
/** @see adverts_field_checkbox() */
adverts_form_add_field("adverts_field_checkbox", array(
    "renderer" => "adverts_field_checkbox",
    "callback_save" => "adverts_save_multi",
    "callback_bind" => "adverts_bind_multi",
));

// Register <input type="radio" /> input
/** @see adverts_field_radio() */
adverts_form_add_field("adverts_field_radio", array(
    "renderer" => "adverts_field_radio",
    "callback_save" => "adverts_save_single",
    "callback_bind" => "adverts_bind_single",
));

// Register custom image upload field
/** @see adverts_field_gallery() */ 
adverts_form_add_field("adverts_field_gallery", array(
    "renderer" => "adverts_field_gallery",
    "callback_save" => null,
    "callback_bind" => null,
));

// Register <input type="hidden" /> input
/** @see adverts_field_account() */
adverts_form_add_field("adverts_field_account", array(
    "renderer" => "adverts_field_account",
    "callback_save" => "adverts_save_multi",
    "callback_bind" => "adverts_bind_multi",
));

/* REGISTER FORM FILTERS */

// Register money filter (text input with currency validation)
/** @see adverts_filter_money() */
adverts_form_add_filter("money", array(
    "callback" => "adverts_filter_money",
	
));

/* REGISTER FORM VALIDATORS */

// Register "is required" validator
/** @see adverts_is_required() */
adverts_form_add_validator("is_required", array(
    "callback" => "adverts_is_required",
    "label" => __( "Is Required", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุอีเมล์", "adverts" ),
    "on_failure" => "break",
    "validate_empty" => true
));
adverts_form_add_validator("is_required_cat", array(
    "callback" => "adverts_is_required_cat",
    "label" => __( "Is Required", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุหมวดหมู่", "adverts" ),
    "on_failure" => "break",
    "validate_empty" => true
));
adverts_form_add_validator("is_required_loca", array(
    "callback" => "adverts_is_required_loca",
    "label" => __( "Is Required", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุจังหวัด", "adverts" ),
    "on_failure" => "break",
    "validate_empty" => true
));
adverts_form_add_validator("is_required_price", array(
    "callback" => "adverts_is_required_price",
    "label" => __( "Is Required", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุราคา", "adverts" ),
    "on_failure" => "break",
    "validate_empty" => true
));
adverts_form_add_validator("is_required_content", array(
    "callback" => "adverts_is_required_content",
    "label" => __( "Is Required", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุรายละเอียดสินค้า", "adverts" ),
    "on_failure" => "break",
    "validate_empty" => true
));
adverts_form_add_validator("is_required_name", array(
    "callback" => "adverts_is_required_name",
    "label" => __( "Is Required", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุชื่อผู้ลงประกาศ", "adverts" ),
    "on_failure" => "break",
    "validate_empty" => true
));
adverts_form_add_validator("is_required_title", array(
    "callback" => "adverts_is_required_title",
    "label" => __( "Is Required", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุหัวข้อ", "adverts" ),
    "on_failure" => "break",
    "validate_empty" => true
));
// Register "is email" validator
/** @see adverts_is_email() */
adverts_form_add_validator("is_email", array(
    "callback" => "adverts_is_email",
    "label" => __( "Email", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุอีเมลล์ให้ถูกรูปแบบ", "adverts" ),
    "validate_empty" => false
));

// Register "is integer" validator
/** @see adverts_is_integer() */
adverts_form_add_validator("is_integer", array(
    "callback" => "adverts_is_integer",
    "label" => __( "Is Integer", "adverts" ),
    "params" => array(),
    "default_error" => __( "Provided value is not an integer.", "adverts" ),
    "validate_empty" => false
));

// Register "string length" validator
/** @see adverts_string_length() */
adverts_form_add_validator("string_length", array(
    "callback" => "adverts_string_length",
    "label" => __( "String Length", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุเบอร์โทรศัพท์ให้ถูกรูปแบบ", "adverts" ),
    "validate_empty" => false
));

adverts_form_add_validator("string_length2", array(
    "callback" => "adverts_string_length2",
    "label" => __( "String Length", "adverts" ),
    "params" => array(),
    "default_error" => __( "กรุณาระบุเบอร์โทรศัพท์", "adverts" ),
    "validate_empty" => true
));