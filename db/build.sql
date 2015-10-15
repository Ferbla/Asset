/*
* Database Idea Version 1
*
* Computer Table
* Computer <-> User table
* User Table
* Product Table
* Product <-> User Table
*/

CREATE DATABASE assets;

USE assets;

CREATE TABLE computer(
  id INT AUTO_INCREMENT,
  os VARCHAR(50),
  name VARCHAR(50),

  PRIMARY KEY(id)
);

CREATE TABLE user(
  id INT AUTO_INCREMENT,
  firstName VARCHAR(50),
  lastName VARCHAR(50),
  email VARCHAR(50),
  username VARCHAR(50),
  password VARCHAR(250), /* will hash the password or something */

  PRIMARY KEY (id)
);

CREATE TABLE product(
  id INT AUTO_INCREMENT,
  prod_name VARCHAR(50),
  prod_key VARCHAR(50),

  PRIMARY KEY (id)
);

CREATE TABLE pvt_comp_user(
  comp_id INT,
  user_id INT,

  FOREIGN KEY (comp_id) REFERENCES computer(id),
  FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE pvt_prod_user(
  prod_id INT,
  user_id INT,

  FOREIGN KEY (prod_id) REFERENCES product(id),
  FOREIGN KEY (user_id) REFERENCES user(id)
);
