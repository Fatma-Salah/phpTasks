<?php
namespace app\database\models;
use app\database\config\connection;
class Product extends connection
{
    private $id, $name_ar, $name_en,  $status,$price,$quantity, $image,$des_ar, $des_en,
        $code,   $brand_id, $sub_category_id, 
        $created_at, $updated_at;

    //set and get for id
    public function setId($id)
     {
            $this->id = $id;
            return $this;
     }
    public function getId()
     {
        return $this->id;
     }
  //set and get for name_ar
  public function setName_ar($name_ar)
  {
      $this->name_ar = $name_ar;
      return $this;
  }     
   public function getName_ar()
  {
     return $this->name_ar;
  }
     //set and get for name_en
     public function setName_en($name_en)
     {
         $this->name_en = $name_en;
         return $this;
     }     
 public function getName_en()
     {
        return $this->name_en;
     }

    //set and get for status

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }    
    public function getStatus()
   {
       return $this->status;
   }

    //set and get for des_en 
    public function setDes_en($des_en)
    {
        $this->des_en = $des_en;
        return $this;
    }      
    public function getDes_en()
    {
        return $this->des_en;
    }

    //set and get for des_ar
    
    public function setDes_ar($des_ar)
    {
        $this->des_ar = $des_ar;
        return $this;
    }  
    public function getDes_ar()
    {
        return $this->des_ar;
    }
     

    
  

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of brand_id
     */
    public function getBrand_id()
    {
        return $this->brand_id;
    }

    /**
     * Set the value of brand_id
     *
     * @return  self
     */
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    /**
     * Get the value of sub_category_id
     */
    public function getSub_category_id()
    {
        return $this->sub_category_id;
    }

    /**
     * Set the value of sub_category_id
     *
     * @return  self
     */
    public function setSub_category_id($sub_category_id)
    {
        $this->sub_category_id = $sub_category_id;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    //////metthod for query

    public function allProducts(string $filter ="WHERE `products`.`status`= 1", string $order = "ORDER BY `price` ASC,`name_en` ASC")
    { $query =" SELECT
         `products`. * ,
        `categories`.`name_en`     AS `category_name_en` ,
        `categories`.`id`          AS `category_id`,
        `brands`.`name_en`         AS `brand_name_en` ,
        `sub_categories`.`name_en` AS `subcategory_name_en` ,
    COUNT(`reviews`.`user_id`) AS `reviews_count`,
   ROUND (IF(AVG(`reviews`.`value`) IS NULL , 0 , AVG(`reviews`.`value`))) AS `reviews_avg`
        
        FROM
            `products`
        LEFT JOIN `brands`        ON  `brands`.`id` = `products`.`brand_id`
        JOIN     `sub_categories` ON `sub_categories`.`id` = `products`.`sub_category_id`
        JOIN     `categories`     ON `categories`.`id` = `sub_categories`.`category_id`
        LEFT JOIN `reviews`       ON `products`.`id` = `reviews`.`product_id`
                $filter 
        GROUP BY `products`.`id`
                 $order ";
        return $this->runDQL($query);
        

}

public function getReview()
{
    $query ="SELECT
    `reviews`.*,
    CONCAT(
        `users`.`first_name`,
        ' ',
        `users`.`last_name`
    ) AS `full_name`
FROM
    `reviews`
JOIN `users` ON `reviews`.`user_id` = `users`.`id`
WHERE `reviews`.`product_id` = {$this->id} ";
return $this->runDQL($query);
}
   public function getLatestProduct ()
   {
   $query= "SELECT * FROM `products` order BY `created_at` DESC limit 4";
   return $this->runDQL($query);
   } 
   
   public function getReatedProduct()
   {
       $query = " SELECT
       `products`. * ,

 COUNT(`reviews`.`user_id`)AS `reviews_count` ,        
 ROUND (IF(AVG(`reviews`.`value`) IS NULL , 0 , AVG(`reviews`.`value`))) AS `reviews_avg`
  
      FROM
          `products`
left JOIN `reviews`   
 ON `products`.`id` = `reviews`.`product_id`
           GROUP BY `products`.`id`
         HAVING max(`reviews_count`)
           order BY (`reviews_count`) DESC,  `reviews_avg` DESC limit 4"  ;
              return $this->runDQL($query);
        
   }


}