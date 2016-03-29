<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    public function testGetFibonacci()
    {
        $this->visit('/')
            ->type('10', 'count')
            ->press('Listele')
            ->seePageIs('/');
    }
}
