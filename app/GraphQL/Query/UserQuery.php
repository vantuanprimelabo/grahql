<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\User;

class UserQuery extends Query
{
    protected $attributes = [
        'name'  => 'users',
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('User'));
    }

    public function args()
    {
        return [
//           'id' =>  [
//               'type' => Type::nonNull(Type::int())
//           ]
        ];
    }

    public function resolve()
    {
        return User::all();
    }

}
