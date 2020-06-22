CREATE TABLE `songs` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar (100) NOT NULL,
  `genre` varchar (100) NOT NULL,
  `location` varchar (100) NOT NULL,
  `email` varchar (100) NOT NULL,
  `age` int(10) NOT NULL,
  `favsong` varchar (100) NOT NULL,
  PRIMARY KEY (user_id)
);