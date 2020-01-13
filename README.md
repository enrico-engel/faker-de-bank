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
$faker->bank // DSL Bank 
```

```
$faker->accountType // Girokonto
```

## License

This wrapper is under the MIT license. See the complete license in the wrapper:

[LICENSE](./LICENSE)

## About

DE bank fake provider is a project of [Enrico Engel](https://github.com/Engel-Enrico).
See also the list of [contributors](https://github.com/Engel-Enrico/faker-provider-de-bank-accounts/graphs/contributors).

## Reporting an issue or a feature request

Issues and feature requests are tracked in the [GitHub issue tracker](https://github.com/Engel-Enrico/faker-de-bank/issues).