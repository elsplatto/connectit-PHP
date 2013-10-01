<?php
//header('Content-type: application/json');
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$maxFilesize = 716800;
$imageDimensions = getimagesize($_FILES["file"]["tmp_name"]);
$imageWidth = $imageDimensions[0];
$imageHeight = $imageDimensions[1];
$minWidth = 124;
$minHeight = 124;
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < $maxFilesize)
    && in_array($extension, $allowedExts)
    && $imageWidth > $minWidth
    && $imageHeight > $minHeight)
{
    if ($_FILES["file"]["error"] > 0)
    {
        //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        $errArr = array('ErrorMsg' => $_FILES["file"]["error"]);
        echo json_encode($errArr,true);
    }
    else
    {
        $arr = array('Filename' =>  $_FILES["file"]["name"], 'FileSize' => ($_FILES["file"]["size"] / 1024));
        echo json_encode($arr);

        if (file_exists("media/img/avatars/" . $_FILES["file"]["name"]))
        {
            //echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "media/img/avatars/" . $_FILES["file"]["name"]);
            //echo "Stored in: " . "media/img/avatars/" . $_FILES["file"]["name"];
        }
    }
}
else
{

    if ($_FILES["file"]["error"] > 0)
    {
        $errArr = array('ErrorMsg' => $_FILES["file"]["error"]);
    }
    elseif ($_FILES["file"]["size"] > $maxFilesize)
    {
        $errArr = array('ErrorMsg' => 'Image was too large.<br />Your file: ' . round(($_FILES["file"]["size"] / 1024),2) . 'KB.<br />Maximum size: ' . ($maxFilesize / 1024) . 'KB.');
    }
    elseif (!in_array($extension, $allowedExts))
    {
        $errArr = array('ErrorMsg' => 'Unauthorised file type. Please use <i>.png</i>, <i>.jpeg</i>, <i>.jpg</i> or <i>.gif</i>.');
    }
    elseif ($imageWidth < $minWidth || $imageHeight < $minHeight)
    {
        $errArr = array('ErrorMsg' => 'Image needs to be at least ' . $minWidth . 'px wide by ' . $minHeight . 'px high.<br />Your image is: ' . $imageWidth . 'px x ' . $imageHeight . 'px');
    }
    else
    {
        $errArr = array('ErrorMsg' => 'There was an error uploading your file.');
    }
    echo json_encode($errArr);
}
?>
