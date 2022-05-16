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
    public function gallery()
    {
        $viewPath = VIEWS_PATH . 'pages/Gallery.php';
        require_once $viewPath;
        $galleryView = new gallery($this->getModel(), $this);
        $galleryView->output();
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
    public function add_gallery()
    {
        $add_galleryModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dir= ImageRoot;
            $fileName1=$_FILES['Image']['name'];
            move_uploaded_file($_FILES['Image']['tmp_name'], $dir.$fileName1);
            $add_galleryModel->setPicName(trim($fileName1));
           
           
           /* if ($add_galleryModel->CategoryExist($_POST['Image'])) {
                $add_galleryModel->setPicNameErr('There is already a picture with that name');
            }*/
           
            if (
                empty($add_galleryModel->getPicNameErr())
               
            ) {
                

                if ($add_galleryModel->add_Pic()) {
                    //alert
                    flash('register_success', 'You have added category successfully');
                    redirect('pages/gallery');
                } else {
                    die('Error in adding category');
                }
            }
        }
        
        $viewPath = VIEWS_PATH . 'pages/add_gallery.php';
        require_once $viewPath;
        $view = new add_gallery($this->getModel(), $this);
        $view->output();
    }
   
 
}

