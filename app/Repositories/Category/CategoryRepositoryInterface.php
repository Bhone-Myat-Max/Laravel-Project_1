<?php
namespace App\Repositories\Category;

interface CategoryRepositoryInterface{
    public function index();
    public function store( $validedData);
    public function delete($id);

}
