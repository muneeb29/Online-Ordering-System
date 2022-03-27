**********************
Online Ordering System
**********************

Created By Muneeb Khalid

**********
Setting Up
**********

This web app is set to port number 82.
To configure this the user must locate to config in XAMPP and change the port to 82.

Also, in the base_url is set to 82 as well so must be changed if amy other port is being used
as otherwise a lot of the contnent will not work.

To change the base_url the user must naviage to config -> confif.php -> config(base_url) and change the 82 to the preferred port number. 

The url with 82 is:
http://localhost:82/ordering-system/index.php/home

Database must be created first and must be called ordering otherwise it will not interact with the database.

********
Features 
********
--NORMAL USERS
-Users are able to add, remove, update Qty from menu
-Users can update their account details

--ADMIN USERS
-Admin has access to dashboard
-Admin is able to update menu
-Admin is able to add items to menu
-Admin is able to remove items from menu


*******************
Accounts & Password
*******************
- Admin has the username of adminORD and password is password
The admin password is not encrypted as it is stored in the database already

-Users must create an account to access features the site 
-The user in the database bob1 with password: pass will not work as the password must match the hashing used.

ADMIN Details-
Username: adminORD
Password: password
