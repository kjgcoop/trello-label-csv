# trello-label-csv

Create a CSV file of your Trello cards, boards and labels so you can see all the labels, as opposed to being constrained within one board.

## Getting Started

### Prerequisites

Confirm you have [Composer](http://getcomposer.org/) installed


### Installing

Tell Composer to install the requirements

```composer require```

The only requirement is [cdaguerre/php-trello-api](https://github.com/cdaguerre/php-trello-api)

### Configuring

Copy config.sample.php to config.php. It will ask you for your trello API Key, a token, your Trello username and the name of the file you want your data output to.

For details about how to get your Trello API key and token, see [Authorization](https://developers.trello.com/page/authorization)


## Running
Once you've populated config.php as described above, run:

```
php trello-label-csv.php
```

It will output details as it builds the CSV. The final output will be in the file you specified in config.php. It defaults to trello.csv

## Built With

* [cdaguerre/php-trello-api](https://github.com/cdaguerre/php-trello-api) - The Trello API class this code relies on


## Authors

* **KJ Coop** - *Initial work* - [kjgcoop](https://github.com/kjgcoop)


## License

This project is licensed under the [GPLv3](https://www.gnu.org/licenses/gpl-3.0.en.html) - see the [LICENSE](LICENSE) file for details

