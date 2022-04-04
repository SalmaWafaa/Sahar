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





    public function review()
    {
        $viewPath = VIEWS_PATH . 'pages/review.php';
        require_once $viewPath;
        $reviewView = new review($this->getModel(), $this);
        $reviewView->output();
    }
    
    public function contact(){
        $viewPath= VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView=new Contact($this->getModel(),$this);
        $contactView->output();
    }
    public function Checkout(){
        $viewPath= VIEWS_PATH . 'pages/Checkout.php';
        require_once $viewPath;
        $CheckoutView=new Checkout($this->getModel(),$this);
        $CheckoutView->output();
    }
    public function ViewOrders(){
        $viewPath= VIEWS_PATH . 'pages/ViewOrders.php';
        require_once $viewPath;
        $ViewOrdersView=new Checkout($this->getModel(),$this);
        $ViewOrdersView->output();
    }

}

