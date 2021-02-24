<?php


/**

    # S Database Explorer (SDE)
    # Version 2.0.0
    # Created: August 14, 2015 (1.0.0)
    # Modified: October 1, 2020 (2.0.0)
    # Author: Md. Ashraful Alam Shemul (AAShemul)
    # Powered By: S Technologies Limited - STechBD.Net
    # Email: projects@stechbd.net
    # Website: Projects.STechBD.Net/SDE

*/


if(extension_loaded('mysqli'))
{
	class SDE
	{
		public $link = null;
		public $prefix = null;
		public $result = null;
		public $array = null;

		function __construct($db_host, $db_user, $db_pass, $db_name, $pref = null)
		{
			$this->link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			$this->prefix = $pref;
			
			if($this->link)
			{
				return true;
			}
			else
			{
				die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
			}
		}
		
		public function select($c, $t, $w = null, $l = null)
		{
			if(isset($w))
			{
				$w = ' WHERE '.$w;
			}
			
			if(isset($l))
			{
				$l = ' LIMIT '.$l;
			}
			
			$result = mysqli_query($this->link, 'SELECT '.$c.' FROM '.$this->prefix.$t.$w.$l);
			$this->result = $result;

			if(mysqli_num_rows($result) > 0)

				while($res = mysqli_fetch_object($result))
				
					$arr[] = $res;
				
			if($arr) 
			{
			    return json_decode(json_encode($arr), true);
			    $this->array = json_decode(json_encode($arr), true);
			}
			else
			{
			    return false;
			}
		}
		
		public function data()
		{
		    return mysqli_fetch_assoc($this->result);
		}
		
		public function getRow($q)
		{
			$result = mysqli_query($this->link, $q);

			if(mysqli_num_rows($result) == 1)

			$arr = mysqli_fetch_object($result);
							
			if($arr) return $arr;
			
			return false;
		}
		
		public function count()
		{
			return mysqli_num_rows($this->result);
		}
		
		public function qCount($q)
		{
			$result = mysqli_query($this->link, $q);
			return mysqli_num_rows($result);
		}

		public function query($q)
		{
			return mysqli_query($this->link, $q);
		}

		function escape($str)
		{
			return mysqli_real_escape_string($this->link, $str);
		}
		
		function insert($t, $c)
		{

			if(mysqli_query($this->link, $q))
				return mysqli_insert_id($this->link); 
			return false;
		}
		
		function insert_array($table, $array)
		{
			$q = "INSERT INTO `$table`";
			$q .=" (`".implode("`,`",array_keys($array))."`) ";
			$q .=" VALUES ('".implode("','",array_values($array))."') ";

			if(mysqli_query($this->link, $q))
				return mysqli_insert_id($this->link);
			return false;
		}
	}
}
else
{
	echo 'MySQLi required';
}


?>
