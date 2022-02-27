<?php
namespace app\database\models;
use app\database\config\connection ;
class Review extends connection { 
     private $product_id ,$user_id ,$comment ,$value ,$created_at ,$updated_at; 

      //set and get for produt id
      public function setProductId($product_id)
      {
             $this->product_id = $product_id;
             return $this;
      }
     public function getProductId()
      {
         return $this->product_id;
      }

        //set and get for user id
        public function setUserId($user_id)
        {
               $this->user_id = $user_id;
               return $this;
        }
       public function getUserId()
        {
           return $this->user_id;
        }

          //set and get for comment
          public function setComment($comment)
          {
                 $this->comment = $comment;
                 return $this;
          }
         public function getComment()
          {
             return $this->comment;
          }
          //set and get for value
      public function setValue($value)
      {
             $this->value = $value;
             return $this;
      }
     public function getValue()
      {
         return $this->value;
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

       public function insertReview()
           {
               $query  = " INSERT INTO `reviews` (`product_id`, `user_id`, `value` ,`comment`) values 
               ('{$this->product_id}' , '{$this->user_id}' , '{$this->value}' , '{$this->comment}') ";
               return $this->runDML($query);
           }

      
}
    ?>