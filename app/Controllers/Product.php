<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ProductModel;
 
class Product extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['product'] = $model->getProduct();
        echo view('product',$data);
    }

    public function add_new()
    {
        echo view('tambahproduct');
    }
 
    public function save()
    {
        $request = \Config\Services::request();
        $model = new ProductModel();
        $data = array(
            'name'  => $request->getPost('name'),
            'price' => $request->getPost('price'),
            'quantity' => $request->getPost('quantity'),
        );
        $model->saveProduct($data);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->getProduct($id)->getRow();
        echo view('editproduct', $data);
    }
 
    public function update()
    {
        $request = \Config\Services::request();
        $model = new ProductModel();
        $id = $request->getPost('id');
        $data = array(
            'name'  => $request->getPost('name'),
            'price' => $request->getPost('price'),
            'quantity' => $request->getPost('quantity'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('/product');
    }
 
    public function delete($id)
    {
        $model = new ProductModel();
        $model->deleteProduct($id);
        return redirect()->to('/product');
    }
}