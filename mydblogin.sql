create database users;
drop database users ;
use users;
CREATE TABLE loginn (
  id int primary key auto_increment NOT NULL,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO loginn (username, email, password) VALUES
('ssssss', 'ajkfhskka@gmail.com', '7f65dk5ff758');

 select * from loginn;