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
DROP TABLE IF EXISTS `tbl_books`;
CREATE TABLE IF NOT EXISTS `tbl_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` float(8,2) NOT NULL,
  `author` varchar(300) NOT NULL,
  `category` varchar(250) NOT NULL,
  `language` varchar(100) NOT NULL,
  `ISBN` varchar(40) NOT NULL,
  `publish_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `name`, `price`, `author`, `category`, `language`, `ISBN`, `publish_date`) VALUES
(1, 'Red Hat Enterprise Linux 6 Administration', 50.00, 'Sander van', 'Computer Science', 'en', '984-1234-12341234', '2013-12-05'),
(2, 'Design Patterns: Elements of Reusable Object-Oriented Software ', 15.11, 'Ralph Johnson, John Vlissides, Grady Booch', 'Computer Science', 'en', '978-0201633610', '2016-03-01'),
(3, 'Machine Learning for Absolute Beginners\r\n', 10.36, 'Oliver Theobald', 'Computer Science', 'en', '123-58679-654', '2016-08-01'),
(4, 'Python Crash Course: A Hands-On, Project-Based Introduction to Programming', 21.58, ' Eric Matthes', 'Programming', 'en', '659-8546-324', '2015-11-30'),
(5, 'Data Structures and Algorithms in Java', 102.65, 'Michael T. Goodrich, Roberto Tamassia, Michael H. Goldwasser', 'Computer Science', 'en', ' 978-1118777788', '2014-06-23'),
(6, 'Star Wars: Darth Vader Vol. 1: Vader', 26.54, 'Kieron Gillen', 'Comic Novels', 'en', '485-6582-658', '2015-09-16'),
(7, 'Star Wars Vol. 1: Skywalker Strikes', 16.23, 'Jason Aron', 'Novels', 'en', '159-7539-985', '2011-04-11'),
(8, 'Phonics for Kindergarten, Grade K ', 6.32, 'Carson-Dellosa Publishing ', 'Education', 'en', '412-6548-7854', '2016-08-10'),
(9, 'Astrophysics for People in a Hurry ', 9.95, 'Astrophysics for People in a Hurry ', 'Science', 'en', '654-71235-654', '2010-10-02'),
(10, 'Let\'s Review Algebra I', 8.54, 'Gary Rubinstein (Author) ', 'Science', 'en', '978-1438009854', '2006-03-24');
COMMIT;

```

*******************
Install Postman extension of Google Chrome
*******************

In Postman, you can test all the HTTP methods.

************
To read a detailed tutorial please visit
************
 <http://programmerblog.net/create-restful-web-services-in-codeigniter>`_

*******
Programmer Blog
*******

` <http://programmerblog.net/create-restful-web-services-in-codeigniter/>`_.
