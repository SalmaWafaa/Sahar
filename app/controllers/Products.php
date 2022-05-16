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
    /*public function editcontact(){
$editcontact=$this-›getModel();
if ($ SERVER['REQUEST _METHOD' ]
== 'POST' ){
$id=$_ POST[' submit'];
$image="card{$id}o";
$card="card{$id}1";
$link="card{$id}2";
$editcontact-›setCaption($ POST| $card]) ;
$editcontact-›setLink($_POST[$link]);
$root = $_SERVER[ ' DOCUMENT ROOT' ]."/sheinaddict/app/views/images/":
$dir= ImageRoot;
$fileName1=$root.basename ($ FILES[$image ]['name']);
move_uploaded_file($_FILES[$image ][' tmp_name'],$fileName1);
/*
 //$root = $ SERVER[ "DOCUMENT ROOT" 7.
"/sheinaddict/app/views/images/";
/ $dir= ImageRoot;
// $fileName1=basename ($ FILES[ $image][ 'name' 1) ;
/1 move uploaded file($_FILES[$image][ 'tmp name '], ImageRoot . $_FILES[$image]["name" ]);
// $uploads dir = ImageRoot.
"category/";
/1 $fileName=$ FILES[$image][ 'name'];
/1 $fileName1=basename ($ FILES[$image][ 'name ' ]);
///1 move_uploaded _file(sfileName,"$uploads_dir/$fileName1");

$editcontact-›setcontactImage (trim ($fileName1));
$result-$editcontact-›editcontact($_POST[' submit' ]);
/*
//if(I$result){
echo
"‹script› alert('{$ POST[ $card]} ) </script›";
}*/
    public function edit_delete_product()
    {
        $edit_delete_productModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $edit_delete_productModel->setPName(trim($_POST['Product_Name']));
        $edit_delete_productModel->setProductDesc(trim($_POST['Product_Description']));
        //$edit_delete_productModel->setimg(trim($_POST['Product_Image']));
        $edit_delete_productModel->setProductPrice(trim($_POST['Product_Price']));
        $edit_delete_productModel->setProductQuantity(trim($_POST['Product_Quantity']));
        
        /*$dir=ImageRoot ;
        $fileName1=$_FILES[$edit_delete_productModel->setimg(trim($_POST['Product_Image']))]['name'];
        move_uploaded_file($_FILES[$edit_delete_productModel->setimg(trim($_POST['Product_Image']))]['tmp_name'], $dir.$fileName1);*/

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
            

            if ($edit_delete_productModel->editProducts($_POST[' submit' ])) {
                
                flash('register_success', 'You have Edited product successfully');
                redirect('products/shop');
            } else {
                die('Error in adding product');
            }
        
    }
    
        $viewPath = VIEWS_PATH . 'products/edit_delete_product.php';
        require_once $viewPath;
        $view = new edit_delete_product($this->getModel(), $this);
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
    public function edit_prod(){
        $viewPath= VIEWS_PATH . 'products/edit_prod.php';
        require_once $viewPath;
        $edit=new edit_prod($this->getModel(),$this);
        $edit->output();
    }
    

    
}