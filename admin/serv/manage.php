<?php

$conn = mysqli_connect("localhost", "root", "", "pensa");

// Functions For Tables

function testi() {

    $conn = mysqli_connect("localhost", "root", "", "pensa");

    $sql = "SELECT * FROM testimonies ORDER BY t_id DESC";
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)){
        echo '
            <tr>
                <td>'.$results['t_author'].'</td>
                <td>'.$results['t_msg'].'</td>
                <td><img style="width: 50px; height: 50px; border-radius: 50px;" src="../assets/img/testimonies/'.$results['t_pic'].'"></td>
                <td>
                    <button class="t_edit btn btn-success btn-lg" value="'.$results['t_id'].'">Edit</button>
                    <button class="t_drop btn btn-danger btn-lg" value="'.$results['t_id'].'">Delete</button>
                </td>
            </tr> 
        ';
    };
    
}

function serms() {
    $conn = mysqli_connect("localhost", "root", "", "pensa");

    $sql = "SELECT * FROM sermons ORDER BY s_id DESC";
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)){
        echo '
            <tr>
                <td>'.$results['s_title'].'</td>
                <td>'.$results['s_author'].'</td>
                <td>'.$results['s_type'].'</td>
                <td><a class="popup-vimeo btn btn-primary" href="'.$results['s_sermon'].'">'.$results['s_sermon'].'</a></td>
                <td>'.$results['s_date'].'</td>
                <td>
                    <button class="s_edit btn btn-success btn-lg" value="'.$results['s_id'].'">Edit</button>
                    <button class="s_drop btn btn-danger btn-lg" value="'.$results['s_id'].'">Delete</button>
                </td>
            </tr>
        ';
    }
}

function evens() {
    $conn = mysqli_connect("localhost", "root", "", "pensa");

    $sql = "SELECT * FROM events ORDER BY e_id DESC";
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)){
        echo '
            <tr>
                <td>'.$results['e_title'].'</td>
                <td>'.$results['e_msg'].'</td>
                <td>'.$results['e_loc'].'</td>
                <td>'.$results['e_date'].'</td>
                <td>'.$results['e_pic'].'</td>
                <td><a href="'.$results['e_vid'].'">'.$results['e_vid'].'</a></td>
                <td>
                    <button class="e_edit btn btn-success btn-lg" value="'.$results['e_id'].'">Edit</button>
                    <button class="e_drop btn btn-danger btn-lg" value="'.$results['e_id'].'">Delete</button>
                </td>
            </tr>
        ';
    }
}

function comms() {
    $conn = mysqli_connect("localhost", "root", "", "pensa");

    $sql = "SELECT * FROM comments ORDER BY c_id DESC";
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)){
        echo '
            <tr>
                <td>'.$results['c_date'].'</td>
                <td>'.$results['c_name'].'</td>
                <td>'.$results['c_email'].'</td>
                <td>'.$results['c_phone'].'</td>
                <td>'.$results['c_msg'].'</td>
            </tr>
        ';
    }
}

function num($opt) {
    $conn = mysqli_connect("localhost", "root", "", "pensa");

    if($opt == "t") {
        $sql = "SELECT t_id FROM testimonies";
    }elseif($opt == "s")  {
        $sql = "SELECT s_id FROM sermons";
    }elseif($opt == "e")  {
        $sql = "SELECT e_id FROM events";
    }else{
        $sql = "SELECT c_id FROM comments";
    }

    $query = mysqli_query($conn, $sql);
    $count = 0;

    while($log = mysqli_fetch_array($query)) {
        $count = $count + 1;
    };

    echo $count;
}



function testiUpForm($id) {
    $conn = mysqli_connect("localhost", "root", "", "pensa");

    $sql = "SELECT * FROM testimonies WHERE t_id=$id";
    $query = mysqli_query($conn, $sql);
    $testi = mysqli_fetch_array($query);


    echo '
        <div class="card-body card" style="background: rgb(224, 224, 224);">
            <div style="background: green;position: absolute;top: 0px;left: 0;">
                <div class="e_edit_Close" style="background: lightpink;width: 40px;height: 40px;line-height: 1.5;text-align: center;">X</div> 
            </div>
            <h5 style="margin-top: 40px;" class="card-title">Form for Testimonies</h5>
            <form class="f_testimoniesUp" action="index.php" method="post" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Author</label>
                    <input name="t_author" id="exampleEmail" value="'.$testi['t_author'].'" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleText" class="">Testimonies</label>
                    <textarea name="t_msg" id="exampleText" class="form-control">'.$testi['t_msg'].'</textarea>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleFile" class="">Picture of the person</label><br>
                    <img src="../assets/img/testimonies/'.$testi['t_pic'].'" style="width: 100px;height: 100px;">
                    <input name="t_pic" id="t_pic" type="file" class="form-control-file t_pic">
                    <small class="form-text text-muted err mess">
                        <!-- This is some placeholder block-level help text for the above input. 
                        It\'s a bit lighter and easily wraps to a new line. -->
                    </small>
                    <div class="_prog" style="display: none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <button type="submit" name="t_submit" class="mt-1 btn btn-primary t_submitUp" value="'.$id.'">Submit</button>
            </form>
        </div> 
        <script src="js/form.js"></script>
    ';
}

function sermonUpForm($id) {
    $conn = mysqli_connect("localhost", "root", "", "pensa");

    $sql = "SELECT * FROM sermons WHERE s_id=$id";
    $query = mysqli_query($conn, $sql);
    $serm = mysqli_fetch_array($query);


    echo '
        <div class="card-body card" style="background: rgb(224, 224, 224);">
            <div style="background: green;position: absolute;top: 0px;left: 0;">
                <div class="e_edit_Close" style="background: lightpink;width: 40px;height: 40px;line-height: 1.5;text-align: center;">X</div> 
            </div>
        
        <h5 class="card-title" style="margin-top: 40px;">Form for Sermons</h5>
        <form class="f_sermonsUp" action="index.php" method="post" enctype="multipart/form-data">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Title Of Sermons</label>
                <input name="s_title" id="exampleEmail" value="'.$serm['s_title'].'" type="text" class="s_title form-control" >
            </div>
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Preacher</label>
                <input name="s_author" id="exampleEmail" value="'.$serm['s_author'].'" type="text" class="form-control" >
            </div>
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Date of the Sermon</label>
                <input name="s_date" id="exampleEmail" class="form-control" type="date" value="'.$serm['s_date'].'">
            </div>
        ';

    if($serm['s_type'] == 'video') {
        echo '
            <div class="position-relative form-group">
                <label for="exampleFile" class="">Link To Video</label>
                <a href="'.$serm['s_sermon'].'" class="btn-primary popup-vimeo">'.$serm['s_sermon'].' </a>
                <input name="s_sermon" id="exampleFile" type="text" class="form-control" value="'.$serm['s_sermon'].'">
                <small class="form-text text-muted err mess">

                </small>
                <div class="_prog" style="display: none">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        ';

    } else {
        echo '
            <div class="position-relative form-group">
                <label for="exampleFile" class="">File</label>
                <div>'.$serm['s_sermon'].'</div>
                <input name="s_sermon" id="exampleFile" type="file" class="form-control-file">

                <small class="form-text text-muted err mess">

                </small>
                <div class="_prog" style="display: none">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        ';
    } 
    echo '
        <button class="mt-1 btn btn-primary s_submitUp" value="'.$id.'">Submit</button>
        </form>
        </div>
        <script src="js/form.js"></script>
    ';

}

function eventsUpForm($id) {
    $conn = mysqli_connect("localhost", "root", "", "pensa");

    $sql = "SELECT * FROM events WHERE e_id=$id";
    $query = mysqli_query($conn, $sql);
    $event = mysqli_fetch_assoc($query);

    echo '
        <div class="card-body card" style="background: rgb(224, 224, 224);">
            <div style="background: green;position: absolute;top: 0px;left: 0;">
                <div class="e_edit_Close" style="background: lightpink;width: 40px;height: 40px;line-height: 1.5;text-align: center;"><i class="fa fa-"></i></div> 
            </div>
            <h5 style="margin-top: 40px;" class="card-title">Form for Events</h5>
            <form class="f_eventsUp" method="post" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Title Of Event</label>
                    <input name="e_title" id="exampleEmail" value="'.$event['e_title'].'" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Location Of Event</label>
                    <input name="e_loc" id="exampleEmail" value="'.$event['e_loc'].'" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleText" class="">Short Message on the Event</label>
                    <textarea name="e_msg" id="exampleText" class="form-control">'.$event['e_msg'].'</textarea>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Date of the Event</label>
                    <input name="e_date" id="exampleEmail" class="form-control" type="date" value="'.$event['e_date'].'">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleFile" class="">Link To video</label>
                    <a href="'.$event['e_vid'].'">'.$event['e_vid'].'</a>
                    <input name="e_vid" id="exampleFile" type="text" class="form-control" value="'.$event['e_vid'].'">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleFile" class="">Insert a picture</label><br>
                    <img src="../assets/img/events/'.$event['e_pic'].'" style="width: 100px;height: 100px;">
                    <input name="e_pic" id="exampleFile" type="file" class="form-control-file">
                    <small class="form-text text-muted err mess">

                    </small>
                    <div class="_prog" style="display: none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <button class="mt-1 btn btn-primary e_submitUp" value="'.$id.'">Submit</button>
            </form>
        </div> 
        <script src="js/form.js"></script>
    ';
}


// Functions for Form //
if(isset($_GET['func'])){
    $conn = mysqli_connect("localhost", "root", "", "pensa");


    if($_GET['func'] == 'testimony'){
        $t_author = mysqli_real_escape_string($conn, $_POST['t_author']);
        $t_msg = mysqli_real_escape_string($conn, $_POST['t_msg']);
    
        if(empty($t_author) && empty($t_msg)) {
            echo "Both fields are empty";
        }elseif(empty($t_author)) {
            echo "Please provided the name for the author of the testimony";
        }elseif(empty($t_msg)) {
            echo "Please fill the testimony field";
        }else{

            if(!isset($_FILES['t_pic'])) {
                echo "Empty";
    
            }else{
                $t_pict = $_FILES['t_pic'];

                $accepted = array("jpeg","jpg","png");
                $t_picType = explode("/", $t_pict['type']);
                $t_picType = end($t_picType);

                if(!in_array($t_picType, $accepted)){
                    echo "Invalid picture type";
                }else{
                    $t_pic = $t_pict['name'];
            
                    $sql = "INSERT INTO testimonies(t_author, t_msg, t_pic) VALUES ('$t_author', '$t_msg', '$t_pic')";
                    
                    if(mysqli_query($conn, $sql)) {
                        $newLoc = "../../assets/img/testimonies/$t_pic";
                        move_uploaded_file($t_pict['tmp_name'], $newLoc);
                        echo "success";
                    }else{
                        echo "Opps an error occured during database update!";
                    }
    
                }
    
            }  
        }
    }

    if($_GET['func'] == 'testimonyUp'){
        $t_author = mysqli_real_escape_string($conn, $_POST['t_author']);
        $t_msg = mysqli_real_escape_string($conn, $_POST['t_msg']);
        
        $t_id = $_GET['func2'];

        $def = "SELECT * FROM testimonies WHERE t_id = $t_id";
        $def = mysqli_query($conn, $def);
        $def = mysqli_fetch_array($def);

        if(isset($_FILES['t_pic'])) {
            $t_pic = $_FILES['t_pic'];
            $t_picName = $t_pic['name'];

            $accepted = array("jpeg","jpg","png");
            $t_picType = explode("/", $t_pic['type']);
            $t_picType = end($t_picType);

            if(!in_array($t_picType, $accepted)){
                echo "Invalid picture type";
            }else{
                $sql = "UPDATE testimonies SET t_author = '$t_author', t_msg = '$t_msg', t_pic = '$t_picName' WHERE t_id = $t_id";
                    
                if(mysqli_query($conn, $sql)) {
                    $newLoc = "../../assets/img/testimonies/$t_picName";
                    move_uploaded_file($t_pic['tmp_name'], $newLoc);
                    echo "success";
                }else{
                    echo "Opps an error occured during database update!";
                }
            }
        }else{
            $t_picName = $def['t_pic'];
            $sql = "UPDATE testimonies SET t_author = '$t_author', t_msg = '$t_msg', t_pic = '$t_picName' WHERE t_id = $t_id";

            if(mysqli_query($conn, $sql)) {
                echo "success";

            }else{
                echo "Opps an error occured during database update!";

            }
        }
    }

    if($_GET['func'] == "testimonyDel") {
        $id = $_GET['func2'];
        $sql="DELETE FROM testimonies WHERE t_id=$id";

        if(mysqli_query($conn, $sql)) {
            echo "success";
        }else{
            echo "Error Occured";
        }
    }
    



    if($_GET['func'] == "sermons") {
        $s_title = mysqli_real_escape_string($conn, $_POST['s_title']);
        $s_author = mysqli_real_escape_string($conn, $_POST['s_author']);
        $s_date = mysqli_real_escape_string($conn, $_POST['s_date']);

        if(empty($s_title) && empty($s_author) && empty($s_date)) {
            echo "All fields are all empty";
            
        }elseif(empty($s_title) || empty($s_author) || empty($s_date)) {
            if(empty($s_title)) {
                echo "Title column is empty";
            }elseif(empty($s_author)) {
                echo "Authors field is empty";
            }else{
                echo "Date field is empty";
            }
       
        }elseif(!isset($_POST['s_type'])){
            echo "Please select media format";
    
        }else{
            
            $s_type = mysqli_real_escape_string($conn, $_POST['s_type']);
    
            if($s_type == 'video') {
                $s_sermonAlt = $_FILES['s_sermonAlt'];

                $s_sermonType = $s_sermonAlt['type'];
                $s_sermonExt = explode("/",$s_sermonType);
                $s_sermonExt = end($s_sermonExt);
                $accepted = array("png", "jpeg", "jpg");

                $s_sermonP = $s_sermonAlt['name'];
                $s_sermonName = $_POST['s_sermon'];

            } else {
                $s_sermonAlt = $_FILES['s_sermonAlt'];

                $s_sermonType = $s_sermonAlt['type'];
                $s_sermonExt = explode("/", $s_sermonType);
                $s_sermonExt = end($s_sermonExt);
                $accepted = array("mp3", "m4a", "wav", "mp4", "mov", "mkv", 'mpeg');
                $s_sermonP = "N/A";
                $s_sermonName = $s_sermonAlt['name'];
            }

    
            if(in_array(strtolower($s_sermonExt), $accepted)) {
                $sql = "INSERT INTO sermons (s_title, s_pic, s_sermon, s_author, s_type, s_date) VALUES ('$s_title', '$s_sermonP', '$s_sermonName', '$s_author', '$s_type', '$s_date')";
                
                if($s_type == 'video') {
                    $s_sermonDist = "../../assets/img/sermons/$s_sermonP";
                } else {
                    $s_sermonDist = "../../assets/audio/sermons/$s_sermonName";
                }
                
                if(mysqli_query($conn, $sql) && move_uploaded_file($s_sermonAlt['tmp_name'], $s_sermonDist)) {
                    echo "success";

                }else{
                    echo "Failed to access the database";
                }
    
            }else{
                echo "Media format not supported";
            }
        }
        
    }

    if($_GET['func'] == "sermonUp") {
        $s_title = mysqli_real_escape_string($conn, $_POST['s_title']);
        $s_author = mysqli_real_escape_string($conn, $_POST['s_author']);
        $s_date = mysqli_real_escape_string($conn, $_POST['s_date']);

        $id = $_GET['func2'];
        $def = "SELECT * FROM sermons WHERE s_id=$id";
        $def = mysqli_query($conn, $def);
        $sermon = mysqli_fetch_array($def);
       
        if(!isset($_FILES['s_sermon'])){
            $s_sermon = $sermon['s_sermon'];
            
            if(isset($_POST['s_type'])) {
                $s_type = mysqli_real_escape_string($conn, $_POST['s_type']);
                
            }else{
                $s_type = $sermon['s_type'];

            }

            $sql = "UPDATE sermons SET s_title='$s_title', s_author='$s_author', s_date='$s_date', s_type='$s_type', s_sermon='$s_sermon' WHERE s_id=$id";
            $query = mysqli_query($conn, $sql);

            if($query){
                echo 'success';
            }else{
                echo 'Error occured';
            }   
        }else{
            if(!isset($_POST['s_type'])) {
                echo 'Please select the type of sermon';
            }else{
                $s_sermon = $_FILES['s_sermon'];
                $s_type = mysqli_real_escape_string($conn, $_POST['s_type']);

                $s_sermonType = $s_sermon['type'];
                $s_sermonExt = explode("/",$s_sermonType);
                $s_sermonExt = end($s_sermonExt);
                $accepted = array("mp3", "m4a", "wav", "mp4", "mov", "mkv");
    
        
                if(in_array(strtolower($s_sermonExt), $accepted)) {
                    $s_sermonName = $s_sermon['name'];
                    $s_sermonDist = "../../assets/$s_type/sermons/$s_sermonName";

                    $sql = "UPDATE sermons SET s_title='$s_title', s_author='$s_author', s_date='$s_date', s_sermon='$s_sermonName' WHERE s_id=$id";

                    if(mysqli_query($conn, $sql) && move_uploaded_file($s_sermon['tmp_name'], $s_sermonDist)) {
                        echo "success";
            
                    }else{
                        echo "Failed to access the database";
                    }
                }else{
                    echo "Media format not supported";
                }
            }
        }
    }

    if($_GET['func'] == "sermonDel") {
        $id = $_GET['func2'];
        $sql="DELETE FROM sermons WHERE s_id=$id";

        if(mysqli_query($conn, $sql)) {
            echo "success";
        }else{
            echo "Error Occured";
        }
    }

  


    if($_GET['func'] == "events") {
        $e_title = mysqli_real_escape_string($conn, $_POST['e_title']);
        $e_msg = mysqli_real_escape_string($conn, $_POST['e_msg']);
        $e_date = mysqli_real_escape_string($conn, $_POST['e_date']);
        $e_loc = mysqli_real_escape_string($conn, $_POST['e_loc']);

        if(empty($e_title || $e_msg || $e_date || $e_loc)) {
            echo "All Fields are Empty";
        }elseif(empty($e_title && $e_msg && $e_date && $e_loc)) {
            if(empty($e_title)){
                echo "No title given for the event";
            }elseif(empty($e_msg)){
                echo "You should give a small description";
            }elseif(empty($e_date)){
                echo "When did the event take place?";
            }else{
                echo "Where did it take place?";
            }
        }elseif(!isset($_FILES['e_pic']) || !isset($_POST['e_vid'])){
            if(!isset($_FILES['e_pic'])){
                echo "Please select a picture";
            }else{
                echo "Please enter video link";
            }
            
        }else{
            $e_pic = $_FILES['e_pic'];
            $e_vid = $_POST['e_vid'];

            $e_picType = $e_pic['type'];

            $e_picExt = explode("/", $e_picType);

            $e_picExt = end($e_picExt);

            $p_accepted = array("png", "jpeg", "jpg");

            if(in_array($e_picExt, $p_accepted)) {
                $e_picName = $e_pic['name'];

                $sql = "INSERT INTO events (e_title, e_msg, e_date, e_pic, e_vid, e_loc) VALUES ('$e_title', '$e_msg', '$e_date', '$e_picName', '$e_vid', '$e_loc')";
                $query = mysqli_query($conn, $sql);

                if ($query) {
                    $e_picDist = "../../assets/img/events/$e_picName";
                    move_uploaded_file($e_pic['tmp_name'], $e_picDist);
                    echo 'success';
                }else{
                    echo "Opps there was an error...Please try again";
                }

            }else{
                echo "The picture not supported";

            }
        }
    } 

    if($_GET['func'] == "eventUp") {
        $e_title = mysqli_real_escape_string($conn, $_POST['e_title']);
        $e_msg = mysqli_real_escape_string($conn, $_POST['e_msg']);
        $e_date = mysqli_real_escape_string($conn, $_POST['e_date']);
        $e_loc = mysqli_real_escape_string($conn, $_POST['e_loc']);

        $id = $_GET['func2'];
        $def = "SELECT * FROM events WHERE e_id=$id";
        $def = mysqli_query($conn, $def);
        $def = mysqli_fetch_array($def);

        $e_pic = $def['e_pic'];
        $e_vid = $_POST['e_vid'];

        $testp = "default";
        $testv = "default";


        // ................................................

        if(isset($_FILES['e_pic'])) {
            $e_picType = $_FILES['e_pic']['type'];
            $e_picExt = explode("/", $e_picType);
            $e_picExt = end($e_picExt);
            $p_accepted = array("png", "jpeg", "jpg");
    
            if(in_array($e_picExt, $p_accepted)) {
                $e_pic = $_FILES['e_pic']['name'];
                $e_picDist = "../../assets/img/events/$e_pic";
                if(move_uploaded_file($_FILES['e_pic']['tmp_name'], $e_picDist)) {
                    $testp = "changed";
                }else{
                    $testp = "Error occurred in picture upload";
                }
            }else{
                $testp = "Invalid picture format";
            }
        }


        // ................................................

        if($testp == "default" || $testv == "default" || $testp == "changed" || $testv == "changed") {
            $sql = "UPDATE events SET e_title='$e_title', e_msg='$e_msg', e_date='$e_date', e_loc='$e_loc', e_vid='$e_vid', e_pic='$e_pic' WHERE e_id=$id";
            $query = mysqli_query($conn, $sql);

            if($query) {
                echo "success";
            }else{
                echo "Error Occured";
            }
        }else{
            echo $testv;
            echo $testp;
        }

    }
    
    if($_GET['func'] == "eventDel") {
        $id = $_GET['func2'];
        $sql = "DELETE FROM events WHERE e_id=$id";

        if(mysqli_query($conn, $sql)) {
            echo "success";
        }else{
            echo "Error occured";
        }
    }


    // Logining System

    if($_GET['func'] == 'login') {
        $user_n = mysqli_real_escape_string($conn, $_POST['user_n']);
        $pass_n = mysqli_real_escape_string($conn, $_POST['pass_n']);

        if(empty($user_n) && empty($pass_n)) {
            echo "All fields are empty";
        }elseif(empty($user_n) || empty($pass_n)) {
            if(empty($user_n)) {
                echo "Username field is empty";
            }else{
                echo "Password field is empty";
            }
        }else{
            $sql = "SELECT * FROM admin WHERE a_usern='$user_n'";
            $query = mysqli_query($conn, $sql);

            if(mysqli_fetch_array($query) > 0) {
                $sql = "SELECT * FROM admin WHERE a_usern='$user_n' AND a_password='$pass_n'";
                $query = mysqli_query($conn, $sql);
                $admin = mysqli_fetch_array($query);

                if($admin > 0) {
                    session_start();
                    $_SESSION['admin'] = $admin;

                    echo "success";
                }else{
                    echo "Password incorrect";
                }
            }else{
                echo "Username does not exist";
            }

        }
    }

    if($_GET['func'] == 'logout') {
        session_start();
        session_unset();
        session_destroy();

        echo "<script>window.location = '../index.php'</script>";
    }

        
    if($_GET['func'] == "e") {
        eventsUpForm($_GET['func2']);

    }
    if($_GET['func'] == "t") {
        testiUpForm($_GET['func2']);
    }
    if($_GET['func'] == "s") {
        sermonUpForm($_GET['func2']);
    }
}
