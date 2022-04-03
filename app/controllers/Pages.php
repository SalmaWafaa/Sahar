<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }
    public function gallery()
    {
        $viewPath = VIEWS_PATH . 'pages/Gallery.php';
        require_once $viewPath;
        $galleryView = new gallery($this->getModel(), $this);
        $galleryView->output();
    }

<<<<<<< HEAD
public function categories()
    {
        $viewPath = VIEWS_PATH . 'pages/categories.php';
        require_once $viewPath;
        $categoriesView = new categories($this->getModel(), $this);
        $categoriesView->output();
    }
    public function shop()
    {
        $viewPath = VIEWS_PATH . 'pages/shop.php';
        require_once $viewPath;
        $shopView = new shop($this->getModel(), $this);
        $shopView->output();
    }
    public function add_product()
    {
        $viewPath = VIEWS_PATH . 'pages/add_product.php';
        require_once $viewPath;
        $add_productView = new add_product($this->getModel(), $this);
        $add_productView->output();
    }


    public function review()
    {
        $viewPath = VIEWS_PATH . 'pages/review.php';
        require_once $viewPath;
        $reviewView = new review($this->getModel(), $this);
        $reviewView->output();
    }
    
=======

>>>>>>> ac415c118b83d711a2fe61355297d9498931e949
}

