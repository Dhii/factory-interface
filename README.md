# Dhii - Factory Interface

[![Build Status](https://travis-ci.org/dhii/factory-interface.svg?branch=master)](https://travis-ci.org/dhii/factory-interface)
[![Code Climate](https://codeclimate.com/github/dhii/factory-interface/badges/gpa.svg)](https://codeclimate.com/github/dhii/factory-interface)
[![Test Coverage](https://codeclimate.com/github/dhii/factory-interface/badges/coverage.svg)](https://codeclimate.com/github/dhii/factory-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/factory-interface/version)](https://packagist.org/packages/dhii/factory-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Interfaces for working with factories.

## Interfaces
- [`FactoryInterface`][FactoryInterface] - Creates things.
- [`FactoryFactoryInterface`][FactoryFactoryInterface] - Creates factories. For example, could create a factory from
a callback or an FQN.
- [`FactoryAwareInterface`][FactoryAwareInterface] - Exposes a factory.

[Dhii]: https://github.com/Dhii/dhii

[FactoryInterface]:                         src/FactoryInterface.php
[FactoryFactoryInterface]:                  src/FactoryFactoryInterface.php
[FactoryAwareInterface]:                    src/FactoryAwareInterface.php
