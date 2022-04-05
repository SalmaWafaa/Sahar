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
   
    public function view_users(){
        $viewPath= VIEWS_PATH . 'pages/view_users.php';
        require_once $viewPath;
        $ViewUsersView=new view_users($this->getModel(),$this);
        $ViewUsersView->output();
    }
    public function dashboard(){
        $viewPath= VIEWS_PATH . 'pages/dashboard.php';
        require_once $viewPath;
        $dashboardView=new dashboard($this->getModel(),$this);
        $dashboardView->output();
    }
   
}

