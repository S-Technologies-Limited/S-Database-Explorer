# S Database Explorer (SDE)

S Database Explorer (SDE) is a simple and lightweight MySQL database explorer library based on PHP and PDO. It is an open source PDO backed PHP library for database management. It is a free and opensource library that helps you to manage your MySQL database.

## Table of Contents

- [Requirements](#requirements)
- [Features](#features)
- [Change log](#change-log)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)
- [Credits](#credits)
- [Support](#support)
- [Security](#security)
- [Future Plan](#future-plan)
- [Author](#author)
- [Contributors](#contributors)
- [About S Technologies](#about-s-technologies)
- [Support](#support)
- [Hire Us](#hire-us)
- [Contribute](#contribute)
- [Privacy Policy](#privacy-policy)
- [Terms & Conditions](#terms--conditions)
- [Copyright](#copyright)

## Requirements

- PHP >= 7.4
- PDO PHP Extension
- JSON PHP Extension

## Features

- [x] Create table
- [x] Insert record
- [x] Update record
- [x] Delete record
- [x] Select record
- [x] Select all records
- [x] Select records with where clause
- [x] Select records with where clause and limit
- [x] Select records with where clause, limit and offset
- [x] Select records with where clause, limit, offset and order by
- [x] Run custom query

## Change log

### Version 3.0.0 (July 16, 2023)

- Added support for PHP 7.4 or higher.
- Replaced MySQLi with PDO.
- Renamed custom query method to `run()`.
- Renamed last insert item method to `last()`.
- Renamed number of rows count method to `count()`.
- Added JSON output method.
- Added sum method.

### Version 2.0.0 (December 7, 2017)

- Removed MySQL support and kept only MySQLi support.

### Version 1.0.0 (August 14, 2015)

- Initial release.

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Installation

S Database Explorer (SDE) can be installed using composer:

```bash
composer require stechbd/sde
```

## Usage

### Autoload the library

```php
require_once __DIR__ . '/vendor/autoload.php';
```

### Connecting to a database

```php
$sde = new STechBD\SDE('name', 'username', 'password', 'host', 'prefix');
```

### Inserting a record

```php
$sde->insert('users', 'name, email, password', ':name, :email, :password', [
    'name' => 'John Doe',
    'email' => 'john@stechbd.net',
    'password' => '123456'
]);
```

### Updating a record

```php
$sde->update('users', 'email = :newEmail', 'email = :oldEmail' [
	'email' =>  'doe@stechbd.net',
	'id'    =>  1
]);
```

### Deleting a record

```php
$sde->remove('users', 'id = :id', [
	'id' => 1
]);
```

### Selecting records

#### Selecting all column

```php
$sde->select('*', 'users');
```

#### Selecting specific columns

```php
$sde->select('id, name, email', 'users');
```

#### Selecting records with where clause

```php
$sde->select('id, name, email', 'users', 'id = :id', false, false, [
	'id' => 1
]);
```

#### Selecting records with where and limit clause

```php
$sde->select('id, name, email', 'users', 'id = :id', 10, false, [
	'id' => 1
]);
```

#### Selecting records with where, limit, and order by clause

```php
$sde->select('id, name, email', 'users', 'id = :id', '10, 0', 'id DESC', [
	'id' => 1
]);
```

#### Selecting records with where, limit, order by, and offset clause

```php
$sde->select('id, name, email', 'users', 'id = :id', '10', 'id DESC', '15', [
	'id' => 1
]);
```

### Running custom query

```php
$sde->run('SELECT * FROM users WHERE id = 1');
```

### Getting JSON output

```php
$sde->json($result);
```

### Getting last insert item

```php
$sde->last();
```

### Getting number of rows

```php
$sde->count('users', 'id = :id', [
	'id' => 1
]);
```

### Getting sum of a column

```php
$sde->sum('users', 'salary', 'id = :id', [
	'id' => 1
]);
```

## License

S Database Engine (SDE) is open-sourced software licensed under the [GPLv3 license](LICENSE).

## Credits

- [Md. Ashraful Alam Shemul](https://github.com/AAShemul)
- [All Contributors](../../CONTRIBUTORS.md)

## Support

If you are having general issues with this package, feel free to contact us on [STechBD.Net/support](https://www.stechbd.net/support).
If you believe you have found an issue, please report it using the [GitHub issue tracker](https://github.com/STechBD/SDE/issues), or better yet, fork the repository and submit a pull request.

## Security

If you discover any security related issues, please email [product@stechbd.net](mailto:product@stechbd.net) instead of using the issue tracker.

## Future Plan

- [ ] Create database
- [ ] Alter table
- [ ] Create database
- [ ] Drop database
- [ ] Drop table
- [ ] Truncate table
- [ ] Rename table
- [ ] Rename column
- [ ] Add column
- [ ] Drop column
- [ ] Add index
- [ ] Drop index
- [ ] Add foreign key
- [ ] Drop foreign key
- [ ] Add unique key
- [ ] Drop unique key
- [ ] Add primary key
- [ ] Drop primary key
- [ ] Add auto increment
- [ ] Drop auto increment

## Author

* [Md. Ashraful Alam Shemul](https://github.com/AAShemul)

## Contributors

None yet.

## About S Technologies

S Technologies is a tech company based in Dhaka, Bangladesh. You'll find an overview of all our open source projects [on our website](https://www.stechbd.net/open-source).

## Support

* [Home Page](https://www.stechbd.net/project/SDE/)
* [Documentation](https://docs.stechbd.net/SDE/)
* [GitHub Issues](https://github.com/STechBD/SDE/issues)
* [Composer Package](https://packagist.org/packages/stechbd/sde)
* [Email](mailto:product@stechbd.net)
* [Support Page](https://www.stechbd.net/support)
* [Contact Form](https://www.stechbd.net/contact)
* [Facebook](https://www.facebook.com/STechBD.Net)
* [Twitter](https://twitter.com/STechBD_Net)
* [LinkedIn](https://www.linkedin.com/company/STechBD)

## Hire Us

* [Web App Development](https://www.stechbd.net/web-development)
* [Android App Development](https://www.stechbd.net/android-app-development)
* [iOS App Development](https://www.stechbd.net/ios-app-development)

## Contribute

* [GitHub](https://github.com/STechBD/SDE)

## Privacy Policy

* [Privacy Policy](https://www.stechbd.net/privacy)

## Terms & Conditions

* [Terms & Conditions](https://www.stechbd.net/terms)
* [Refund Policy](https://www.stechbd.net/refund-policy)
* [Software License Agreement](https://www.stechbd.net/software-license-agreement)

## Copyright

© 2013-23 **[S Technologies](https://www.stechbd.net)**. All rights reserved.