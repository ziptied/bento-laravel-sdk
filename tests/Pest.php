<?php

use Bentonow\BentoLaravel\Tests\TestCase;
use Saloon\Http\Faking\MockClient;
use Saloon\Config;


Config::preventStrayRequests();
uses(TestCase::class)
    ->beforeEach(fn () => MockClient::destroyGlobal())
    ->in(__DIR__);
