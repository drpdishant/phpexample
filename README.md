# phpexample
PHP-Example for DevOps Practical

This is a simple PHP Application Connecting to MySQL
1. It connects to a MySQL server
2. Creates a Database
3. Creates a Table
4. Inserts Data into The Table
5. Get Data from the Table


# Dockerized Version
Link to the Docker Image on [Docker Hub](https://hub.docker.com/r/drpdishant/firstapp)

# Running The Container
Run the download the docker-compose.yml and run it by executing following commands
```
docker-compose up -d
```
Here is the sample Compose File, 
you may edit the port mapping if it conflicts with your current MySQL and Http Port

```
version: '3.1'

services:

  db:
    image: mariadb
    command: --default-authentication-plugin=mysql_native_password
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: rootuser
    ports:
      - 3306:3306
      - 33060:33060

  php:
    image: drpdishant/firstapp
    restart: always
    ports:
      - 8080:80
```
Open the browser and go to http://localhost:8080/phpexample
Output will be similar to one given below for the first time:
```
Connected successfully using MySQLi Object Oriented
Database created successfully using Object Oriented Method
Table TaskList Created SuccessFully
Inserted Data SuccessFully
Task Name | Task Description | Time Stamp 
Insert Data | Insert Data into MySQL DB using PHP | 2019-02-04 18:13:43

```
Make sure you don't have any service running on 
On refresh it will be similar to:
```
Connected successfully using MySQLi Object Oriented
Error creating database: Can't create database 'db_oo'; database exists
Error Creating Table: Table 'TaskList' already exists
Inserted Data SuccessFully
Task Name | Task Description | Time Stamp 
Insert Data | Insert Data into MySQL DB using PHP | 2019-02-04 18:13:43
Insert Data | Insert Data into MySQL DB using PHP | 2019-02-04 18:14:50
```

To Reset the database:
Open [http://localhost:8080/phpexample/reset](http://localhost:8080/phpexample/reset)
Delete the database created and start again

# Run Using ansible Playbook
Download the ansible_playbook.yml file, and run it using
```
ansible-playbook ansible_playbook.yml
```
Its assumed that you have configured required hosts in the ```/etc/ansible/hosts```

The current playbook used "hosts: all"paramater, you may change it as required to refer to a specific group of hosts.
