<?php

// namespace App\Models;

class OrderModel
{
    protected $table = 'orders';

    public function getOrder()
    {
        $query = QueryPixie::table($this->table)->get();
        return $query;
    }

    public function postOrder($data)
    {
        // var_dump($data['tracking_number']); die;
        $data = array(
            "tracking_number" => $data['tracking_number'],
            "customer_id" =>  1,
            "sender_name" => "asd",
            "sender_phone" => "123",
            "sender_address" => "asdad",
            "delivery_name" => "asdads",
            "delivery_phone" => "12323",
            "delivery_address" => "asdasd",
            "category_id" => 3,
            "shipping_cost" => 123,
            "item_price" => 123,
            "is_insurance" => 0,
            "user_id" => 5,
            "user_fee" => 0,
            "note" => "asdads",
            "shipping_photo" => "asdasd",
            "delivered_photo" => "asdasd",
            "status" => "1",
        );

        $query = QueryPixie::table($this->table)->insert($data);

        return $query;
    }
}
