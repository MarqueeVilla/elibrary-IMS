#### Information Management System for HeNN Elibrary project

![Project Snapshot](http://i76.photobucket.com/albums/j5/alexshr/elims_info_zps5uxvj2ew.png)

**E-Library information Management System** is the integrated website for E-library admins,
system admins and users. The website provides complete information about HeNN E-Library
project. The information about each individual sites, its geolocation, status and pictures.

**Roles:** There are different roles for registered members. Registration of member are completed
during the starting of project and new accounts for each member is created as needed - then or 
later. Below are some defined roles and their duties:

1. **Admin(HeNN Elibrary coordinator or Elibrary project leader)**: The admin can check the status
of projects and the monitoring timetable. Add new deployment sites and their information or
edit the existing ones. The Admin can generate reports based on information filled by 
system admin on arrival from the site. Admin can make all type of new users including another admin. 

2. **System admin(elibrary deployment/monitoring team member)**: The system admins can edit 
details about the site but cannot add new site, write reports about their recent visit 
and submit easily after their visit to sites. System admin can create new system admin 
or user account but cannot create Admin account.

3. **User(consumer of the system- students,teachers and school staffs)**: The users from each
elibrary site can report current status of the site at any time or  file complaint about the
system and ask for help via form. The Notification email should be pushed to sysadmin and admin
as soon as complaint or problem is filed. 

4. **website Guest/visitor**: Any guest/visitor can see general information about E-Library project,
sites and map.This application should serve as a one stop for all required information.

The map is being displayed when we click (site) button. this map has pointers to all the
locations where project are being deployed. the geo position are stored in database table.

Test users created/sql updated:

1. Username/password: testadmin
2. Username/password: testsysadmin
3. Username/password: testuser

## Installation Guideline

#### Create Database
- Create database **db_elims**
- Import SQL Script found in the root into the database.
- Change database configuration in **databaseConnect.php**
- Start browsing
 
#### Virtual host for the project

```
<VirtualHost *:80>
         ServerAdmin webmaster@localhost
          DocumentRoot /var/www/html/elims/
          ServerName elims.local
          ServerAlias elims.local
         <Directory /var/www/html/elims/>
           Options Indexes FollowSymLinks
           AllowOverride All
           Order deny,allow
            Allow from all
          </Directory>
         ErrorLog ${APACHE_LOG_DIR}/error-elims.log
 </VirtualHost>
```
 
## Login Credentials
username : admin
password : admin
 
## How to contribute ?
- fork this [Repository]
- create new branch
- commit the changes into the new branch
- push the branch to your repository
- send Pull Request

[Repository]:https://github.com/foss-np/elibrary-IMS
