<?php
/**
* Small Cross Section of Slack User
* This user class could be considered an example of what attributes like Slack could store to write, sends access direct
* message
*
* @author Maria Rosado <mrosado2@cnm.edu>
* @version 1.0.0
**/

class User {
	private $userId;
	/**
* id for this User; this is the primary key
* @var int $userId
**/
private $userName;
/**
* name of the User; this is a foreign key
* @var int $userName
**/

/**
 * constructor
 * for this-> user
 * @param int|null $newUserId id this-> user
 * @param string newUserName for this-> user
 * @throws InvalidArgumentException if data type are not valid
 * @throws RangeException if data values are our of bounds
 * @throws Exception if some data Exception is thrown
 *
 **/

public function __construct($newUserId, $newUserName) {
	try {
		$this->setUserId($newUserId);
		$this->setUserName($newUserName);

	} catch(InvalidArgumentException $invalidArgument) {
		//throw the exception to the caller
		throw (new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
	} catch(RangeException $range) {
		//rethrow the exception to the caller
		throw(new RangeException($range->getMessage(), 0, $range));

	}  catch(Exception $exception) {
		// rethrow the exception to the caller
		throw (new Exception(($exception->getMessage(), 0, $exception));
	}

}


	/**
 * accessor method for user id
 *
 * @return int/null value of user id
 **/
public function getUserId() {

	return($this->userId);
}
/**
 * mutator method for user id
 *
 * @param int/null $newUserId new value of user id
 * @throws \RangeException if $newUserId is not positive
 * @throws \TypeError if $newUserId is not an integer
 **/
	public function setUserId(int $newUserId = null) {
		// base case: if the user id is null, this a new user without a mySQL assigned id (yet)
		if($newUserId === null){
			$this->userId = null;
			return;
		}
		// verify the user id is positive
		if($newUserId <= 0){
			throw(new \RangeException("user id is not positive"));
		}

		// convert and store the user id
		$this->userId = $newUserId;
	}


	/**
	 * accessor method for user name id
	 *
	 * @return int value of user name id
	 **/
	public function getUserName() {
		return($this->userName);
	}

	/**
	 * mutator method for user name id
	 *
	 * @param string $newUserName new value of user name
	 * @throws \RangeException if $newUserName is not positive
	 * @throws \TypeError if $newUserName is not a string
	 **/public function setUserName(string $newUserName) {
		// verify the name is a string
		$newUserName = trim($newUserName);
		$newUserName = filter_var($newUserName,FILTER_SANATIZE_STRING);
		if(strlen($newUserName) >32) {
			throw(new RangeException("userName to long"));
		}


		// convert and store
		$this->userName = $newUserName;
	}

	/**
	 * inserts this Misquote into mySQL
	 *
	 * @param PDO $pdo PDO connection  object
	 * @throws PDOException when mySQ related occur
	  **/
	public function insert(PDO $pdo) {
		// enforce the user id is null
		if($this->userId !== null) {
			throw (new PDOException("not a newUser"));
		}

		// create quety template
		$query = "INSERT INTO user(userName) VALUES(:userName)";
		$statement = $pdo->prepare($query);

		//bind the member variables to the place holders in the template
		$parameters = ["userName" => $this->userName];
		$statement->excecute($parameters);

		//update the null user with what SQL just gave us
		$this->userId = intval($pdo->lastInsertId());
	}


	/**
	 * gets the UserId by user id
	 *
	 * @param PDO $pdo PDO connection object
	 * @param int $userId userId to search for
	 *@return userId|null UserId found or null if not found
	 *@throws PDOExceptionwhen mySQL related errors occur
	 */
public static function getUserByUserId(PDO, $pdo, $userId) {
	// sanitize the userid before searching
	$userId = filter_var($userId,FILTER_VALIDATE_INT);
	if(userId === false){
		throw (new PDOException("userId is not integer"));
	}

	if($userId <= 0) {
		throw(new PDOException("userId is not positive"));
	}

	// create query template
	$query = "SELECT userId, userName FROM user WHERE userId = :userId";
	$statement = $pdo->prepare($query);

	// bind the userid to the place in the template
	$parameters = ["userId" => $userId];
	$statement -> excecute($parameters);

	// grab the userId from mySQL
	try {
	$user=null;
		@$statement -> setfetchMode (PDO::FETCH_ASSOC);
		$row = $statement->fetch();
		if($row !== false) {
			$user = new User($row["userId"], $row["userName"]);
		}
	} catch (Exception $exception) {
		// if the row couldnt be converted rethrow the error
		throw (new PDOException($exception->getMessage(), 0, $exception));
	}
	return(user);
}
}