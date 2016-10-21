<?php
/**
 * Created by PhpStorm.
 * User: mrosa
 * Date: 10/21/2016
 * Time: 3:06 PM
 */
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
 * accessor method for message content
 *
 * @return string value of message content
 **/
public function getMessageContent() {
	return($this->messageContent);
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