DROP DATABASE IF EXISTS p1;
CREATE DATABASE p1;
DROP USER IF EXISTS p1@localhost;
CREATE USER p1@localhost;
GRANT ALL on p1.* TO p1@localhost;
USE p1;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p2;
CREATE DATABASE p2;
DROP USER IF EXISTS p2@localhost;
CREATE USER p2@localhost;
GRANT ALL on p2.* TO p2@localhost;
USE p2;

CREATE TABLE Users (Username TEXT, Password TEXT);

DROP DATABASE IF EXISTS p3;
CREATE DATABASE p3;
DROP USER IF EXISTS p3@localhost;
CREATE USER p3@localhost;
GRANT ALL on p3.* TO p3@localhost;
USE p3;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", "FLAG_9b102ea7117bcccf54ce89a7b02eb7b3c6e8b9eb");
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p4;
CREATE DATABASE p4;
DROP USER IF EXISTS p4@localhost;
CREATE USER p4@localhost;
GRANT ALL on p4.* TO p4@localhost;
USE p4;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p5;
CREATE DATABASE p5;
DROP USER IF EXISTS p5@localhost;
CREATE USER p5@localhost;
GRANT ALL on p5.* TO p5@localhost;
USE p5;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", "FLAG_5b872c183caa63cdf3b3d12194c5552e942e7d51");
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p6;
CREATE DATABASE p6;
DROP USER IF EXISTS p6@localhost;
CREATE USER p6@localhost;
GRANT ALL on p6.* TO p6@localhost;
USE p6;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", "FLAG_82fa795356fe912c474719395c2f4274b7fe31dd");
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p7;
CREATE DATABASE p7;
DROP USER IF EXISTS p7@localhost;
CREATE USER p7@localhost;
GRANT ALL on p7.* TO p7@localhost;
GRANT FILE on *.* TO p7@localhost;
USE p7;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", "The flag isn't here!");
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p8;
CREATE DATABASE p8;
DROP USER IF EXISTS p8@localhost;
CREATE USER p8@localhost;
GRANT ALL on p8.* TO p8@localhost;
GRANT FILE on *.* TO p8@localhost;
USE p8;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", "The flag isn't here!");
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p9;
CREATE DATABASE p9;
DROP USER IF EXISTS p9@localhost;
CREATE USER p9@localhost;
GRANT ALL on p9.* TO p9@localhost;
USE p9;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p10;
CREATE DATABASE p10;
DROP USER IF EXISTS p10@localhost;
CREATE USER p10@localhost;
GRANT ALL on p10.* TO p10@localhost;
USE p10;

CREATE TABLE FLAG_5676cf4233b6fb78bbdad274c8b68e866a66518f (Username TEXT, Password TEXT);
INSERT INTO FLAG_5676cf4233b6fb78bbdad274c8b68e866a66518f VALUES ("admin", "The flag isn't here!");

DROP DATABASE IF EXISTS p11;
CREATE DATABASE p11;
DROP USER IF EXISTS p11@localhost;
CREATE USER p11@localhost;
GRANT ALL on p11.* TO p11@localhost;
USE p11;

CREATE TABLE Users (Username TEXT, FLAG_77e4aea4a8db8b9771bba606f7b58312bf96c170 TEXT);
INSERT INTO Users VALUES ("admin", "The flag isn't here!");

DROP DATABASE IF EXISTS p12;
CREATE DATABASE p12;
DROP USER IF EXISTS p12@localhost;
CREATE USER p12@localhost;
GRANT ALL on p12.* TO p12@localhost;
USE p12;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");
CREATE TABLE P16_HiddenData (SecretData TEXT);
INSERT INTO P16_HiddenData VALUES ("FLAG_1badbf17c9e31aba02fd70e86c101e5b476aa066");

DROP DATABASE IF EXISTS p13;
CREATE DATABASE p13;
DROP USER IF EXISTS p13@localhost;
CREATE USER p13@localhost;
GRANT ALL on p13.* TO p13@localhost;
USE p13;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p14;
CREATE DATABASE p14;
DROP USER IF EXISTS p14@localhost;
CREATE USER p14@localhost;
GRANT ALL on p14.* TO p14@localhost;
USE p14;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p15;
CREATE DATABASE p15;
DROP USER IF EXISTS p15@localhost;
CREATE USER p15@localhost;
GRANT ALL on p15.* TO p15@localhost;
USE p15;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p16;
CREATE DATABASE p16;
DROP USER IF EXISTS p16@localhost;
CREATE USER p16@localhost;
GRANT ALL on p16.* TO p16@localhost;
USE p16;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p17;
CREATE DATABASE p17;
DROP USER IF EXISTS p17@localhost;
CREATE USER p17@localhost;
GRANT ALL on p17.* TO p17@localhost;
USE p17;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p18;
CREATE DATABASE p18;
DROP USER IF EXISTS p18@localhost;
CREATE USER p18@localhost;
GRANT ALL on p18.* TO p18@localhost;
USE p18;

CREATE TABLE Users (Username TEXT, Password TEXT);
INSERT INTO Users VALUES ("admin", SHA1(RAND()));
INSERT INTO Users VALUES ("guest", "guest");

DROP DATABASE IF EXISTS p19;
CREATE DATABASE p19;
DROP USER IF EXISTS p19@localhost;
CREATE USER p19@localhost;
GRANT ALL on p19.* TO p19@localhost;
USE p19;

CREATE TABLE Users (Username TEXT, Password TEXT, Privileged BOOLEAN);
INSERT INTO Users VALUES ("admin", SHA1(RAND()), 1);
INSERT INTO Users VALUES ("guest", "guest", 0);

DROP DATABASE IF EXISTS p20;
CREATE DATABASE p20;
DROP USER IF EXISTS p20@localhost;
CREATE USER p20@localhost;
GRANT ALL on p20.* TO p20@localhost;
USE p20;

CREATE TABLE Users (Username VARCHAR(16), Password TEXT, Privileged BOOLEAN);
INSERT INTO Users VALUES ("admin", SHA1(RAND()), 1);
INSERT INTO Users VALUES ("guest", "guest", 0);

DROP DATABASE IF EXISTS p21;
CREATE DATABASE p21;
DROP USER IF EXISTS p21@localhost;
CREATE USER p21@localhost;
GRANT ALL on p21.* TO p21@localhost;
USE p21;

CREATE TABLE Users (Username VARCHAR(16) PRIMARY KEY, Password TEXT, Privileged BOOLEAN);
INSERT INTO Users VALUES ("admin", SHA1(RAND()), 1);
INSERT INTO Users VALUES ("guest", "guest", 0);
