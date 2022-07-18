<?php

namespace Babyandy0111\Laraberg\Test;

use Laraberg;
use Babyandy0111\Laraberg\Test\TestCase;

class LarabergTest extends TestCase
{
    /**
     * Check that the do stuff function returns void
     * @return void
     */
    public function testDoStuffReturnsVoid()
    {
        $this->assertSame(Laraberg::doStuff(), 'Did stuff');
    }
}
