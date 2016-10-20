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
private $senderProfileId;
/**
 * id for the userPicture
 * @var int $userPicture;
 **/
// CONSTRUCTOR GOES HERE LATER

// now, write all your accessor (getter) methods
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
	 * accessor method for user profile id
	 *
	 * @return int value of user profile id
	 **/
	public function getUserProfileId() {
		 return($this->userProfileId);
	}

	/**
	 * mutator method for user profile id
	 *
	 * @param int $newUserProfileId new value of user profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 **/
	public function setUserProfileId(int $newUserProfileId) {
			// verify the profile id is positive
		if($newUserProfileId <= 0) {
			throw(new \RangeException("user profile id is not positive"));
		}

		// convert and store the profile id $this->userProfileId = $newUserProfileId;
		}
	}
}