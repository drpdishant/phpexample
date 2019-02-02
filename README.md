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
Run the container by executing following commands
```
docker run -d --name phpexample -p 8080:80 drpdishant/firstapp
```
Open the browser and go to http://localhost:8080/phpexample

At present mysql is not configured so it will display error messages as bellow

>Connection failed: No such file or directory
>Connection failed: No such file or directoryError creating database: 
>Connection failed:No such file or directoryError Creating Table: 
>Connection Failed: No such file or directoryError: INSERT INTO TaskList (TaskName,TaskDescription) VALUES ( 'Insert Data', 'Insert Data >into MySQL DB using PHP' )

>Connection Failed: No such file or directory0 Results
