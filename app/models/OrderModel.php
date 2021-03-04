<?php

// namespace App\Models;

class OrderModel
{
    protected $table = 'orders';

    public function getOrder() {
        $query = QueryPixie::table($this->table)->get();
        return $query;
    }
}
