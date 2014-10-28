<?php
	require_once 'database.php';

	class info extends database{

		private $database;

		function __construct(){
			$this->database = new database();
		}

		function createNewUser($username, $email, $password){
			try{
				if($this->checkUser($username) && $this->checkEmail($email)){
					//$hashedpass=password_hash($password, PASSWORD_BCRYPT);
					$hashedpass = password_hash($password, PASSWORD_DEFAULT);
					$statement = "INSERT INTO `player` VALUES (:username, :email, :password, DEFAULT, DEFAULT, DEFAULT)";
					$query = $this->database->prepare($statement);
					$query->bindParam(':username',$username, PDO::PARAM_STR);
					$query->bindParam(':email',$email, PDO::PARAM_STR);
					$query->bindParam(':password',$hashedpass, PDO::PARAM_STR);

					$query->execute();	
					if($query){
						//echo $password;
						echo "User registered succesfully";
					}
					else{
						throw new Exception("Sorry, something went wrong", 1);
					}
				}
				else{
					echo "Username or e-mail already exists";
				}
				
			}
			catch(Exception $e){
				echo json_encode(array(
			        'error' => array(
			            'msg' => $e->getMessage(),
			            'code' => $e->getCode(),
			        ),
	    		));
			}
		}

		function checkEmail($email){
			try{
				$statement = "SELECT `email` FROM `player` WHERE email = :email";
				$query = $this->database->prepare($statement);
				$query->bindParam(':email',$email, PDO::PARAM_STR);
				$query->execute();
				$result = $query->fetchAll(PDO::FETCH_ASSOC);

				if(count($result) == 0){
					return true;
				}
				else if(count($result) != 0){
					return false;
				}
				else{
					throw new Exception("Sorry, something went wrong", 1);
				}

			}
			catch(Exception $e){
				echo json_encode(array(
			        'error' => array(
			            'msg' => $e->getMessage(),
			            'code' => $e->getCode(),
			        ),
	    		));
			}
		}		

		function checkUser($username){
			try{
				$statement = "SELECT `username` FROM `player` WHERE username = :user";
				$query = $this->database->prepare($statement);
				$query->bindParam(':user',$username, PDO::PARAM_STR);
				$query->execute();
				$result = $query->fetchAll(PDO::FETCH_ASSOC);
				if(count($result) == 0){
					return true;
				}
				else if(count($result) != 0){
					return false;
				}
				else{
					throw new Exception("Sorry, something went wrong", 1);
				}

			}
			catch(Exception $e){
				echo json_encode(array(
			        'error' => array(
			            'msg' => $e->getMessage(),
			            'code' => $e->getCode(),
			        ),
	    		));
			}
		}

		function login($username, $password){
			try{
				$statement = "SELECT `username`, `password` FROM `player` WHERE `username` = :user";
				$query = $this->database->prepare($statement);
				$query->bindParam(':user', $username, PDO::PARAM_STR);
				$query->execute();
				$result = $query->fetchAll(PDO::FETCH_ASSOC)[0];
				//echo $result["password"]."<br>". strlen($result["password"])."<br>";
				//$pa =password_hash($password, PASSWORD_DEFAULT);
				//echo $pa."<br>".strlen($pa)."<br>";
				//var_dump(password_verify($password, $pa));

				//$ispass = password_verify($password, $result['password']);
				//var_dump($ispass);
				if(password_verify($password, $result['password'])){
					//echo "Success<br>";
					//$this->loadPlayer($username);
					return true;
				}
				else{
					//echo "Not Success<br>";
					throw new Exception("Sorry, something went wrong", 1);
					return false;
				}
			}
			catch(Exception $e){
				echo json_encode(array(
			        'error' => array(
			            'msg' => $e->getMessage(),
			            'code' => $e->getCode(),
			        ),
	    		));
			}
		}


		function loadPlayer($username){
			$statement = "SELECT `nivel`, `characterstate` FROM `player` WHERE `username` = :user";
			$query = $this->database->prepare($statement);
			$query->bindParam(':user', $username, PDO::PARAM_STR);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC)[0];
			echo json_encode($result);
		}
	}
?>