<?php
require('vendor/autoload.php');
require('config.php');

use Trello\Client;

$client = new Client();
$client->authenticate($api_key, $api_token, Client::AUTH_URL_CLIENT_ID);

$all_boards = $client->api('member')->boards()->all($user, array('filter' => 'open'));

$fp = fopen($file, 'w+');

foreach ($all_boards as $board) {

    echo 'On board '.$board['name']."\n";

    // Don't care what labels are on the board, only those that exist on cards.
    $all_cards = $client->api('board')->cards()->all($board['id']);

    foreach ($all_cards as $card) {
        echo "\tOn card ".$card['name']."\n";

        foreach ($card['labels'] as $label) {
            echo "\t\tOn label ".$label['name']."\n";
            $csv_row = array();

            $csv_row[] = $label['name'];
            $csv_row[] = $label['color'];
            $csv_row[] = $board['name'];
            // @todo Team name?
            // @todo List name
            $csv_row[] = $card['name'];

            fputcsv($fp, $csv_row);
        }
    }
}

fclose($fp);

echo "\n";
