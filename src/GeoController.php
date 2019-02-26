<?php
namespace GeoController;


 class GeoController
 {
     protected $cities = [
         "ELD" => [
             "name" => "eldoret"
         ]
         ];


         protected $counties = [
             "Uasin Gishu",
             "TransZoia",
             "Mombasa",
             "Kisumu",
             "nyeri",
             "machakos"
         ];

         public function getCities()
         {
            return $this->cities;
         }


         public function getCounties()
         {
             return $this->counties;
         }
 }