<?php

   
    $id=$_POST['catid'];
    //print_r($_POST);
    if($_POST['cat']=='govtproof'){
        $form_data = array(
               
	       
               'govtproof_status' => "1"
              
              );
dbRowUpdate('profile', $form_data, "WHERE id = '".$_POST['catid']."' ");
        
    }
    if($_POST['cat']=='licenproof'){
        $form_data = array(
               
	       
               'licenimg_status' => "1"
              
              );
        //echo 'test';
dbRowUpdate('profile', $form_data, "WHERE id = '".$_POST['catid']."' ");
        
    }
     if($_POST['cat']=='carproof'){
	
        $form_data = array(
               
	       
               'car_insu_status' => "1"
              
              );
dbRowUpdate('profile', $form_data, "WHERE id = '".$_POST['catid']."' ");
        
    }
     
     if($_POST['cat']=='rcproof'){
        $form_data = array(
               
	       
               'rcbkimg_status' => "1"
              
              );
dbRowUpdate('profile', $form_data, "WHERE id = '".$_POST['catid']."' ");
        
    }

