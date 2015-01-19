<?php

namespace spec\GeoipReader;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Maxmind\Db\Reader;

class TestSpec extends ObjectBehavior
{
    public function let(Reader $reader){
        $this->beConstructedWith($reader);
    }

    function it_calls_the_reader(Reader $reader)
    {
        $reader->get('8.8.8.8')->shouldBeCalled();

        $this->callTheReader();
    }
}
