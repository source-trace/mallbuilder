<?php
include("includes/global.php");
//====================================
$sql="  TRUNCATE `mallbuilder_activity`;
TRUNCATE `mallbuilder_activity_product_list`;
TRUNCATE `mallbuilder_admin`;
TRUNCATE `mallbuilder_admin_group`;
TRUNCATE `mallbuilder_admin_operation_log`;
TRUNCATE `mallbuilder_advs`;
TRUNCATE `mallbuilder_advs_con`;
TRUNCATE `mallbuilder_album`;
TRUNCATE `mallbuilder_announcement`;
TRUNCATE `mallbuilder_auditing`;
TRUNCATE `mallbuilder_brand`;
TRUNCATE `mallbuilder_brand_cat`;
TRUNCATE `mallbuilder_comment`;
TRUNCATE `mallbuilder_contags`;
TRUNCATE `mallbuilder_cron`;
TRUNCATE `mallbuilder_custom_cat`;
TRUNCATE `mallbuilder_custom_service`;
TRUNCATE `mallbuilder_defind_1`;
TRUNCATE `mallbuilder_defind_2`;
TRUNCATE `mallbuilder_delivery_address`;
TRUNCATE `mallbuilder_district`;
TRUNCATE `mallbuilder_fast_mail`;
TRUNCATE `mallbuilder_feed`;
TRUNCATE `mallbuilder_filter_keyword`;
TRUNCATE `mallbuilder_logistics_temp`;
TRUNCATE `mallbuilder_logistics_temp_con`;
TRUNCATE `mallbuilder_mail_mod`;
TRUNCATE `mallbuilder_mail_record`;
TRUNCATE `mallbuilder_member`;
TRUNCATE `mallbuilder_message`;
TRUNCATE `mallbuilder_nav_menu`;
TRUNCATE `mallbuilder_news`;
TRUNCATE `mallbuilder_newscat`;
TRUNCATE `mallbuilder_news_data`;
TRUNCATE `mallbuilder_page_rec`;
TRUNCATE `mallbuilder_page_view`;
TRUNCATE `mallbuilder_payment_banks`;
TRUNCATE `mallbuilder_payment_card`;
TRUNCATE `mallbuilder_payment_cashflow`;
TRUNCATE `mallbuilder_payment_cashpickup`;
TRUNCATE `mallbuilder_payment_type`;
TRUNCATE `mallbuilder_payment_user`;
TRUNCATE `mallbuilder_points`;
TRUNCATE `mallbuilder_products`;
TRUNCATE `mallbuilder_product_cart`;
TRUNCATE `mallbuilder_product_cat`;
TRUNCATE `mallbuilder_product_comment`;
TRUNCATE `mallbuilder_product_delivery`;
TRUNCATE `mallbuilder_product_detail`;
TRUNCATE `mallbuilder_product_invoice`;
TRUNCATE `mallbuilder_product_order`;
TRUNCATE `mallbuilder_product_order_pro`;
TRUNCATE `mallbuilder_product_report`;
TRUNCATE `mallbuilder_product_report_subject`;
TRUNCATE `mallbuilder_product_setmeal`;
TRUNCATE `mallbuilder_property`;
TRUNCATE `mallbuilder_property_value`;
TRUNCATE `mallbuilder_property_value_bak`;
TRUNCATE `mallbuilder_property_value_template`;
TRUNCATE `mallbuilder_reg_vercode`;
TRUNCATE `mallbuilder_reserve_username`;
TRUNCATE `mallbuilder_return`;
TRUNCATE `mallbuilder_return_goods`;
TRUNCATE `mallbuilder_search_word`;
TRUNCATE `mallbuilder_shipping_address`;
TRUNCATE `mallbuilder_shop`;
TRUNCATE `mallbuilder_shop_cat`;
TRUNCATE `mallbuilder_shop_domin`;
TRUNCATE `mallbuilder_shop_earnest`;
TRUNCATE `mallbuilder_shop_grade`;
TRUNCATE `mallbuilder_shop_link`;
TRUNCATE `mallbuilder_shop_navigation`;
TRUNCATE `mallbuilder_shop_setting`;
TRUNCATE `mallbuilder_shop_template`;
TRUNCATE `mallbuilder_site_spread`;
TRUNCATE `mallbuilder_sns`;
TRUNCATE `mallbuilder_sns_comment`;
TRUNCATE `mallbuilder_sns_friend`;
TRUNCATE `mallbuilder_sns_shareproduct`;
TRUNCATE `mallbuilder_sns_shareproduct_info`;
TRUNCATE `mallbuilder_sns_shareshop`;
TRUNCATE `mallbuilder_stop_ip`;
TRUNCATE `mallbuilder_subscribe`;
TRUNCATE `mallbuilder_sub_domain`;
TRUNCATE `mallbuilder_tags`;
TRUNCATE `mallbuilder_talk`;
TRUNCATE `mallbuilder_tg`;
TRUNCATE `mallbuilder_tg_cat`;
TRUNCATE `mallbuilder_tg_order`;
TRUNCATE `mallbuilder_user_comment`;
TRUNCATE `mallbuilder_user_connected`;
TRUNCATE `mallbuilder_user_group`;
TRUNCATE `mallbuilder_user_read_rec`;
TRUNCATE `mallbuilder_vote`;
TRUNCATE `mallbuilder_web_con`;
TRUNCATE `mallbuilder_web_config`;
TRUNCATE `mallbuilder_web_con_group`;
TRUNCATE `mallbuilder_web_link`;
";
$sql_con=explode(";",$sql);
foreach($sql_con as $v)
{
	$str=str_replace('mallbuilder_',$config['table_pre'],$v);
	$db->query($str);
}
echo 'clear ok';
?>