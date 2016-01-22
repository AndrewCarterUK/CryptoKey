# CryptoKey

[![Latest Stable Version](https://poser.pugx.org/andrewcarteruk/cryptokey/v/stable)](https://packagist.org/packages/andrewcarteruk/cryptokey)
[![Build Status](https://travis-ci.org/AndrewCarterUK/CryptoKey.svg)](https://travis-ci.org/AndrewCarterUK/CryptoKey)
[![Code Coverage](https://scrutinizer-ci.com/g/AndrewCarterUK/CryptoKey/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/AndrewCarterUK/CryptoKey/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/AndrewCarterUK/CryptoKey/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/AndrewCarterUK/CryptoKey/?branch=master)
[![Total Downloads](https://poser.pugx.org/andrewcarteruk/cryptokey/downloads)](https://packagist.org/packages/andrewcarteruk/cryptokey)
[![License](https://poser.pugx.org/andrewcarteruk/cryptokey/license)](https://packagist.org/packages/andrewcarteruk/cryptokey)

A tool for generating keys using a CSPRNG.

If you have OpenSSL installed [read below](#an-alternative-openssl), as you probably do not need to install this tool.

By [AndrewCarterUK ![(Twitter)](http://i.imgur.com/wWzX9uB.png)](https://twitter.com/AndrewCarterUK)

## How To Install

```sh
composer global require andrewcarteruk/cryptokey
```

Make sure you have added your global composer binary directory to the PATH in your `~/.bash_profile` (or `~/.bashrc`) file:

```sh
export PATH=~/.composer/vendor/bin:$PATH
```

[This blog](https://akrabat.com/global-installation-of-php-tools-with-composer/) explains the process of global composer installs in more detail.

## Usage

```sh
$ cryptokey generate
bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=

$ cryptokey generate --format=hex
531a5187f08846a40ab6a9f9c651831bdd188e84b026804039773ef0aa51e500

$ cryptokey generate --entropy=64
ladkecOLF7RvMl/J5EGr/SMz5InfSyX+DA9CvecE/OiVFndnMqgvfLofNGO6/Gc5P1Io+eHYhcJphIRHCB9Kpg==
```

You can use the `--format` option to switch between `base64` (default) and `hex` output.

You can use the `--entropy` option to select the number of bytes of entropy. The default is 32 bytes (256 bits).

## An Alternative: OpenSSL

If you have OpenSSL installed, you may find that the command(s) below are sufficient for your needs:

```sh
$ openssl rand -base64 32
3cDyOf7I6P4sU+ImVmIJW8k/IzGyoCACaJi+PbVY+I8=

$ openssl rand -hex 32
78a59462d4264e29be184226e7a46de0df96f97682963977fe61970b632d9faa
```

The OpenSSL command has `-base64` and `-hex` options for switching between `base64` and `hex` output.

The final argument is the number of bytes of entropy to draw. The number of bits of entropy is this number multiplied by 8.
