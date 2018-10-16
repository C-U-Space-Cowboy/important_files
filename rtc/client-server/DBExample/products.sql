DROP TABLE IF EXISTS tblProduct;
CREATE TABLE IF NOT EXISTS tblProduct(
	productId INT AUTO_INCREMENT PRIMARY KEY,
	name CHAR(20),
	price DOUBLE
);

INSERT INTO tblProduct VALUES (NULL, 'stapler', 7.50);
INSERT INTO tblProduct VALUES (NULL, 'pencil', 0.50);
INSERT INTO tblProduct VALUES (NULL, 'pen', 1.25);
INSERT INTO tblProduct VALUES (NULL, 'ruler', 1.75);
INSERT INTO tblProduct VALUES (NULL, 'notebook', 3.50);
INSERT INTO tblProduct VALUES (NULL, 'staples', 2.50);
INSERT INTO tblProduct VALUES (NULL, 'eraser', 0.25);
INSERT INTO tblProduct VALUES (NULL, 'scissors', 4.75);
INSERT INTO tblProduct VALUES (NULL, 'mouse pad', 3.25);
INSERT INTO tblProduct VALUES (NULL, 'tape dispenser', 10.50);
