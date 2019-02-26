<?php
namespace GeoController;


 class GeoController
 {
     protected $cities = [
         "ELD" => [
             "name" => "Eldoret",
             "code" => 30100
         ],
         "KTL" => [
             "name" => "Kitale",
             "code" => "N/A"
         ],
         "KSM" => [
             'name' => "Kisumu",
             "code" => "N/A"
         ],
         "NRB" => [
             "name" => "Nairobi",
             "code" => "N/A"
         ]
         ];


         protected $counties = [
             "Uasin Gishu",
             "TransZoia",
             "Mombasa",
             "Kisumu",
             "nyeri",
             "machakos",
             "Nyandarua",
             "Kisii",
             "Kilifi",
             "Nandi",
             "Turkana",
             "Elgeiyo Marakwet"
         ];

         public function getCities()
         {
            return  $this->cities;
         }


         public function getCounties()
         {
             return $this->counties;
         }
 }