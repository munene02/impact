<?php
	Class Validation{
		private $sql_key_words = array(
									"select","delete","update","drop","alter","insert",
									"SELECT","DELETE","UPDATE","DROP","ALERT","INSERT",
									);
		
		public function stripSqlKeyWords($parameter){
			return str_replace($this->sql_key_words,"",$parameter);
		}
		
		public function cleanInputs($parameter){
			$parameter = strtolower($parameter);
			$parameter = strip_tags($parameter);
			$parameter = preg_replace("@<script[^>]*>.+</script[^>]*>@i", "", $parameter);
			$parameter = preg_replace("@<style[^>]*>.+</style[^>]*>@i", "", $parameter);
			return $parameter;
		}
		
		public function checkIfEmail($email){
			return (bool)(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email));
		}
		
		public function checkIfAlpha($val)
    	{
        	$other_characters = array(".",",",":",";","'");
			$val = str_replace($other_characters,"",$val);
			$raw_name = explode(" ", $val);
			$error_count = 0;
			for($i=0;$i<=count($raw_name) - 1;$i++){
				if(!preg_match("/^([a-zA-Z])+$/i", $raw_name[$i])){
					$error_count += 1;
				}
			}
			if($error_count <= 0){
				return true;
			}else{
				return false;
			}
    	}
		
		public function checkIfAlphaNumberic($val){
			return (bool)preg_match("/^([a-zA-Z0-9])+$/i", $val);
		}
		
	    public function checkAlphanumeric($val)
	    {
	        return (bool)preg_match("/^([a-zA-Z0-9])+$/i", $val);
	    }
		
		public function checkBase64($val){
			return (bool)!preg_match('/[^a-zA-Z0-9\/\+=]/', $val);
		}
		
		public function	checkPhoneNumber($number, $lengths = null)
		{
		  	$phone_number = str_replace("+","",$number);
			if(!empty($phone_number) && preg_match('/^\(?[0-9]{3}\)?|[0-9]{3}[-. ]? [0-9]{3}[-. ]?[0-9]{4}$/', $phone_number)){
				return true;
			}else{
				return false;
			}
		}
		
		public function checkEmailDomain($email)
		{
		  return (bool)checkdnsrr(preg_replace('/^[^@]++@/', '', $email), 'MX');
		}
	}