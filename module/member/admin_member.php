<?php
include_once("$config[webroot]/module/member/includes/plugin_member_class.php");
$member=new member();
//===================================================================

if($_POST['submit']=='edit')
{	
	$member->update_member($_POST['uid']);
	$admin->msg("main.php?m=member&s=admin_member");
}
if($_POST['submit']=='password')
{	
	$flag=$member->resetpass($buid);
	if($flag=='0')
		$admin->msg("main.php?m=member&s=admin_member&type=password",'参数错误','failure');
	elseif($flag=='1')
		$admin->msg("main.php?m=member&s=admin_member&type=password",'密码错误','failure');
	elseif($flag=='2')
		$admin->msg("main.php?m=member&s=admin_member&type=password",'新密码两次输入不正确','failure');
	else
		$admin->msg("main.php?m=member&s=admin_member&type=password");
}
if($_POST['submit']=='mail')
{	
	$flag=$member->resetemail($buid);
	if($flag=='0')
		$admin->msg("main.php?m=member&s=admin_member&type=mail",'参数错误','failure');
	elseif($flag=='1')
		$admin->msg("main.php?m=member&s=admin_member&type=mail",'密码错误','failure');
	else
		$admin->msg("main.php?m=member&s=admin_member&type=mail");
}
include_once("lang/".$config['language']."/company_type_config.php");
$tpl->assign("de",$de=$member->get_member_detail($_GET['editid']));
$tpl->assign("prov",GetDistrict());

if(!empty($_GET['guid']))
{
	include_once('uc_client/client.php');
	$tpl->assign("slogin",uc_user_synlogin($_GET['guid']));
}
//====================================================================
$tpl->assign("config",$config);
$tpl->assign("lang",$lang);
$output=tplfetch("admin_member.htm");
?>