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

        $table = html::generateTable($records);

        #   $record = recordFactory::create();
        # print ('<table>');
        print("<h1>Abi's Top Soccer Stars</h1>");
        print("<p>I've been playing soccer since I was four years old all the way through college. Admiring some of the world's best players helped push me to the next skill level. </p>");
        print($table);

    }
}

class html{
    public static function generateTable($records){

        $count = 1;
        $table1 = '';
        $table1 .= "<html><head> <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script> </head><body><table class='table table-striped'>";


        





        }








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

    public static function create(Array $fileNames = null, Array $values = null) {

        $record = new record($fieldNames, $values);

        return $record;
    }
}
