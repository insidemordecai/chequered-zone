## Chequered Zone

This a news website (showcase) that one can views motorsport content in one place

<img src="https://github.com/insidemordecai/chequered-zone/blob/main/screen-captures/chequered-zone-demo.gif?raw=true" width="70%" />

Prior to logging in, a user has access to limited amount of content but on they can register a new account or log into an existing account to view the extra content. If the user is an admin they can add new articles, view other users and update/delete their information as well as view feedback from the contact form and delete them.

In the extra articles, if a user is an admin they get the option to edit it or delete it. These two button are hidden from a normal user (fan)

### Working with the project 
#### SQL table structure

The project makes use of three tables - contact (for data from contact form), posts (to keep articles) and users. 

To clone and reproduce this project's functionalities, the project sql file `chequered-zone.sql` is included in the root folder. Import into phpMyAdmin or alternatives.

#### Users

The admin is `Jack Bauer` with email as `jbauer@gmail.com` <br>
An exising non-admin user is `Ayrton Senna` with email as `asenna@gmail.com`

Default password for all users is `123456` 

All new users will be fans by default without administrative privileges.

### Images
#### User-Facing Side
<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/home.png?raw=true" width="60%" />
<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/login.png?raw=true" width="60%" />
<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/register.png?raw=true" width="60%" />
<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/contact.png?raw=true" width="60%" />

#### Admin Facing Section

The admin section is for posting new article, modifying or deleting them (the two button are only visible to admins), managing users as well as feeback. <br>

<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/admin-home.png?raw=true" width="60%" />
<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/article.png?raw=true" width="60%" />
<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/feedback.png?raw=true" width="60%" />
<img src="https://github.com/insidemordecai/chequered-zone/blob/main/images/users.png?raw=true" width="60%" />
