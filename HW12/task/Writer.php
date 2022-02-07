<?php
require_once '<task>lib/interface.php';

class Writer implements CommandInterface {

    public function getName()
    {
        return 'writer';
    }

    public function execute()
    {
        $number = mt_rand(1, 15);
        $result = '';
        for ($i = 0; $i <= $number; $i++) {
            $result = $result . chr(mt_rand(65, 95));
        }
        echo $result;
    }

    public function help()
    {
        return 'Genetare random symbols';
    }
}