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

	/**
	 * accessor method for user name id
	 *
	 * @return int value of user name id
	 **/
	public function getUserNameId() {
		return($this->userNameId);
	}

	/**
	 * mutator method for user name id
	 *
	 * @param int $newUserNameId new value of user name id
	 * @throws \RangeException if $newUserNameId is not positive
	 * @throws \TypeError if $newUserNameId is not an integer
	 **/
	public function setUserNameId(int $newUserNameId) {
		// verify the name id is positive
		if($newUserNameId <= 0) {
			throw(new \RangeException("user name id is not positive"));
		}

		// convert and store the name id $this->userNameId = $newUserNameId;
	}
		/**
		 * accessor method for message content
		 *
		 * @return string value of message content
		 **/
		public function getMessageContent() {
			return($this->messageContent);
	}
	/**
	 * _mutator method for message content
	 *
	 * @param string $newMessageContent new value of message content
	 * @throws \InvalidArgumentException if $newMessageContent is not a string or insecure
	 * @throws \RangeException if $newMessageContent is > 140 characters
	 * @throws \TypeError if $newMessageContent is not a string
	 **/
	 public function setMessageContent(string $newMessageContent) {
	 		// verify the message content is secure
		 $newMessageContent = trim($newMessageContent);
		 $newMessageContent = filter_var($newMessageContent, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		 IF(empty($newMessageContent) === true) {
		 		throw(new \InvalidArgumentException("message content is empty or insecure"));
		 }

		 // verify the message content will fit in the database
		 if(strlen($newMessageContent) > 140) {
			 throw(new \RangeException("message content too large"));
		 }

		 // store the message content
		 $this->MessageContent = $newMessageContent;
	 }

	 /**
	  * accessor method for message date
	  *
	  * @return \DateTime value of message date
	  **/
	 public function getMessageDate() {
	 		return($this->messageDate);
	 }

	 /**
	  * mutator method for message date
	  *
	  * @param \DateTime/string/null $newMessageDate message date as a DateTime object or string (or null to load the
	  * current time)
	  * @throws \InvalidArgumentException if $newMessageDate is not valid object or string
	  * @throws \RangeException if $newMessageDate is a date that does not exist
	  **/
	 public function setMessageDate ($newMessageDate = null) {
	 		// base case: if the date is null, use the current date and time
		 	if($newMessageDate === null) {
		 		$this->MessageDate = new \DateTime();
				return;
			}

			// store the message date
		 try {
		 	$newMessageDate = self::validateDateTime($newMessageDate);
		 } catch(\InvalidArgumentException $invalidArgument)
		 {
		 	throw(new$ \InvalidArgumentException( $invalidArgument->getMessage(), 0, $invalidArgument));
		 } catch(\RangeException $range) {
		 	throw(new \RangeException($range->getMessage(), 0, $range));
		 }
		 $this->messageDate = $newMessageDate;
	 }
}