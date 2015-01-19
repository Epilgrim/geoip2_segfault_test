<?php

namespace GeoipReader;

use MaxMind\Db\Reader;

class Test
{
    private $reader;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function callTheReader()
    {
        $this->reader->get('8.8.8.8');
    }
}
