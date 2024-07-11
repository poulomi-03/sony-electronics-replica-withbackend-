-- > step 01 : Create database "sony-users"
CREATE DATABASE IF NOT EXISTS `sony-users`;

use sony-users;


-- > step 02 : Creating user table
CREATE TABLE IF NOT EXISTS registeredUsers (
    user_id VARCHAR(20) NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password Varchar(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    PRIMARY KEY (user_id)
);
DELIMITER //


-- > step 03 : creating trigger for customized userid 
CREATE TRIGGER before_insert_registeredUsers
BEFORE INSERT ON registeredUsers
FOR EACH ROW
BEGIN
    DECLARE new_id INT;
    DECLARE custom_id VARCHAR(20);
    
    -- Get the maximum existing ID
    SELECT COALESCE(MAX(CAST(SUBSTRING(user_id, 7) AS UNSIGNED)), 0) + 1 INTO new_id FROM registeredUsers;
    
    -- Generate the custom ID
    SET custom_id = CONCAT('DH', YEAR(CURDATE()), LPAD(new_id, 4, '0'));
    
    -- Assign the custom ID to the new row
    SET NEW.user_id = custom_id;
END //

DELIMITER ;

