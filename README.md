# CryptoKey

A tool for generating keys using a CSPRNG.

## How To Install

```sh
composer global require andrewcarteruk/cryptokey
```

Make sure you have added your global composer binary directory to the PATH in your `~/.bash_profile` (or `~/.bashrc`) file:

```sh
export PATH=~/.composer/vendor/bin:$PATH
```

[This blog](https://akrabat.com/global-installation-of-php-tools-with-composer/) explains the process in more detail.

## Usage

```sh
$ cryptokey generate
bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=

$ cryptokey generate --format=hex
531a5187f08846a40ab6a9f9c651831bdd188e84b026804039773ef0aa51e500

$ cryptokey generate --entropy=64
ladkecOLF7RvMl/J5EGr/SMz5InfSyX+DA9CvecE/OiVFndnMqgvfLofNGO6/Gc5P1Io+eHYhcJphIRHCB9Kpg==
```

