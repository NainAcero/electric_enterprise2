<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("bcrpyeszazfgqo2x2s7b-mysql.services.clever-cloud.com", "umecbng9usujxe2v", "rjqUNYc2cmUzQGKNPuTL", "bcrpyeszazfgqo2x2s7b");
		return $this->con;
	}
}

?>