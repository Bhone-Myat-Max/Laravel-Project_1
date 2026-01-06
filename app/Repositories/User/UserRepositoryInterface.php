<?php
namespace App\Repositories\User;

interface UserRepositoryInterface{
    public function list();
    // public function store( $validedData);
    public function delete($id);
    //  public function update(ProductUpdateRequest $request);
    //  public function show($id);

}
