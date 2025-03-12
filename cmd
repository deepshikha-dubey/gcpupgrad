 mysql --ssl-mode=DISABLED --host=10.11.64.4 --user=root --password

USE mydb;
SHOW TABLES;
DESCRIBE users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);
INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com');
