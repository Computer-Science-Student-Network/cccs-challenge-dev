<?php
// uploading files on submit
if(isset($_POST['submit'])){ 
  
    //  uploading files
    $msg= upload_file(); 
    #session_start();
    $_SESSION['msg']= $msg;
    #header('location:index.php');
}
function upload_file(){
    $uploadTo = "/var/www/html/uploads/"; 
    $allowFileType = array('jpg','png','jpeg','gif','pdf','doc');
    $fileName = $_FILES['file']['name'];
    $tempPath=$_FILES["file"]["tmp_name"];
   
    $basename = basename($fileName);
    $originalPath = $uploadTo.$basename; 
    $fileType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    # check to make sure file is not php
    if($fileType == 'php'){
        return "File type not allowed";
    }
    if(!empty($fileName)){ 
    

         if(move_uploaded_file($tempPath,$originalPath)){ 
            # get the domain from the http referer
            $url = $_SERVER['HTTP_REFERER'];
            $domain = parse_url($url, PHP_URL_HOST);

             echo("Your file is accessable at: http://".$domain.":".parse_url($url, PHP_URL_PORT)."/uploads/".$fileName);
            return $fileName." was uploaded successfully";
           // write here sql query to store image name in database
          
          }else{ 
            $error = 'File Not uploaded ! try again';
          } 

   }else{  
    return "Please Select a file";
   }       
}
?>