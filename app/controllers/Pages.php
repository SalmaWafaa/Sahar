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
    
    public function cart()
    {
        $viewPath = VIEWS_PATH . 'pages/cart.php';
        require_once $viewPath;
        $cartView = new cart($this->getModel(), $this);
        $cartView->output();
    }
    public function contact(){
        $viewPath= VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView=new Contact($this->getModel(),$this);
        $contactView->output();
    }
    public function view_order(){
        $viewPath= VIEWS_PATH . 'pages/view_order.php';
        require_once $viewPath;
        $ViewOrdersView=new view_order($this->getModel(),$this);
        $ViewOrdersView->output();
    }
   

    public function dashboard(){
        $viewPath= VIEWS_PATH . 'pages/dashboard.php';
        require_once $viewPath;
        $dashboardView=new dashboard($this->getModel(),$this);
        $dashboardView->output();
    public function shop()
    {
        $viewPath = VIEWS_PATH . 'products/shop.php';
        require_once $viewPath;
        $shopView = new shop($this->getModel(), $this);
        $shopView->output();
    }

    public function product()
    {
        $viewPath = VIEWS_PATH . 'pages/product.php';
        require_once $viewPath;
        $productView = new product($this->getModel(), $this);
        $productView->output();
    }
}

