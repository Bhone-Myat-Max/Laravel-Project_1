<?php
namespace App\Repositories\Product;

interface ProductRepositoryInterface{
    public function index();
    // public function store( $validedData);
    // public function delete($id);
    //  public function update(ProductUpdateRequest $request);
     public function show($id);

}
