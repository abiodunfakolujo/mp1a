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

        $fieldNames = array();

        $count = 0;


        while(! feof($file))
        {
            $record = fgetcsv($file);
            if($count == 0){
                $fieldNames = $record;
            } else{
                $records[] = recordFactory::create($fieldNames, $record);
            }
            count++;

        }

        fclose($file);
        return $records;

    }
}

class record{

    public function __construct(Array $fieldNames = null, Array $values = null)
    {
        $record = array_combine($fieldNames,$values);
        foreach ($record as $property => $value ){
            $this->createProperty($property, $value);
        }
    }

    public function returnArray() {
        $array = (array)$this;
        return $array;
    }

    public function createProperty($colname = 'first', $value = 'abi') {

        $this->{$colname} = $value;
        
    }
}

class recordFactory {

    public static function create(Array $array = null) {

        $record = new record($array);

        return $record;
    }
}
