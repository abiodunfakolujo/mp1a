<?php
/**
 * Created by PhpStorm.
 * User: abiodunfakolujo
 * Date: 2019-02-20
 * Time: 16:41
 */

main::start();
class main {

    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }
}

class csv {

    static public function getRecords() {

        $records = 'test lolok';
        return $records;
    }
}

class html {

    static public function generateTable($records) {

        $table = $records;

        return $table;
    }
}

class system {

    static public function printPage($page) {

        echo $page;
    }
}