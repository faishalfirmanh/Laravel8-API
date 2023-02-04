<?php
namespace App\Repository\K1\Product;

interface ProductRepo{
    public function getAllProduct();
    public function getProductPaginate($limit);
    public function getProductSearch($keyword);
    public function getProductById($id);
    public function postProduct($data);
    public function updateProduct($id, $data);
    public function deleteProduct($id);
}