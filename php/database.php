<?php
	define("CONFIG", "conf.ini");

	class database extends PDO{

		function __construct($database="muscleboy", $server = "myDB"){
			$settings = parse_ini_file(CONFIG, TRUE);
			if(!$settings){
				throw new Exception("Error Processing Request".CONFIG, 1);
			}
			$dsn = $settings[$server]["driver"].':host='.$settings[$server]["host"].';dbname='.$database;
            parent::__construct($dsn,$settings[$server]["user"],$settings[$server]["password"]);
		}
	}
?>