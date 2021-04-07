<!-- if(isset($_POST['email'])) {
        
        $q = mysqli_query($c, "SELECT `id`,`role` FROM `users` WHERE `email`='$_POST[email]' and `password`='$_POST[pass]'");
    
        if(mysqli_num_rows($q)){
      
            $user_data =  mysqli_fetch_assoc($q);
    
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['pass'];
            $_SESSION['role'] =  $user_data['role'];// 1 or 2
            $_SESSION['id'] =  $user_data['id']; //get id user;
    
           if($user_data['role'] == 1){
            header("location: admin/index.php");
                
           }
           else if($user_data['role'] == 2){
                header("location: self_advert.php");
           }
    
        }
    
        else{
            echo "<div class='alert alert-danger' role='role'>Такой пользователь не существует
            </div>";
        }
    } -->

<?php 
session_start()
include "includes/bd.php";
if(isset($_POST['email'])){
    $s = "SELECT `id`,`role` FROM `users` WHERE `email`='$_POST[email]' and `password`='$_POST[pass]'"; // Покажите id и role где емайл равен на '$_POST[нэйм]' в инпуте
    $query = mysqli_query($c,$s)
    if(mysqli_num_rows($q)){
      
        $user_data =  mysqli_fetch_assoc($query);

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['pass'];
        $_SESSION['role'] =  $user_data['role'];// 1 or 2
        $_SESSION['id'] =  $user_data['id']; //get id user;
        

    //    if($user_data['role'] == 1){
    //     header("location: admin/index.php");
            
    //    }
    //    else if($user_data['role'] == 2){
    //         header("location: index.php");
    //    }

    }

    else{
        echo "!!!";
    }
}
}
?>