<?php

declare(strict_types=1);

namespace WickedOne\PsalmTest;

class Foo
{
    /**
     * comment out the first assignment and uncomment the second one to
     * make the UnusedBaselineEntry error disappear
     */
    public function bar(): void
    {
        $baz[] = 'qux';
        //$baz = ['qux'];
    }
}