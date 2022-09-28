
# Welcome to Hiring Management System

* [Setup](#setup)

##  Features

This website has two Roles:

 - Applicants
 - Admin

 ### Applicants:
 - May change the details of their profile
 - Can update CV/Resume Links
 - Can see whether a confirmation is pending, accepted, or refused.
 - If the admin deleted him, the user account will be marked as blocked.
 
 ### Admin:
 - can manage all applicants.
	 - approve, reject, and delete
	 - observe applicant information
	 - see the results of the applicant quiz

 - quiz management
	 - manage quiz topics
		 - create
		 - edit
		 - update
		 - delete
	 - manage quiz questions
		 - create
		 - edit
		 - update
		 - delete
	 - manage quiz
		 - attach quiz question to each topics
		 - edit
		 - delete
		 - 
## Technologies
* PHP Laravel
* mySQL
* HTML
* Java Script
* Bootstrap

## Setup

####  Installation
**requirements**

 1. PHP: 7.3 | ^8.0
 2. Laravel : ^8.75

First clone this repository, install the dependencies, and setup your .env file.

**run the commands**

clone project
```
git clone https://github.com/hackelite01/HiringManagementSystem.git
```

or [Click here to download .zip](https://github.com/hackelite01/HiringManagementSystem/archive/refs/heads/main.zip)


install dependencies
```
composer install
```

swith directory to project
```
cd HiringManagementSystem
```

generate app key
```
php artisan key:generate
```

copy .env.example and paste as .env
```
cp .env.example .env
or copy .env.example .env
```

open in vs code editor
```
code .
```

open .env file and change db name. 
**database setup**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

migrate database, and seed
```
php artisan migrate:fresh --seed 
```

after migration reseed, previous data will be remove
```	
php artisan db:seed UserSeeder
php artisan db:seed QuizSeeder
```

Finally time to launch project, run
```
php artisan serve
```
the project will open at http://127.0.0.1:8000

or
```
php artisan serve --port=8001 | any supported port number
```

**database seed will generate**

 -  login information for one administrator and ten users.
 -  30 question tests on HTML, CSS, and Github

