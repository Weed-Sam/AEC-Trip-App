Dear Programmers, When I wrote this code, only God and I knew how it worked. Now, only God knows it!

Therefore, if you are trying to optimize this routine and it fails (most surely), please increase this counter as a warning for the next person:

total_hours_wasted_here = 362

Remember to make the database yourself using this format....(I used XAMPP Server)


book_form;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| name     | varchar(255) | NO   |     | NULL    |                |
| email    | varchar(255) | NO   |     | NULL    |                |
| phone    | varchar(20)  | NO   |     | NULL    |                |
| address  | text         | NO   |     | NULL    |                |
| location | varchar(255) | NO   |     | NULL    |                |
| guests   | int(11)      | NO   |     | NULL    |                |
| arrivals | date         | NO   |     | NULL    |                |
| price    | int(11)      | YES  |     | NULL    |                |
| id       | int(11)      | NO   | PRI | NULL    |                |
| slno     | int(11)      | NO   | UNI | NULL    | auto_increment |
+----------+--------------+------+-----+---------+----------------+



booking_id;
+-------+---------+------+-----+---------+-------+
| Field | Type    | Null | Key | Default | Extra |
+-------+---------+------+-----+---------+-------+
| bid   | int(11) | NO   | PRI | NULL    |       |
+-------+---------+------+-----+---------+-------+




register_form;
+----------+--------------+------+-----+---------+-------+
| Field    | Type         | Null | Key | Default | Extra |
+----------+--------------+------+-----+---------+-------+
| name     | varchar(100) | NO   |     | NULL    |       |
| email    | varchar(255) | NO   |     | NULL    |       |
| password | varchar(255) | NO   |     | NULL    |       |
| phone_no | varchar(10)  | NO   | PRI | NULL    |       |
+----------+--------------+------+-----+---------+-------+



