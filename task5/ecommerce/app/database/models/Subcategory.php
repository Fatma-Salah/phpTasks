<?php
namespace app\database\models;
use app\database\config\connection ;
class Subcategory extends connection { 
     private $id , $name_en ,$name_ar , $image ,$category_id ,$status ,$created_at ,$updated_at; 
     // set and getfor id

     public function setId($id)
     {
         $this->id = $id;
     }
     public function getId()
     {
         return $this->id;
     }
     
       // set and get for name_en
       public function setName_en($name_en)
       {
           $this->name_en = $name_en;
       }
       public function getName_en()
       {
           return $this->name_en;
       }
      

       //set and get for name_ar
       public function setName_ar($name_ar)
       {
           $this->name_ar = $name_ar;
       }
       public function getName_ar()
       {
           return $this->name_ar;
       }
      

       //set and get for status
       public function setStatus($status)
       {
            $this->status = $status;
       }
 
       public function getStatus()
       {
            return $this->status ;
       }
      
       //set and get for created at
       public function setCreatedAt($created_at)
       {
            $this->created_at = $created_at;
       }
       public function getCreateAt()
       {
            return $this->created_at ;
       }
    
        //set and get for updated at
        public function setUpdatedAt($updated_at)
        {
             $this->updated_at = $updated_at;
        }
        public function getUpdateAt()
        {
             return $this->updated_at ;
        }
         //set and get for image
         public function setImage($image)
         {
              $this->image = $image;
         }
         public function getImage()
         {
              return $this->image ;
         }

          //set and get for category_id
        public function setCategory_id($category_id)
        {
             $this->category_id = $category_id;
        }
        public function getCategory_id()
        {
             return $this->category_id ;
        }
//methods 
public function getSubcategory()
{

    $query = "SELECT `id`,`name_en` FROM `sub_categories` WHERE `category_id` = {$this->category_id} ";
    return $this->runDQL($query);
}

public function find()
{
    $query = "SELECT `id`,`name_en` FROM `sub_categories` WHERE `id` = {$this->id} ";
    return $this->runDQL($query);
}


}
?>