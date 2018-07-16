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
        'name'  => 'User',
    ];

    public function type()
    {
        return GraphQL::type('UserType');
    }

    public function args()
    {
        return [
           'id' =>  [
               'type' => Type::nonNull(Type::int())
           ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields)
    {
        return User::all();
    }

}
