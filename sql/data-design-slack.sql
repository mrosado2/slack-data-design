DROP TABLE IF EXISTS message;
DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userName VARCHAR(32) NOT NULL,
	UNIQUE (userName),
	INDEX (userId),
	PRIMARY KEY (userId)
);

CREATE TABLE message (
	messageId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	messageTime DATETIME NOT NULL,
	messageSenderId INT UNSIGNED NOT NULL,
	messageReceipientId INT UNSIGNED NOT NULL,
	messageContent VARCHAR(10000),
	INDEX (messageId),
	INDEX (messageSenderId),
	INDEX (messageReceipientId),
	FOREIGN KEY (messageSenderId) REFERENCES user(userId),
	FOREIGN KEY (messageReceipientId) REFERENCES user (userId),
	PRIMARY KEY (messageId)
);
