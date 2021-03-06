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
    public function contact()
    {
        $contactModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $contactModel->setuserMail(trim($_POST['Email']));
            $contactModel-> setdsent(date("Y-m-d"));
            $contactModel->setuserID(($_SESSION['user_id']));
            $contactModel->setSubj(trim($_POST['Subject']));
            $contactModel->setmsg(trim($_POST['Message']));
            /*if (empty($add_categoryModel->getCategoryName())) {
                $add_categoryModel->setCategoryNameErr('Please enter a name for the category');
            } elseif ($add_categoryModel->CategoryExist($_POST['Category_Name'])) {
                $add_categoryModel->setCategoryNameErr('There is already a category with that name');
            }
           
            if (
                empty($add_categoryModel->getCategoryNameErr())
               
            ) {*/
                

                if ($contactModel->contactMsg()) {
                    //alert
                    flash('message_sent', 'Message Sent');
                    //redirect('products/categories');
                } else {
                    die('Error sending message');
                }
            //}
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
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
    public function view_messages(){
        $viewPath= VIEWS_PATH . 'pages/view_messages.php';
        require_once $viewPath;
        $ViewOrdersView=new view_messages($this->getModel(),$this);
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
    public function search(){
        $viewPath= VIEWS_PATH . 'pages/search.php';
        require_once $viewPath;
        $dashboardView=new search($this->getModel(),$this);
        $dashboardView->output();
    }
    public function fetch(){
        $viewPath= VIEWS_PATH . 'pages/fetch.php';
        require_once $viewPath;
        $dashboardView=new fetch($this->getModel(),$this);
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

