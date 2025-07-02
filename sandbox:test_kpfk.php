<?php
//require "nu_confessor_api.php";
$capi_host = "https://confessor.kpfk.org";
date_default_timezone_set("America/Los_Angeles");

$my_log_file_name = "testkpfk.out";
$now = time();

if(!defined("confessor_log_stuff"))
	define("confessor_log_stuff",1);

$confd = 0;

if(confessor_log_stuff)
{
	error_reporting(E_ALL);
	ini_set("display_errors",1);
	$confd = fopen($my_log_file_name,"w");
	if($confd)
	{
		fwrite($confd,"-------------------------- " . date("r") . " --------------------\n");
		@chmod($my_log_file_name,0666);
	}
}
if(!defined("confd"))
	define("confd",$confd);

function confessor_get_nowary($json_flag = 0)
{
	global $capi_host;

	$buf = file_get_contents("$capi_host/_nu_do_api.php?req=nowary" . ($json_flag ? "&json=1" : ''));
	if($json_flag)
		$ary = $buf;
	else
		$ary = unserialize(base64_decode($buf));
	return($ary);
}

function archive_get_filnam($idkey,$num = 0,$json_flag = 0)
{
	global $capi_host;

	$ary = [];

	$buf = file_get_contents("$capi_host/_nu_do_api.php?req=fil&id=$idkey&num=$num" . ($json_flag ? "&json=1" : ''));
	if(!empty($buf))
	{
		if($json_flag)
			$ary = $buf;
		else
			$ary = unserialize(base64_decode($buf));
	}
	return($ary);
}


$str = confessor_get_nowary(true);
$ary = json_decode($str,true);
print "ary=" . print_r($ary,true) . "\n";
print $str . "\n";
$idkey = $ary["current"]["sh_altid"];
print $idkey ."\n";
$str = archive_get_filnam($idkey,0,1);
print $str . "\n";
$ary = json_decode($str,true);
print "ary=" . print_r($ary,true) . "\n";

?>

