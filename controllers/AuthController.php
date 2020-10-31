<?php

include_once "../classes/core/Controller.php";
include_once "../models/UserModel.php";



class AuthController extends Controller
{

    public function registerPageNow($request)
    {
        $registerModel=new UserModel();

       if($request->isPost()){
         
        $registerModel->loadData($request->getBody());
        if( $registerModel->register()){
                return "Success";
        }
    }
       
     /*echo '<pre>';
    var_dump($registerModel->errors);
    echo '</pre>';
    exit; */
 
       /*return $this->render('register',[
           'model'=>$registerModel
       ]);*/
       
    }

    public function signInPageNow($request)
    {
        $signInModel=new UserModel();

       if($request->isPost()){
         
        $signInModel->loadData($request->getBody());
        if( $signInModel->signIn()){
                return "Success";
        }
    }
}      

    public function registerPage()
    {
        return $this->render('register');

    }


    public function logout()
    {
        // logout
    
    }
    public function getMy($request) {
        if($request->isPost()) {
            //from
            return 'success';
        }
        return $this->render('admin');
 
    }
    
   public function signInPage(){
    return $this->render('signIn');
    }
}

   

    /*public function isLoggedIn()
    {

        // checks whether user is logged in or not
    }

    public function forgotPassword()
    {
        // user forget the password
    }

    public function resetPassword()
    {
        // reset password
    }

    public function updatePassword()
    {
        // updates the password
    }

    public function restricTo()
    {
        // grant permission
    }

    public function protect()
    {
        // protect the route
    }*/


