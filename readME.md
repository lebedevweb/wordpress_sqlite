# How to use Wordpress SQLite!

## What is available.
[WordPress 6.3](https://wordpress.org/download/), [SQLite Database Integration](https://wordpress.org/plugins/sqlite-database-integration/)

## What will be required for comfortable work.
Recommend PHP 7.4 or greater, sqlite3, [SQLiteStudio](https://sqlitestudio.pl/)

## Preparation for use.
### 1. Installing php:
`sudo apt update && sudo apt install php php-cgi php-cli php-sqlite3`

### 2. Cloning the project:
`git clone https://github.com/lebedevweb/wordpress_sqlite.git`

### 3. Go to the project folder:
`cd wordpress_sqlite`


### 4. Starting the development server:
`php -S 127.0.1.1:8090`

### 5. Open in the browser:
`http://127.0.1.1:8090`

### 6. Admin panel:
`http://127.0.1.1:8090/wp-admin/`

Important
`If you skip the slash at the end of the path, there may be a path error later.`

### 7. Login details:
`Login: admin`
`Password:admin`

---

### Update on February 1, 2024

Updated:
1. Wordpress to version 6.4.3
2. Integration with SQLite database version 2.1.6
3. Twenty Twenty-One. Upgrade to version 2.1.
4. Twenty Twenty Three. Upgrade to 1.3.
5. Twenty Twenty Two. Upgrade to 1.6.
6. Translations.
