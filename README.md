# User-Interface-to-Control-the-Base-Holding-the-Robot-Arm
A web-based user interface that allows the user to control the robot arm and the direction of base holding the arm.

Downloading and Installing Steps:
  1.	Download XAMPP.
  2.	Start Apache & MySQL from XAMPP.
  3.	Save the Interface package in this path: C:\xampp\htdocs.
  4.	Create the databases (Steps mentioned in the creation process "4 and 5"). 
  5.	Open a browser and enter "localhost/interface/index.html".
  6.	Press on (تحفظ) or (save) to save the values of the robot arm's engines to the database.
  7.	Press on (تشغيل) or (run) to extract the last row saved from the database (from the previous step) and to change the On_Mode column to "on".
  8.	To control the base direction press on forward, left, right, backward, or stop (امام,يسار,يمين,خلف,توقف).
  9.	To change the interface language use the button (EN) for English and (AR) for Arabic.


Creation Process:
  1.	Download Virtual Studio Code.
  2.	Build the website's main component with HTML (index.html). It includes a range input, a label, and a text input for each motor. Two buttons are also included to send the data to the database (تحفظ), and to run the motors (تشغيل) when connected to ROS. Additionally, the page includes five buttons to control the base direction.
  3.	Design the user interface with CSS (style.css).
  4.	Create a database called "Motors" with eight columns (id, Motor 1, Motor 2, Motor 3, Motor 4, Motor 5, Motor 6, On_Mode) on phpMyAdmin. id is an AutoIncrement Int(1000), Motor # are an Int(11), and On_Mode is a Varchar(11) that is Null by default.
  5.	Create a database called "Motion" with two columns (id, direction) on phpMyAdmin. id is an AutoIncrement Int(1000), while direction is a Varchar(11).
  6.	Connect to the database and display the motors' degree on a PHP page (results.php). This page will run when the user clicks on the (save) or (تحفظ) button. 
  7.	Extract the last row saved from the database and display the results on a PHP page (run.php) and (direction.php). Additionally, Change the On_Mode column to "on" in the extracted column.
  8.	(run.php) will run when the user clicks on the (run) or (تشغيل) button. 
  9.	(direction.php) will run when any of the direction buttons are clicked.
  10.	To make the page responsive (Supports Mobile View), "vw" and "<meta name="viewport" content="width=device-width, initial-scale=1.0">" ware used.


