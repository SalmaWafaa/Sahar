<?php
class Users extends Controller
{
    public function register()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $registerModel->setFName(trim($_POST['first_name']));
            $registerModel->setLName(trim($_POST['last_name']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setPassword(trim($_POST['password']));
            $registerModel->setConfirmPassword(trim($_POST['confirm_password']));
            $registerModel->setAddress(trim($_POST['address']));
            $registerModel->setMobile(trim($_POST['mobile']));


            //validation
            if (empty($registerModel->getFName())) {
                $registerModel->setFNameErr('Please enter your first name');
            }
            if (empty($registerModel->getLName())) {
                $registerModel->setLNameErr('Please enter your last name');
            }
            if (empty($registerModel->getEmail())) {
                $registerModel->setEmailErr('Please enter an email');
            } elseif ($registerModel->emailExist($_POST['email'])) {
                $registerModel->setEmailErr('Email is already registered');
            }
            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } elseif (strlen($registerModel->getPassword()) < 8) {
                $registerModel->setPasswordErr('Password must contain at least 8 characters');
            }

            if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
                $registerModel->setConfirmPasswordErr('Passwords do not match');
            }
            
            if (empty($registerModel->getAddress())) {
                $registerModel->setAddressErr('Please enter address');
            }
            if (empty($registerModel->getMobile())) {
                $registerModel->setMobileErr('Please enter your mobile number');
            } elseif(strlen($registerModel->getMobile()) < 11){
                $registerModel->setMobileErr('Mobile number must not be less than 11 characters check again');
            }

            if (
                empty($registerModel->getFNameErr()) &&
                empty($registerModel->getLNameErr())&&
                empty($registerModel->getEmailErr()) &&
                empty($registerModel->getPasswordErr()) &&
                empty($registerModel->getConfirmPasswordErr())&&
                empty($registerModel->getAddressErr())&&
                empty($registerModel->getMobileErr())

            ) {
                //Hash Password
                $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

                if ($registerModel->signup()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('users/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Register.php';
        require_once $viewPath;
        $view = new Register($this->getModel(), $this);
        $view->output();
    }
    public function login()
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
        $viewPath = VIEWS_PATH . 'users/Login.php';
        require_once $viewPath;
        $view = new Login($userModel, $this);
        $view->output();
    }
    public function Editprofile()
    {
        $EditProfileModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $EditProfileModel->setFirstName(trim($_POST['first_name']));
            $EditProfileModel->setLastName(trim($_POST['last_name']));
            $EditProfileModel->setEm(trim($_POST['email']));
            $EditProfileModel->setpass(trim($_POST['password']));
            $EditProfileModel->setConfirmPassword(trim($_POST['confirm_password']));
            $EditProfileModel->setAddr(trim($_POST['address']));
            $EditProfileModel->setMob(trim($_POST['mobile']));


            //validation
            if (empty($EditProfileModel->getFirstName($_SESSION['user_id']))) {
                $EditProfileModel->setFNameErr('Please enter your first name');
            }
            if (empty($EditProfileModel->getLastName($_SESSION['user_id']))) {
                $EditProfileModel->setLNameErr('Please enter your last name');
            }
            if (empty($EditProfileModel->getEm($_SESSION['user_id']))) {
                $EditProfileModel->setEmailErr('Please enter an email');
            } elseif ($EditProfileModel->emailExist($_POST['email'])) {
                $EditProfileModel->setEmailErr('Email is already registered');
            }
            if (empty($EditProfileModel->getpass($_SESSION['user_id']))) {
                $EditProfileModel->setPasswordErr('Please enter a password');
            } elseif (strlen($EditProfileModel->getpass($_SESSION['user_id'])) < 8) {
                $EditProfileModel->setPasswordErr('Password must contain at least 8 characters');
            }

           /* if ($EditProfileModel->getpassword($_SESSION['user_id'])) != $EditProfileModel->getConfirmPassword($_SESSION['user_id']) {
                $EditProfileModel->setConfirmPasswordErr('Passwords do not match');
            }*/
          
            if (empty($EditProfileModel->getAddr($_SESSION['user_id']))) {
                $EditProfileModel->setAddressErr('Please enter address');
            }
            if (empty($EditProfileModel->getMob($_SESSION['user_id']))){
                $EditProfileModel->setMobileErr('Please enter your mobile number');
            } elseif(($EditProfileModel->getMob($_SESSION['user_id'])) < 11){
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
                $EditProfileModel->setpass(password_hash($EditProfileModel->getpass($_SESSION['user_id']), PASSWORD_DEFAULT));
                $EditProfileModel->EditProfile($_SESSION['user_id']);
                if ($EditProfileModel->EditProfile($_SESSION['user_id'])) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('Edit_success', 'You have editted your profile successfully');
                    redirect('users/login');
                } else {
                    die('Error in Edit');
                }
            }
        }
        
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/EditProfile.php';
        require_once $viewPath;
        $view = new EditProfile($this->getModel(), $this);
        $view->output();
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->ID;
        $_SESSION['user_Fname'] = $user->FirstName;
        $_SESSION['user_Lname'] = $user->LastName;
        $_SESSION['user_address'] = $user->Address;
        $_SESSION['user_mobile'] = $user->Mobile;
        $_SESSION['user_Email'] = $user->Email;
        $_SESSION['user_pass']=$user->password;
        $_SESSION['user_Type_ID']=$user->user_Type_ID;
        //header('location: ' . URLROOT . 'pages');
        redirect('pages');
    }

    public function logout()
    {
        echo 'logout called';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }
   
}
