# readynas

A PHP management suite for ReadyNAS devices.

[![Build Status](https://travis-ci.org/pxgamer/readynas.svg?branch=master)](https://travis-ci.org/pxgamer/readynas)
[![Version](https://img.shields.io/packagist/v/pxgamer/readynas.svg)](https://packagist.org/p/pxgamer/readynas)
[![License](https://img.shields.io/packagist/l/pxgamer/readynas.svg)](https://opensource.org/licenses/mit-license)

## Usage

All that needs to be done, is to set the environment variables.  
`NAS_HOST` - The IP/domain of the NAS  
`NAS_USER` - The username to connect to your NAS with  
`NAS_PASS` - The password to connect to your NAS with  

Environment variables can be defined in multiple ways.

- Using a `.env` file via [`vlucas/phpdotenv`][vlucas/phpdotenv]
- Using the `export` command on Unix
- Using the `setx` command on Windows

## Compatibility

System       | Firmware | Status
------------ | -------- | -------
ReadyNAS 102 | 6.7+     | ✓

[vlucas/phpdotenv]: https://packagist.org/packages/vlucas/phpdotenv
