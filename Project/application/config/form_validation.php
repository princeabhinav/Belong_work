<?php

$config = array(
        'brand' => array(
                array(
                        'field' => 'brand_name',
                        'label' => 'Brand Name',
                        'rules' => 'required'
                )
                
        ),
         'item' => array(
                array(
                        'field' => 'item_name',
                        'label' => 'Item Name',
                        'rules' => 'required'
                ),
                 array(
                        'field' => 'price',
                        'label' => 'Price',
                        'rules' => 'required|is_natural_no_zero'
                ),
                  array(
                        'field' => 'brand_id',
                        'label' => 'Brand',
                        'rules' => 'required'
                ),
                   array(
                        'field' => 'des',
                        'label' => 'Description',
                        'rules' => 'required'
                )
                
        ),

        'admin_login' => array(
                array(
                        'field' => 'username',
                        'label' => 'EmailAddress',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'pass',
                        'label' => 'Name',
                        'rules' => 'required'
                )
                // array(
                //         'field' => 'title',
                //         'label' => 'Title',
                //         'rules' => 'required'
                // ),
                // array(
                //         'field' => 'message',
                //         'label' => 'MessageBody',
                //         'rules' => 'required'
                // )
        )
);
?>