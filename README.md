Faker Provider DE banks
---

This package will allow you to generate fakes german bank and account types using [Faker PHP](https://github.com/fzaninotto/Faker)

## Install

To install, use composer:

```bash
composer require faker-provider/faker-de-bank-accounts
```

## Use

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new Faker\Provider\BankAccounts($faker));
```

```
$bank = $faker->bank // DSL Bank 
```

```
$faker->bankWebsite($bank) // www.dslbank.de
```

```
$faker->accountType // Girokonto
```

## License

This wrapper is under the MIT license. See the complete license in the wrapper:

[LICENSE](./LICENSE)

## About

DE bank fake provider is a project of [Enrico Engel](https://github.com/enrico-engel).
See also the list of [contributors](https://github.com/enrico-engel/faker-de-bank/graphs/contributors).

## Reporting an issue or a feature request

Issues and feature requests are tracked in the [GitHub issue tracker](https://github.com/enrico-engel/faker-de-bank/issues).
