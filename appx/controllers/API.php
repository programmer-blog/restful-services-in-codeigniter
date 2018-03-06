<?php

require(APPPATH.'/libraries/REST_Controller.php');
 
class Api extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();

        $this->load->model('book_model');
    }

    //API - client sends isbn and on valid isbn book information is sent back
    function bookByIsbn_get(){

        $isbn  = $this->get('isbn');
        
        if(!$isbn){

            $this->response("No ISBN specified", 400);

            exit;
        }

        $result = $this->book_model->getbookbyisbn( $isbn );

        if($result){

            $this->response($result, 200); 

            exit;
        } 
        else{

             $this->response("Invalid ISBN", 404);

            exit;
        }
    } 

    //API -  Fetch All books
    function books_get(){

        $result = $this->book_model->getallbooks();

        if($result){

            $this->response($result, 200); 

        } 

        else{

            $this->response("No record found", 404);

        }
    }
     
    //API - create a new book item in database.
    function addBook_post(){

         $name      = $this->post('name');

         $price     = $this->post('price');

         $author    = $this->post('author');

         $category  = $this->post('category');

         $language  = $this->post('language');

         $isbn      = $this->post('isbn');

         $pub_date  = $this->post('publish_date');
        
         if(!$name || !$price || !$author || !$price || !$isbn || !$category){

                $this->response("Enter complete book information to save", 400);

         }else{

            $result = $this->book_model->add(array("name"=>$name, "price"=>$price, "author"=>$author, "category"=>$category, "language"=>$language, "isbn"=>$isbn, "publish_date"=>$pub_date));

            if($result === 0){

                $this->response("Book information coild not be saved. Try again.", 404);

            }else{

                $this->response("success", 200);  
           
            }

        }

    }

    
    //API - update a book 
    function updateBook_put(){
         
         $name      = $this->put('name');

         $price     = $this->put('price');

         $author    = $this->put('author');

         $category  = $this->put('category');

         $language  = $this->put('language');

         $isbn      = $this->put('isbn');

         $pub_date  = $this->put('publish_date');

         $id        = $this->put('id');
         
         if(!$name || !$price || !$author || !$price || !$isbn || !$category){

                $this->response("Enter complete book information to save", 400);

         }else{
            $result = $this->book_model->update($id, array("name"=>$name, "price"=>$price, "author"=>$author, "category"=>$category, "language"=>$language, "isbn"=>$isbn, "publish_date"=>$pub_date));

            if($result === 0){

                $this->response("Book information coild not be saved. Try again.", 404);

            }else{

                $this->response("success", 200);  

            }

        }

    }

    //API - delete a book 
    function deleteBook_delete()
    {

        $id  = $this->delete('id');

        if(!$id){

            $this->response("Parameter missing", 404);

        }
         
        if($this->book_model->delete($id))
        {

            $this->response("Success", 200);

        } 
        else
        {

            $this->response("Failed", 400);

        }

    }


}