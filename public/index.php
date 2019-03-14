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

        $file = fopen("example.csv", "r");

        while(! feof($file))
        {
            $record = fgetcsv($file);

            $records[] = $record;

        }

        fclose($file);
        print_r($records);
    }
}