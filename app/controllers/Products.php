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
            $add_productModel->setPrice(trim($_POST['Product_Price']));
            $add_productModel->setQuantity(trim($_POST['Product_Quantity']));
            $add_productModel->setCategory(trim($_POST['q1']));

            $dir= ImageRoot;
            $fileName1=$_FILES['Product_Image_1']['name'];
            move_uploaded_file($_FILES['Product_Image_1']['tmp_name'], $dir.$fileName1);
            $add_productModel->setimg1(trim($fileName1));
            $fileName2=$_FILES['Product_Image_2']['name'];
            move_uploaded_file($_FILES['Product_Image_2']['tmp_name'], $dir.$fileName2);
            $add_productModel->setimg2(trim($fileName2));
            $fileName3=$_FILES['Product_Image_3']['name'];
            move_uploaded_file($_FILES['Product_Image_3']['tmp_name'], $dir.$fileName3);
            $add_productModel->setimg3(trim($fileName3));

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
                    //alert
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
 
    public function edit_delete_product()
    {
        $edit_delete_productModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dir= ImageRoot;
            $fileName1=$_FILES['Product_Image']['name'];
            move_uploaded_file($_FILES['Product_Image']['tmp_name'], $dir.$fileName1);
           // $edit_delete_productModel->setProductimg1(trim($fileName1));
            $fileName2=$_FILES['Product_Image2']['name'];
            move_uploaded_file($_FILES['Product_Image2']['tmp_name'], $dir.$fileName2);
            //$edit_delete_productModel->setProductimg2(trim($fileName2));
            $fileName3=$_FILES['Product_Image2']['name'];
            move_uploaded_file($_FILES['Product_Image3']['tmp_name'], $dir.$fileName3);
           // $edit_delete_productModel->setProductimg3(trim($fileName3));
        $edit_delete_productModel->setPName(trim($_POST['Product_Name']));
        $edit_delete_productModel->setProductDesc(trim($_POST['Product_Description']));
        $edit_delete_productModel->setProductimg1(trim($_POST['Product_Image']));
        $edit_delete_productModel->setProductimg2(trim($_POST['Product_Image2']));
        $edit_delete_productModel->setProductimg3(trim($_POST['Product_Image3']));
        $edit_delete_productModel->setProductPrice(trim($_POST['Product_Price']));
        $edit_delete_productModel->setProductQuantity(trim($_POST['Product_Quantity']));
        
        //validation
        /*if (empty($edit_delete_productModel->getDescription())) {
            $edit_delete_productModel->setDescriptionErr('Please enter description for product');
        }
        if (empty($edit_delete_productModel->getPrice())) {
            $edit_delete_productModel->setPriceErr('Please enter price for product');
        }
        if (empty($edit_delete_productModel->getProductName())) {
            $edit_delete_productModel->setproductNameErr('Please enter a name for the product');
        } elseif ($edit_delete_productModel->ProductExist($_POST['Product_Name'])) {
            $edit_delete_productModel->setproductNameErr('There is already a product with that name');
        }
        if (empty($edit_delete_productModel->getPrice())) {
            $edit_delete_productModel->setPriceErr('Please enter price for product');
        } 
        
        if (empty($edit_delete_productModel->getQuantity())) {
            $edit_delete_productModel->setQuantityErr('Please enter Quantity of that product');
        }
        
        if (
            empty($edit_delete_productModel->getProductNameErr()) &&
            empty($edit_delete_productModel->getDescriptionErr())&&
            empty($edit_delete_productModel->getQuantityErr()) &&
            empty($edit_delete_productModel->getPriceErr()) 
            
           

        ) {*/
            if ($edit_delete_productModel->editProducts($_GET['id'])) {
                
                flash('register_success', 'You have Edited product successfully');
                redirect('products/shop?id='.$edit_delete_productModel->getProductCatID($_GET['id']));
            } else {
                die("Error in editting Product");
            }
    }
    
        $viewPath = VIEWS_PATH . 'products/edit_delete_product.php';
        require_once $viewPath;
        $view = new edit_delete_product($this->getModel(), $this);
        $view->output();
    }

    public function Edit_category()
    {
        $Edit_categoriesModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dir= ImageRoot;
            $fileName1=$_FILES['Category_Image']['name'];
            move_uploaded_file($_FILES['Product_Image']['tmp_name'], $dir.$fileName1);
        $Edit_categoriesModel->setCName(trim($_POST['Category_Name']));   
        $Edit_categoriesModel->setCimage(trim($_POST['Category_Image']));
       
        //validation
        /*if (empty($edit_delete_productModel->getDescription())) {
            $edit_delete_productModel->setDescriptionErr('Please enter description for product');
        }
        if (empty($edit_delete_productModel->getPrice())) {
            $edit_delete_productModel->setPriceErr('Please enter price for product');
        }
        if (empty($edit_delete_productModel->getProductName())) {
            $edit_delete_productModel->setproductNameErr('Please enter a name for the product');
        } elseif ($edit_delete_productModel->ProductExist($_POST['Product_Name'])) {
            $edit_delete_productModel->setproductNameErr('There is already a product with that name');
        }
        if (empty($edit_delete_productModel->getPrice())) {
            $edit_delete_productModel->setPriceErr('Please enter price for product');
        } 
        
        if (empty($edit_delete_productModel->getQuantity())) {
            $edit_delete_productModel->setQuantityErr('Please enter Quantity of that product');
        }
        
        if (
            empty($edit_delete_productModel->getProductNameErr()) &&
            empty($edit_delete_productModel->getDescriptionErr())&&
            empty($edit_delete_productModel->getQuantityErr()) &&
            empty($edit_delete_productModel->getPriceErr()) 
            
           

        ) {*/
            if ($Edit_categoriesModel->editCategories($_GET['id'])) {
                
                flash('register_success', 'You have Edited category successfully');
                redirect('products/categories');
            } else {
                die("Error in editting Category");
            }
    }
    
        $viewPath = VIEWS_PATH . 'products/Edit_category.php';
        require_once $viewPath;
        $view = new Edit_category($this->getModel(), $this);
        $view->output();
    }

    public function categories()
    {
        $viewPath = VIEWS_PATH . 'products/categories.php';
        require_once $viewPath;
        $categoriesView = new categories($this->getModel(), $this);
        $categoriesView->output();
    }
    public function add_category()
    {
        $add_categoryModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $add_categoryModel->setCategoryName(trim($_POST['Category_Name']));
            $dir= ImageRoot;
            $fileName1=$_FILES['Category_Image']['name'];
            move_uploaded_file($_FILES['Category_Image']['tmp_name'], $dir.$fileName1);
            $add_categoryModel->setCategoryImage(trim($fileName1));
            //validation
           
            if (empty($add_categoryModel->getCategoryName())) {
                $add_categoryModel->setCategoryNameErr('Please enter a name for the category');
            } elseif ($add_categoryModel->CategoryExist($_POST['Category_Name'])) {
                $add_categoryModel->setCategoryNameErr('There is already a category with that name');
            }
           
            if (
                empty($add_categoryModel->getCategoryNameErr())
               
            ) {
                

                if ($add_categoryModel->add_category()) {
                    //alert
                    flash('register_success', 'You have added category successfully');
                    redirect('products/categories');
                } else {
                    die('Error in adding category');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'products/add_category.php';
        require_once $viewPath;
        $view = new add_category($this->getModel(), $this);
        $view->output();
    }
    public function shop()
    {
        $viewPath = VIEWS_PATH . 'products/shop.php';
        require_once $viewPath;
        $shopView = new shop($this->getModel(), $this);
        $shopView->output();
    }
    
    public function product()
    {
        $viewPath = VIEWS_PATH . 'products/product.php';
        require_once $viewPath;
        $productView = new product($this->getModel(), $this);
        $productView->output();
    }
    public function review()
    {
        $viewPath = VIEWS_PATH . 'products/review.php';
        require_once $viewPath;
        $reviewView = new review($this->getModel(), $this);
        $reviewView->output();
    }
    
    public function cart()
    {
        $viewPath = VIEWS_PATH . 'products/cart.php';
        require_once $viewPath;
        $cartView = new cart($this->getModel(), $this);
        $cartView->output();
    }
  
    public function Checkout(){
        $viewPath= VIEWS_PATH . 'products/Checkout.php';
        require_once $viewPath;
        $CheckoutView=new Checkout($this->getModel(),$this);
        $CheckoutView->output();
    }     
    public function offers()
    {
        $viewPath = VIEWS_PATH . 'products/offers.php';
        require_once $viewPath;
        $offersView = new offers($this->getModel(), $this);
        $offersView->output();
    }

    public function add_offer()
    {
        $add_offerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $add_offerModel->setOfferProductName(trim($_POST['Offer_Name']));
            //validation
            if (
                empty($add_offerModel->getOfferProductNameErr())
            ) {
                if ($add_offerModel->add_offerr()) {
                    //alert
                    flash('register_success', 'You have added product successfully');
                    redirect('products/shop');
                } else {
                    die('Error in adding product');
                }
            }
        }
        // Load form
        $viewPath = VIEWS_PATH . 'products/add_offer.php';
        require_once $viewPath;
        $view = new add_offer($this->getModel(), $this);
        $view->output();
    }
    public function edit_prod(){
        $viewPath= VIEWS_PATH . 'products/edit_prod.php';
        require_once $viewPath;
        $edit=new edit_prod($this->getModel(),$this);
        $edit->output();
    }

    public function Ordershistory(){
        $viewPath= VIEWS_PATH . 'products/Ordershistory.php';
        require_once $viewPath;
        $Ordershis=new Ordershistory($this->getModel(),$this);
        $Ordershis->output();
    }
    
    public function view_categories(){
        $viewPath= VIEWS_PATH . 'products/view_categories.php';
        require_once $viewPath;
        $ViewCView=new view_categories($this->getModel(),$this);
        $ViewCView->output();
    }
    
}