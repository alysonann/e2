<?php
namespace App\Controllers;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);

        //$this->products = new Products($this->app->path('database/products.json'));
    }
    public function index()
    {
        return $this->app->view(
            'products.index',
            [
                'products'=> $this->app->db()->all('products')
                ]
        );
    }
    public function show()
    {
        $id = $this->app->param("id");
        # If no id is present, send the user to the products page
        if (is_null($id)) {
            $this->app->redirect('/products');
        }
        
        //$product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);

        if (is_null($product)) {
            //return $this->app->view("errors.404");
            return $this->app->view(
                "products.missing",
                ['id'=>$id]
            );
        }
        # Load the review details
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);
        // dump($reviews);

        $confirmationName = $this->app->old("confirmationName");

        return $this->app->view("products.show", [
            'product'=>$product,
            'reviews'=>$reviews,
            'confirmationName'=>$confirmationName
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([

            'name'=>'required',
            'content'=>'required|minLength:200',
        ]);
        //dump($_POST);
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');
        #$abc = $this->app->input('abc', 123);

        // dump($name);
        // dump($content);
        // dump($id);
        // dump($abc);

        # insert into the database
        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];

        $this->app->db()->insert('reviews', $data);

    
        # Send the user back to the product page with a 'confirmationName'
        # we'll use to display a confirmation message.
        $this->app->redirect('/product?id='.$id, ['confirmationName'=>$name]);
    }
}