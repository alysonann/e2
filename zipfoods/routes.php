<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'],
    '/products' => ['ProductController', 'index'],
    '/product' => ['ProductController', 'show'],
    '/products/save-review' => ['ProductController','saveReview'],
    '/about' => ['ProductController', 'about'],
    '/practice'=>['AppController','practice'],
    '/practice2'=>['AppController','practice2']

];