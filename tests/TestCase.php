<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase; // clear database before each test

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;
}
