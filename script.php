<?php

if(isset($_POST['submit'])){
    $new_contact = array(
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
    );


    if(filesize('contact.json') == 0){
        $first_record = array($new_contact);
        $save_data = $first_record;
    
    }
    else{
        $old_record = json_decode(file_get_contents('contact.json'));
        array_push($old_record, $new_contact);
        $save_data = $old_record;

    }
    if(!file_put_contents('contact.json', json_encode($save_data, JSON_PRETTY_PRINT),LOCK_EX)){
        $error = "Error sending message, please try again";
    }
    else{
        $success = "Message sent successfully!";
    }
 
}





















?>