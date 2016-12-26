# 解説用DB

DROP DATABASE IF EXISTS db;
CREATE DATABASE db;
USE db;

CREATE TABLE account (user TEXT, pass TEXT);
INSERT INTO account VALUES ("naruse", "s3cretp4ssw0rd");
INSERT INTO account VALUES ("sakagami", "h1mit5u");
INSERT INTO account VALUES ("nitou", SHA1(RAND()));

CREATE TABLE secret_table (secret TEXT, hidden TEXT, unreachable TEXT);
INSERT INTO secret_table VALUES(SHA1(RAND()), SHA1(RAND()), SHA1(RAND()));

# 解説用DB (トランケーション)

DROP DATABASE IF EXISTS db2;
CREATE DATABASE db2;
USE db2;

CREATE TABLE account (user VARCHAR(16), pass TEXT);
INSERT INTO account VALUES ("naruse", "s3cretp4ssw0rd");
INSERT INTO account VALUES ("sakagami", "h1mit5u");
INSERT INTO account VALUES ("nitou", SHA1(RAND()));

# 演習用DB

DROP DATABASE IF EXISTS ctf;
CREATE DATABASE ctf;
USE ctf;

/* TODO */
