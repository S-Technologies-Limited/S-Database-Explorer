# Changelog of S Database Explorer (SDE)

All notable changes to this project will be documented in this file.

## Table of Contents

- [Version 3.0.1](#version-301)
- [Version 3.0.0](#version-300)
- [Version 2.0.0](#version-200)
- [Version 1.0.0](#version-100)

## Version 3.0.1

- Release Date: August 15, 2023
- Version Code: 4
- Release type: Patch
- Stability: Stable

### Requirements

- PHP Version: 7.4 or higher
- PHP Extensions: PDO, JSON
- MySQL Version: 8.0 or higher

Version 3.0.1 is a patch release of S Database Explorer (SDE).
It fixed some compatibility issues.

### Changes

- Fixed bugs.

### Affected Files

- [src/SDE.php](src/SDE.php)
- [CHANGELOG.md](CHANGELOG.md)
- [composer.json](composer.json)
- [README.md](README.md)

## Version 3.0.0

- Release Date: July 16, 2023
- Version Code: 3
- Release type: Major
- Stability: Stable

### Requirements

- PHP Version: 7.4 or higher
- PHP Extensions: PDO, JSON
- MySQL Version: 8.0 or higher

Version 3.0.0 is a major release of S Database Explorer (SDE).
It is a complete rewrite of the library.
It is now compatible with PHP 7.4 or higher.
It uses PDO instead of MySQLi.

### Changes

- Added support for PHP 7.4 or higher.
- Replaced MySQLi with PDO.
- Renamed 'custom query' method to `run()`.
- Renamed 'last insert item' method to `last()`.
- Renamed 'number of rows count' method to `count()`.
- Added 'JSON output' method.
- Added 'sum' method.
- Added `CHANGELOG.md` file.
- Added `composer` support.

### Affected Files

- [src/SDE.php](src/SDE.php)
- [CHANGELOG.md](CHANGELOG.md)
- [composer.json](composer.json)
- [composer.lock](composer.lock)
- [README.md](README.md)

## Version 2.0.0

Version 2.0.0 is a major release of S Database Explorer (SDE).
It supports only MySQLi extension for security reasons.

- Release Date: December 7, 2017
- Version Code: 2
- Release type: Major
- Stability: Stable

### Requirements

- PHP Version: 5.6 or higher
- PHP Extensions: MySQLi
- MySQL Version: 5.7 or higher

### Changes

- Removed MySQL support and kept only MySQLi support.

### Affected Files

- [src/SDE.php](src/SDE.php)

## Version 1.0.0

Version 1.0.0 is the initial release of S Database Explorer (SDE).
It supports both MySQL and MySQLi extension.

- Release Date: August 14, 2015
- Version Code: 1
- Release type: Major
- Stability: Stable

### Requirements

- PHP Version: 5.5 or higher
- PHP Extensions: MySQL, MySQLi
- MySQL Version: 5.6 or higher

### Changes

- Initial release.

### Affected Files

- Not applicable.
