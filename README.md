Documentation [login and sign up version 1]

Autoload.driver.php
An SPL class autoloader that aids in loading class functions on demand basis. It’s a standard php library that automates loading of the required functions on demand. Reduces the overhead of having to use ‘include’ or ‘require’ functions in every page.

Class.autoloader.php
The autoloader function is defined here, it takes the class name as the argument and loads the appropriate class file

Connection.php
A class that defines the connect function that connects to the database. It returns the connection variable that we use in making sql queries.

Home.php
Here we implement a custom version of a user profile in form of a bio mini card.

Index.php
The main landing page. Implements two forms; login and registration form. that are loaded dynamically by use of jQuery. A new user registers here, and continues to login after successful registration.

Login.php
Processes the user login. A class (login) with a constructor that has three arguments defined: password, username, and database connection variable we defined in connection.php file.
- The login function defined takes the parameters passed through the class constructor, queries the database to authenticate the user, first it checks whether the user exist, if null, the function returns 2 and exits. If the user exists, we continue to confirm the password, if the password in the database and the one entered by the user matches, we save the user bio data in the SESSION variables and return 0, and the authentication is successful. If there is password mismatch the function returns 1 and exits. This whole process is visible from the login form panel.

Process.helper.php
This is just a helper module that assists in receiving the values POSTED from the login form and registration form. Its included to maintain the clean code in login.php and signup.php. it redirects the user to profile page on successful login see header() function.

Signup.php
New user registration, We define a class Signup with a six argument constructor :username, fullname, password,phone, location, database connection. A function named new_user is defined
that takes the values passed in the constructor and does an insertion into the respective database columns. The password is encrypted using hash algorithm. The variables are selected using no predefined criteria for demonstrative purposes.

