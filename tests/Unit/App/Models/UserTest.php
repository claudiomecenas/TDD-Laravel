<?php

namespace Tests\Unit\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class UserTest extends TestCase
{
   
    protected function model(): Model 
    {
        return new User();
    }

    public function test_traits(): void
    {
        $traits = array_keys(class_uses($this->model()));

        $expectedTraits = [
            HasFactory::class,
            Notifiable::class,
        ];

        $this->assertEquals($expectedTraits, $traits);
    }
}
