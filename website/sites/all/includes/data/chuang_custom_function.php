<?php  
include_once('chuang_constant.php');

/***************Insert Company Profile Data****************/


function insertCompanyProfileData($data)
{
	global $user;
	$date = date("Y-m-d H:i:s");
	$id = db_insert('startup')->fields(array(
	'CompanyName' => addslashes($data['companyname']),
	'HighLevelPitch' => $data['highconceptpitch'],
	'WebSite'=> addslashes($data['companywebsite']),
	'Product'=> addslashes($data['product']['value']),
	'Location'=> addslashes($data['location']),
	'Markets'=> addslashes($data['markets']),
	'IsRecruiting'=> addslashes($data['recruiting']),
	'IsApplyingToIncubator'=> addslashes($data['applyingtoanincubator']),
	'TermsOfServiceAccepted'=> addslashes($data['termsofservice']),
	'created_date'=> $date,
	'modified_date'=> $date,
	'created_by'=> $user->uid,
	'modified_by'=> $user->uid,
	'created_ip'=> $_SERVER['REMOTE_ADDR'],
	'modified_ip'=> $_SERVER['REMOTE_ADDR'],
	))->execute();
	return $id;
}


function updateLogoName($filename,$dataId)
{
	global $user;
	$num_updated = db_update('startup')->fields(array('Logo' => $filename,))->condition('Id',$dataId,'=')->execute();
}


/**********Start Up Page Functionality**************************/

function startupPageComapnyListing()
{
	$query = db_select('startup', 's')
	  ->fields ('s', array(
					'Id',
	                'CompanyName',
	                'Logo',
	                'HighLevelPitch',
	            ));
	$results = $query->execute();
	$str = '<ul>';
	while($data = $results->fetchAssoc())
	$str .= '<li>'.$data['Id'].' '.$data['CompanyName'].' '.$data['HighLevelPitch'] .'</li>';
	return $str.'</ul>';
}





/************functions for get name & ext. of a doc**************/
function getExtension($str) 
{
	$i = strrpos($str,".");
	if (!$i) { return ""; }
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	return $ext;
}
function getFilename($str) 
{
	$i = strrpos($str,".");
	if (!$i) { return ""; }
	$nam = substr($str,0,$i);
	return $nam;
}
// Clean URLS
function cleanFileName($string)
{
	$replaceChars = array(",", " ", "'", "\"", "&", "#", "~", "@", "$", "^", "*", "(", ")", "+", ":", ";", "?", "<", ">", "/", ".", "[", "]", "{", "}", "-", "!", "%", "=");
	$string = str_replace($replaceChars, "_", $string);	
	return $string;
}
	
	// GET RANDOM  STRING
function RandomString($length)
{
	if(!is_int($length)||$length<1)
	{
		trigger_error('Invalid length for random string');
		exit();
	}
	$chars="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$randstring='';
	$str = '';
	$maxvalue=strlen($chars)-1;
	
	for($i=0;$i<$length;$i++) $randstring.=substr($chars,rand(0,$maxvalue),1);
	$str = strtoupper(substr(md5($randstring),1,$length));
	return $str;
}






?>