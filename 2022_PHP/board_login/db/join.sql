DROP TABLE t_board;
DROP TABLE t_user;

ALTER TABLE t_user CHANGE upw upw VARCHAR(0);

CREATE TABLE t_user(
	i_user INT UNSIGNED AUTO_INCREMENT PRIMARY key,
	uid VARCHAR(20) UNIQUE NOT NULL,
	upw VARCHAR(30) NOT NULL,
	nm VARCHAR(5) NOT NULL,
	gender INT UNSIGNED NOT null CHECK(gender IN (0,1)),
	created_at DATETIME DEFAULT NOW(),
	updated_at DATETIME DEFAULT NOW()
);
SELECT * FROM t_user;

CREATE TABLE t_board(
	i_board INT UNSIGNED AUTO_INCREMENT,
	PRIMARY KEY(i_board),
	title VARCHAR(100) NOT NULL,
	ctnt VARCHAR(2000) NOT NULL,
	i_user INT UNSIGNED NOT NULL,
	created_at DATETIME DEFAULT NOW(),
	updated_at DATETIME DEFAULT NOW(),
	FOREIGN key(i_user) REFERENCES t_user (i_user)
);