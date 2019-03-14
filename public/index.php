<?php
/**
 * Created by PhpStorm.
 * User: abiodunfakolujo
 * Date: 2019-02-20
 * Time: 16:41
 */


main::start("example.csv");

class main {

    static public function start($filename) {

        $records = csv::getRecords($filename);

        print_r($records);
    }
}

class csv {

    static public function getRecords($filename) {


        $file = fopen($filename, "r");

        while(! feof($file))
        {
            $record = fgetcsv($file);

            $records[] = $record;

        }

        fclose($file);
        return $records;

    }
}