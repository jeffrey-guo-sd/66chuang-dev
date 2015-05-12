<?php  
include_once('chuang_constant.php');
include_once('login_data.php');

/***************Insert Company Profile Data****************/


function insertCompanyProfileData($data)
{
	//echo '<pre>'; print_r($data); die();
	global $user;
	$date = date("Y-m-d H:i:s");
	$id = db_insert('chuang_startup')->fields(array(
	'CompanyName' => addslashes($data['companyname']),
	'HighLevelPitch' => $data['highconceptpitch'],
	'WebSite'=> addslashes($data['companywebsite']),
	'Product'=> addslashes($data['product']),
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
	$startup_id = db_insert('chuang_user_startup')->fields(array(
		'user_id' => $user->uid,
		'startup_id' => $id,
	))->execute();
	return $id;
}

function insertUserProfileData($data)
{
	//echo '<pre>'; print_r($data); die();
	$date = date("Y-m-d H:i:s");
	$id = db_insert('chuang_user')->fields(array(
			'name' => $data['name'],
			'username' => $data['username'],
			'drupal_user_id'=> $data['uid'],
			'created_date'=> $date,
			'modified_date'=> $date,
			'created_by'=> $data['uid'],
			'modified_by'=> $data['uid'],
			'created_ip'=> $_SERVER['REMOTE_ADDR'],
			'modified_ip'=> $_SERVER['REMOTE_ADDR'],
			))->execute();
	return $id;
}
function updateLogoName($filename,$dataId,$productfilename)
{
	global $user;
	$num_updated = db_update('chuang_startup')->fields(array('Logo' => $filename,'productimage' => $productfilename,))->condition('Id',$dataId,'=')->execute();
}
function updateProfileImage($filename,$dataId)
{
	global $user;
	$num_updated = db_update('chuang_user')->fields(array('profile_image' => $filename))->condition('drupal_user_id',$dataId,'=')->execute();
}

/**********Start Up Page Functionality**************************/

function startupPageComapnyListing()
{
	$query = db_select('chuang_startup', 's')
	  ->fields ('s', array(
					'Id',
	                'CompanyName',
	                'Logo',
	                'HighLevelPitch',
	            ));
	$results = $query->execute();
	$str = '<ul>';
	while($data = $results->fetchAssoc())
	$str .= '<li>'.$data['Id'].' '.$data['CompanyName'].' '.$data[''] .' <img src="data:image/jpeg;base64,'.base64_encode( $result['Logo'] ).'"/></li>';
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

function get_company_followers_count($sid){
	 $result = db_select('chuang_follow', 's')
                ->fields('s')
                ->condition('to_id', $sid)
                ->execute()
                ->fetchAll();
    if(count($result) > 0){
    	return count($result);
    }
    else{
    	return 0;
    }
}
function get_user_following_count($uid){
	 $result = db_select('chuang_follow', 's')
                ->fields('s')
                ->condition('from_id', $uid)
                ->execute()
                ->fetchAll();
    if(count($result) > 0){
    	return count($result);
    }
    else{
    	return 0;
    }
}
function get_user_followers_count($uid){
	 $result = db_select('chuang_follow', 's')
                ->fields('s')
                ->condition('to_id', $uid)
                ->execute()
                ->fetchAll();
    if(count($result) > 0){
    	return count($result);
    }
    else{
    	return 0;
    }
}







?>