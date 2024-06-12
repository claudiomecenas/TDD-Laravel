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

    public function test_traits(): void // testar Traits
    {
        $traits = array_keys(class_uses($this->model()));
        // dump($traits);
        // array_keys permite retornar um array com as chaves de um array
        // class_uses permite retornar um array com todas as Traits de uma classe

        $expectedTraits = [
            HasFactory::class,
            Notifiable::class,
        ];

        $this->assertEquals($expectedTraits, $traits);
        // assertEquals compara valores e tipos
    }

    public function test_fillable(): void
    {
        $fillable = $this->model()->getFillable(); 
        // getFillable permite retornar um array com as colunas fillable

        $expectedFillable = [
            'name',
            'email',
            'password',
        ]; // define o fillable desejado
        
        $this->assertEquals($expectedFillable, $fillable); // getFillable permite retornar um array com as colunas fillable
    }
}
