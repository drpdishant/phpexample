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

At present mysql is not configured so it will display error messages as bellow

>Connection failed: No such file or directory
>Connection failed: No such file or directoryError creating database: 
>Connection failed:No such file or directoryError Creating Table: 
>Connection Failed: No such file or directoryError: INSERT INTO TaskList (TaskName,TaskDescription) VALUES ( 'Insert Data', 'Insert Data >into MySQL DB using PHP' )

>Connection Failed: No such file or directory0 Results
