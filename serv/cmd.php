<?php

$conn = mysqli_connect("localhost", "root", "", "pensa") or die("Database Connection lost");


function rec_sermons(){

    include "serv/db.php";

    $sql = "SELECT * FROM sermons WHERE s_type='audio' ORDER BY s_date DESC Limit 3";
    $query = mysqli_query($conn, $sql);
    
    while($results = mysqli_fetch_array($query)) {
        echo '
            <div class="col-md-4 col-4 text-center mb-3">
                <h3 class="h5"><span class="text-uppercase">&ldquo;'.$results['s_title'].'&rdquo;</span> &mdash; <span class="small"><br><em>by </em> '.$results['s_author'].'</span></h3>
            
                <div class="col-12">
                    <div class="player">
                        <audio id="player2" preload="none" controls style="width: 100%">
                            <source src="assets/audio/sermons/'.$results['s_sermon'].'?>" type="audio/mp3">
                        </audio>
                    </div>
                </div>
                <div class="col-12" style="margin-top: 10px;">
                <a href="assets/audio/sermons/'.$results['s_sermon'].'?>" download><div class="btn btn-primary">Download</div></a>
                </div>
            </div>
        ';
    } 
}

function sermons($target) {

    include "serv/db.php";

    if($target == "video"){
      
        $sql = "SELECT * FROM sermons WHERE s_type='video' ORDER BY s_date DESC";
        $query = mysqli_query($conn, $sql);
        
        while($results = mysqli_fetch_array($query)){
            echo '
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="media-with-text">
                    <div class="" style="width: 300px; heigth: 300px;margin-bottom: 30px;">
                        <a href="'.$results['s_sermon'].'" class="popup-vimeo image-play">
                            <iframe style="width: 100%; height: 100%"
                            src="'.$results['s_sermon'].'" frameborder="0" allowfullscreen>
                            </iframe> 
                        </a>
                    </div>
                    <h2 class="heading mb-0"><a href="#">'.$results['s_title'].'</a></h2>
                    <span class="mb-3 d-block post-date">'.$results['s_date'].' &bullet; By <a href="#">'.$results['s_author'].'</a></span>
                    <p>'.$results['s_msg'].'</p>
                    </div> 
                </div>
            ';
        }
    }else{
        $sql = "SELECT * FROM sermons WHERE s_type='audio' ORDER BY s_date DESC";
        $query = mysqli_query($conn, $sql);
        
        while($results = mysqli_fetch_array($query)){
            echo '
                <div class="col-md-4 col-4 text-center mb-3">
                    <h3 class="h5"><span class="text-uppercase">&ldquo;'.$results['s_title'].'&rdquo;</span> &mdash; <span class="small"><br><em>by </em> '.$results['s_author'].'</span></h3>
                
                    <div class="col-12">
                        <div class="player">
                            <audio id="player2" preload="none" controls style="width: 100%">
                                <source src="assets/audio/sermons/'.$results['s_sermon'].'?>" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 10px;">
                    <a href="assets/audio/sermons/'.$results['s_sermon'].'?>" download><div class="btn btn-primary">Download</div></a>
                    </div>
                </div>
            ';
        }
    }
}

function events($num,$page){
    $date = date('Y-m-d');
    
    include "serv/db.php";

    if($num == ""){
        $sql = "SELECT * FROM events WHERE e_date < '$date' ORDER BY e_date DESC";

    }else{
        $sql = "SELECT * FROM events WHERE e_date < '$date' ORDER BY e_date DESC LIMIT {$num}";

    }  
    $query = mysqli_query($conn, $sql);

    if($page=="events"){
        while($results = mysqli_fetch_array($query)){
            echo '
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="media-with-text">
                    <div class="" style="width: 300px; heigth: 300px;margin-bottom: 30px;">
                        <a href="'.$results['e_vid'].'" class="popup-vimeo image-play">
                            <iframe style="width: 100%; height: 100%"
                            src="'.$results['e_vid'].'" frameborder="0" allowfullscreen>
                            </iframe> 
                        </a>
                        <!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/Zbow21FKJS4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            https://youtu.be/Zbow21FKJS4 -->
                    </div>
                    <h2 class="heading mb-0"><a href="#">'.$results['e_title'].'</a></h2>
                    <span class="mb-3 d-block post-date">'.$results['e_date'].' &bullet; At <a href="#">'.$results['e_loc'].'</a></span>
                    <p>'.$results['e_msg'].'</p>
                    </div> 
                </div>
            ';
        }

    }else{
        while($results = mysqli_fetch_array($query)){
            echo '
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="media-with-text" style="width: 300px; heigth: auto">
                        <div class="" style="width: 300px; heigth: 300px;margin-bottom: 30px;">
                            <a href="'.$results['e_vid'].'" class="popup-vimeo image-play">
                                <span class="icon-wrap">
                                    <span class="icon icon-play"></span>
                                </span>
                                <img src="assets/img/events/'.$results['e_pic'].'" alt="" class="img-fluid" style="width: 300px;height: 250px;">
                            </a>
                        </div>
                        <h2 class="heading mb-0"><a href="#">'.$results['e_title'].'</a></h2>
                        <span class="mb-3 d-block post-date">'.$results['e_date'].' &bullet; At <a href="#">'.$results['e_loc'].'</a></span>
                        <p>'.$results['e_msg'].'</p>
                    </div>
                </div>
            ';
        }

    }

    
}

function upcomingEvents($num) {
    include "serv/db.php";

    $date = date('Y-m-d');

    if($num == 0) {
        $sql = "SELECT * FROM events WHERE e_date > '$date' ORDER BY e_date ASC";

    } else {
        $sql = "SELECT * FROM events WHERE e_date > '$date' ORDER BY e_date ASC LIMIT {$num}";

    }
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)){
        echo '
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="media-with-text">
                    <div class="" style="width: 300px; heigth: 300px;margin-bottom: 30px;">
                        <a class="image-play">
                            <img src="assets/img/events/'.$results['e_pic'].'" alt="" class="img-fluid" style="width: 300px;height: 250px;">
                        </a>
                    </div>
                    <h2 class="heading mb-0"><a href="#">'.$results['e_title'].'</a></h2>
                    <span class="mb-3 d-block post-date">'.$results['e_date'].' &bullet; At <a href="#">'.$results['e_loc'].'</a></span>
                    <p>'.$results['e_msg'].'</p>
                </div> 
            </div>
        ';
    }
}

function testimonies() {
    include "serv/db.php";

    $sql = "SELECT * FROM testimonies ORDER BY t_id DESC";
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)){
        echo '
            <div class="p-4">
                <div class="d-flex block-testimony">
                    <div class="person mr-3">
                        <img src="assets/img/testimonies/'.$results['t_pic'].'" alt="Image" class="img-fluid rounded-circle">
                    </div>
                    <div>
                        <h2 class="h5">'.$results['t_author'].'</h2>
                        <blockquote>&ldquo;'.$results['t_msg'].'&rdquo;</blockquote>
                    </div>
                </div>
            </div>
        
        ';
    }
}

function lead() {
    include "serv/db.php";

    $sql = "SELECT * FROM leaders";
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)) {
        echo '
            <tr>
                <td>'.$results['l_name'].'</td>
                <td>'.$results['l_portfolio'].'</td>
                <td>'.$results['l_contact'].'</td>
            </tr>
        ';
    }
}




if(isset($_GET['func'])){ 
    if($_GET['func'] == 'comment') {
        $name = mysqli_real_escape_string($conn, $_POST['fullname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $msg = mysqli_real_escape_string($conn, $_POST['msg']);
        $date = date("Y-m-d");

        $mess_email = "";
        $mess_msg = "";
        $mess_phone = "";
        $mess_name = "";



        if(empty($name)) {
            $mess_name =  "Whats Your name? Please fill the first field";
        }

        if(empty($phone)) {
            $mess_phone = "Phone number is required?";
        }

        if(empty($msg)) {
            $mess_msg = "Whats your message?";
        }

        if(!empty($email)) {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mess_email = "The email you entered is invalid";
            }
        }else{
            $email = "";
        }

        if(empty($name) || empty($phone) || empty($msg)) {
            if($mess_name != ""){
                echo $mess_name."<br>";
            }
            if($mess_phone != "") {
                echo $mess_phone."<br>";
            }
            if($mess_msg != "") {
                echo $mess_msg."<br>";
            }
            if($mess_email != "") {
                echo $mess_email;
            }
              
        }else{
            $sql ="INSERT INTO comments(c_name, c_phone, c_email, c_msg, c_date) VALUES ('$name', '$phone', '$email', '$msg', '$date');";
            
            if(mysqli_query($conn, $sql)) {
                echo "success";
            }else{
                echo "Error Occurred Please try again";
            }
        }
    }
}