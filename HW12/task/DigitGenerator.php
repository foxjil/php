<?php
require_once '<task>lib/interface.php';

class GigitGenerator implements CommandInterface {

    public function getName()
    {
        return 'numgen';
    }

    public function execute()
    {
        echo mt_rand(0, 1000);
    }

    public function help()
    {
        return 'Generate random digit';
    }
}