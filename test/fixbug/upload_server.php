<?php 
define("ROOT","/home/work/var");
$file_field = "my_file";

if (!isset($_FILES[$file_field]) || $_FILES[$file_field]["error"] > 0){ 
        echo "Return Code: " . $_file_fieldS[$file_field]["error"] . "<br />"; 
}else{ 
    echo "Upload: " . $_FILES[$file_field]["name"] . "<br />"; 
    echo "Type: " . $_FILES[$file_field]["type"] . "<br />"; 
    echo "Size: " . ($_FILES[$file_field]["size"] / 1024) . " Kb<br />"; 
    echo "Temp file: " . $_FILES[$file_field]["tmp_name"] . "<br />"; 
    $stored_path = ROOT.'/upload/'.basename($_FILES[$file_field]['name']);
    if (file_exists($stored_path))  { 
        echo $_FILES[$file_field]["name"] . " already exists. "; 
    }else  { 
        if(is_uploaded_file($_FILES[$file_field]['tmp_name'])){    
            if(move_uploaded_file($_FILES[$file_field]['tmp_name'],$stored_path)){ 
                echo "Stored in: " . $stored_path; 
            }else{ 
                echo 'Stored failed:file save error'; 
            } 
        }else{ 
            echo 'Stored failed:no post '; 
        }
    }
}

