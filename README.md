# Problem Statement :
“Too many mails”: Almost all our communication with the institute and also amongst the
students is based on mails. Due to this some important mails are quite often missed and students
gmail is often filled with lots of unwanted mails.

## A quick Survey:
A quick survey done on the students of our college, shows the following results:
[here](https://docs.google.com/spreadsheets/d/1hlGq49mgU1aI4HZ0VDs8HF-G0QmPFJnnBxe70WuK5Gc/edit?usp=sharing)

## Screenshots:
![Screenshot1](https://user-images.githubusercontent.com/46621760/68603743-ecbffa80-04ce-11ea-9cbe-d228fa6ae295.png)
![Screenshot2](https://user-images.githubusercontent.com/46621760/68606615-d0bf5780-04d4-11ea-8fc6-65a1df45a2d3.png)


# Installation Guide :
* Install xampp/lamp on your machine
* Create login.php in directory website ``` cd website && git clone https://github.com/harshraj22/website.git```
* Fill the following contents inside the file :
	```
		<?php
			$hostname = 'localhost';
			$username = 'root (or any other user)';
			$password = '<insert your xamp/lamp password>';
			$database = 'mailmaintainer';
		?>
	```
* Database Creation :
	* Create database named ```mailmaintainer```
	* Create all the required tables referring [this link via command line](https://stackoverflow.com/a/16486033)
	* Use ```main_table.sql``` , ```temp_table.sql```, ```mailmaintainer.sql```, ```time_table.sql``` for the above process.
	* This creates your basic database along with all the required tables.
	* Run the following to add default admin in mysql ``` INSERT INTO auth VALUES('manageevents123@gmail.com','<insert admin password>'); ```

* Setup for Google OpenId:
	* Go to auth directory
	* Remove everything (if exists) except auth.php
	* Install Google API Client using ``` composer require google/apiclient ``` (In case you don't have composer installed, install using ```sudo apt-get install composer```)

	```Directory Structure :
		.
		|--website
		    |--website
		        |-- README.md
		        |-- Report.md
		        |-- attachments
		        |   `-- randomfile.txt
		        |-- login.php
		        |-- mailmaintainer.sql
		        |-- main_table.sql
		        |-- newfile
		        |-- reference.txt
		        |-- temp_table.sql
		        |-- time_table.sql
		        |-- auth
		        |   |-- auth.php
		        |	|--composer.json 
		        |	|--composer.lock
		        |	|--vendor/
		        `-- user
		            |-- add_event.php
		            |-- add_event_backend.php
		            |-- add_keywords.php
		            |-- book_slot.php
		            |-- book_slot_php.php
		            |-- logout.php
		            |-- profile.php
		            |-- slot.php
		            |-- time_table.php
		            |-- update_preferences.php
		            `-- update_preferences_table.php
	```
	* In case something goes wrong with google sign in, check form action in auth.php : http://localhost/website/website/user/profile.php & compare with the directory structure. And port for localhost should be 80
