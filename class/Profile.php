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
}