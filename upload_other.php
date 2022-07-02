<?php
 

    if(isset($_POST['submit'])) {  //to check if the button was clicked or not
        $file = $_FILES['file']; //to get all the info from file that we want to input from a from
 
        $fileName = $_FILES['file']['name']; //to extract name of the file
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['Type'];

        $fileExt = explode('.', $fileName);  //split the name by the punctuation (file extension)
        $fileActualExt = strtolower(end($fileExt));  //since a file name might have capital letters after the punctuation

        $allowed = array('jpg', 'jpeg', 'png', 'gif'); //file types allowed

        if(in_array($fileActualExt, $allowed)) { //to check if the extension is there in our listed extensions  
            if($fileError === 0) { //make sure there was no error uploading the file

                if($fileSize < 100000) { //in kb

                    $fileNameNew = uniqid('',  true).".".$fileActualExt; //to make sure if same filename is uploaded, old file is not replaced by that

                    $fileDestination = 'uploads/'.$fileNameNew; //loaction where we need to upload our file in root folder

                    move_uploaded_file($fileTmpName, $fileDestination);  //function to move file from temp location to actual location

                    header("Location: index.php?uploadsuccess");  //to go back to main page and show upload successful
                } else {
                    echo "Your file size is too big!";
                }
           
            } else {
                echo "There was an error uploading your file!";
            }
        } else {
            echo "File extension not supported!";
            
        }

    }
?>