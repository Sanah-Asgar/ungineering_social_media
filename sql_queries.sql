SHOW DATABASES;
CREATE DATABASE social_media;
use social_media;
CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    college VARCHAR(255),
    phone_no INT,
    PRIMARY KEY(id)
);
    
CREATE TABLE posts(
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    status VARCHAR(255) NOT NULL,
    time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
);
    
