<?php

class Order extends Controller
{
    private $modelOrder;

    function __construct()
    {
        $this->modelOrder = $this->model('OrderModel')->getOrder();
    }

    public function index()
    {
        $data['order'] = $this->modelOrder;
        $data['breadcrumb'] = 'Order';
        $data['img'] = array(
            'title' => 'KNITTING',
            'browser' => 'http://localhost/schedule-timeline-prod/',
            'description' => 'The grid is created using our familiar display: grid; property, where columns are defined using',
            'src' => [
                'https://images.unsplash.com/photo-1471421298428-1513ab720a8e',
                'https://images.unsplash.com/photo-1471421298428-1513ab720a8e',
                'https://images.unsplash.com/photo-1471421298428-1513ab720a8e',
            ],
            'alt' => [
                'Catton',
                'Poly',
                'Catton & Grey',
            ]
        );
        $this->view('/templates/header');
        $this->view('/order/index', $data);
        $this->view('/templates/footer');
    }
}
