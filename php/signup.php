<?php

session_start();
include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    
    // Email validation
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        
        // Check if email already exists in DB
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");


        // extra
        if(!$sql) {
            echo "Error checking email: " . mysqli_error($conn);
            exit();
        }
        
        // check for email already exist
        if(mysqli_num_rows($sql) > 0){
            echo "$email - This email already exists!";
        } else {
            if(isset($_FILES['image'])) {       // if img is uploaded -> continue
                $img_name = $_FILES['image']['name'];   // getting user uploaded img name
                $tmp_name = $_FILES['image']['tmp_name'];   // temp name
                
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);                       // got the extension

                $extensions = ["jpeg", "png", "jpg"];
                if(in_array($img_ext, $extensions) == true) {           // if extension matches
                    
                        $time = time();
                        $new_img_name = $time.$img_name;
                        
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                            $ran_id = rand(time(), 100000000);      // creating random id
                            $status = "Active now";                            // make status active
                            // $encrypt_pass = md5($password); 

                            // Insert query
                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                                VALUES ({$ran_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                            if($insert_query){
                                $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                
                                if(!$select_sql2) {
                                    echo "Error selecting user after insert: " . mysqli_error($conn);
                                    exit();
                                }
                                
                                if(mysqli_num_rows($select_sql2) > 0){
                                    $result = mysqli_fetch_assoc($select_sql2);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    echo "success";
                                } else {
                                    echo "This email address does not exist after insert!";
                                }
                            } else {
                                echo "Error inserting data: " . mysqli_error($conn);
                            }
                        } else {
                            echo "Failed to move uploaded image file!";
                        }
                    
                } else {
                    echo "Invalid file extension - please upload jpeg, png, or jpg.";
                }
            } else {
                echo "Please select an Image file";
            }
        }
    } else {
        echo "$email - is not a valid email!";
    }
} else {
    echo "All input fields are required!";
}
?>