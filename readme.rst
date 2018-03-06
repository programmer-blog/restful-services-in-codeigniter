###################
Programmer Blog - RESTful Webservices in CodeIgniter
###################

Download code or clone repository in to your system

*******************
Create a MYSQL database
*******************

Create a MySQL database `dbbookstore` using phpMyAdmin

**************************
Create books table by running sql code into SQL tab of phpmyadmin
**************************

```

	DROP TABLE IF EXISTS tbl_books;

	CREATE TABLE IF NOT EXISTS tbl_books (
  	id int(11) NOT NULL AUTO_INCREMENT,
  	name varchar(500) NOT NULL,
  	price float(8,2) NOT NULL,
  	author varchar(300) NOT NULL,
  	category varchar(250) NOT NULL,
  	language varchar(100) NOT NULL,
  	ISBN varchar(40) NOT NULL,
  	publish_date date NOT NULL,
  	PRIMARY KEY (id)
	) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
	
```

*******************
Install Postman extension of Google Chrome
*******************

In Postman, you can test all the HTTP methods.

************
To read a detailed tutorial please visit
************
`http://programmerblog.net/create-restful-web-services-in-codeigniter`

*******
Programmer Blog
*******

 `<http://programmerblog.net/create-restful-web-services-in-codeigniter/>`
