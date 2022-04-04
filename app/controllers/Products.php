<?php
class Products extends Controller
{
    public function add_product()
    {
        $add_productModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $add_productModel->setproductName(trim($_POST['Product_Name']));
            $add_productModel->setDescription(trim($_POST['Product_Description']));
            //$add_productModel->setimg(trim($_POST['Product_Image']));
            $add_productModel->setPrice(trim($_POST['Product_Price']));
            $add_productModel->setQuantity(trim($_POST['Product_Quantity']));
            
            /*$dir=ImageRoot ;
	        $fileName1=$_FILES[$add_productModel->setimg(trim($_POST['Product_Image']))]['name'];
	        move_uploaded_file($_FILES[$add_productModel->setimg(trim($_POST['Product_Image']))]['tmp_name'], $dir.$fileName1);*/

            //validation
            if (empty($add_productModel->getDescription())) {
                $add_productModel->setDescriptionErr('Please enter description for product');
            }
            if (empty($add_productModel->getPrice())) {
                $add_productModel->setPriceErr('Please enter price for product');
            }
            if (empty($add_productModel->getProductName())) {
                $add_productModel->setproductNameErr('Please enter a name for the product');
            } elseif ($add_productModel->ProductExist($_POST['Product_Name'])) {
                $add_productModel->setproductNameErr('There is already a product with that name');
            }
            if (empty($add_productModel->getPrice())) {
                $add_productModel->setPriceErr('Please enter price for product');
            } 
            
            if (empty($add_productModel->getQuantity())) {
                $add_productModel->setQuantityErr('Please enter Quantity of that product');
            }
            
            if (
                empty($add_productModel->getProductNameErr()) &&
                empty($add_productModel->getDescriptionErr())&&
                empty($add_productModel->getQuantityErr()) &&
                empty($add_productModel->getPriceErr()) 
                
               

            ) {
                

                if ($add_productModel->add_product()) {
                    
                    flash('register_success', 'You have added product successfully');
                    redirect('products/shop');
                } else {
                    die('Error in adding product');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'products/add_product.php';
        require_once $viewPath;
        $view = new add_product($this->getModel(), $this);
        $view->output();
    }
    /*public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $userModel->setEmail(trim($_POST['email']));
            $userModel->setPassword(trim($_POST['password']));

            //validate login form
            if (empty($userModel->getEmail())) {
                $userModel->setEmailErr('Please enter an email');
            } elseif (!($userModel->emailExist($_POST['email']))) {
                $userModel->setEmailErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 8) {
                $userModel->setPasswordErr('Password must contain at least 8 characters');
            }

            // If no errors
            if (
                empty($userModel->getEmailErr()) &&
                empty($userModel->getPasswordErr())
            ) {
                //Check login is correct
                $loggedUser = $userModel->login();
                if ($loggedUser) {
                    //create related session variables
                    $this->createUserSession($loggedUser);
                    die('Success log in User');
                } else {
                    $userModel->setPasswordErr('Password is not correct');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'products/Login.php';
        require_once $viewPath;
        $view = new Login($userModel, $this);
        $view->output();
    }
    public function editprofile()
    {
        $EditProfileModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $EditProfileModel->setFName(trim($_POST['first_name']));
            $EditProfileModel->setLName(trim($_POST['last_name']));
            $EditProfileModel->setEmail(trim($_POST['email']));
            $EditProfileModel->setPassword(trim($_POST['password']));
            $EditProfileModel->setConfirmPassword(trim($_POST['confirm_password']));
            $EditProfileModel->setAddress(trim($_POST['address']));
            $EditProfileModel->setMobile(trim($_POST['mobile']));


            //validation
            if (empty($EditProfileModel->getFName())) {
                $EditProfileModel->setFNameErr('Please enter your first name');
            }
            if (empty($EditProfileModel->getLName())) {
                $EditProfileModel->setLNameErr('Please enter your last name');
            }
            if (empty($EditProfileModel->getEmail())) {
                $EditProfileModel->setEmailErr('Please enter an email');
            } elseif ($EditProfileModel->emailExist($_POST['email'])) {
                $EditProfileModel->setEmailErr('Email is already registered');
            }
            if (empty($EditProfileModel->getPassword())) {
                $EditProfileModel->setPasswordErr('Please enter a password');
            } elseif (strlen($EditProfileModel->getPassword()) < 8) {
                $EditProfileModel->setPasswordErr('Password must contain at least 8 characters');
            }

            if ($EditProfileModel->getPassword() != $EditProfileModel->getConfirmPassword()) {
                $EditProfileModel->setConfirmPasswordErr('Passwords do not match');
            }
            
            if (empty($EditProfileModel->getAddress())) {
                $EditProfileModel->setAddressErr('Please enter address');
            }
            if (empty($EditProfileModel->getMobile())) {
                $EditProfileModel->setMobileErr('Please enter your mobile number');
            } elseif(strlen($EditProfileModel->getMobile()) < 11){
                $EditProfileModel->setMobileErr('Mobile number must not be less than 11 characters check again');
            }

            if (
                empty($EditProfileModel->getFNameErr()) &&
                empty($EditProfileModel->getLNameErr())&&
                empty($EditProfileModel->getEmailErr()) &&
                empty($EditProfileModel->getPasswordErr()) &&
                empty($EditProfileModel->getConfirmPasswordErr())&&
                empty($EditProfileModel->getAddressErr())&&
                empty($EditProfileModel->getMobileErr())

            ) {
                //Hash Password
                $EditProfileModel->setPassword(password_hash($EditProfileModel->getPassword(), PASSWORD_DEFAULT));

                if ($EditProfileModel->Edit()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('Edit_success', 'You have editted your profile successfully');
                    redirect('products/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'products/EditProfile.php';
        require_once $viewPath;
        $view = new EditProfile($this->getModel(), $this);
        $view->output();
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_Fname'] = $user->fname;
        $_SESSION['user_Lname'] = $user->lname;
        $_SESSION['user_address'] = $user->addr;
        $_SESSION['user_mobile'] = $user->mob;
        $_SESSION['user_Email'] = $user->email;
        //header('location: ' . URLROOT . 'pages');
        redirect('products');
    }*/
    public function categories()
    {
        $viewPath = VIEWS_PATH . 'products/categories.php';
        require_once $viewPath;
        $categoriesView = new categories($this->getModel(), $this);
        $categoriesView->output();
    }
    public function shop()
    {
        $viewPath = VIEWS_PATH . 'products/shop.php';
        require_once $viewPath;
        $shopView = new shop($this->getModel(), $this);
        $shopView->output();
    }
    /*public function add_product()
    {
        $viewPath = VIEWS_PATH . 'products/add_product.php';
        require_once $viewPath;
        $add_productView = new add_product($this->getModel(), $this);
        $add_productView->output();
    }*/

    
}
