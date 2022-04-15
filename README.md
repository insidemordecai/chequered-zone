## Chequered Zone

This a news website (showcase) that one can views motorsport content in one place

Prior to logging in, a user has access to limited amount of content but on they can register a new account or log into an existing account to view the extra content. If the user is an admin they can add new articles, view other users and update/delete their information as well as view feedback from the contact form and delete them.

In the extra articles, if a user is an admin they get the option to edit it or delete it. These two button are hidden from a normal user (fan)

### SQL table structure

The project makes use of three tables - contact (for data from contact form), posts (to keep articles) and users. 

### Working with the project 

To clone and reproduce this project's functionalities, the project sql file `chequered-zone.sql` is included in the root folder. Import into phpMyAdmin or alternatives.

Default password for all users is `123456` 

The admin is `Jack Bauer` with email as `jbauer@gmail.com` <br>
An example of a non-admin user is `Ayrton Senna` with email as `asenna@gmail.com` <br>

All new users will be fans by default without administrative privileges.
