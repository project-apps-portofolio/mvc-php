<?php

// namespace App\Models;

class CategoryModel
{
    private $table = 'categories';

    public function getCategory()
    {
        $query = QueryPixie::table($this->table)->get();
        return $query;
    }

    public function postCategory($name, $description)
    {

        $data = array(
            'name' => $name,
            'description' => $description
        );

        $query = QueryPixie::table($this->table)->insert($data);

        return $query;
    }

    public function updateCategory($id, $name, $description) {
        $data = array(
            'name' => $name,
            'description' => $description
        );

        $query = QueryPixie::table($this->table)->where('id', $id)->update($data);

        return $query;
    }
}
