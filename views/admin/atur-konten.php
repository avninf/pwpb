<?php
    if($_GET['menu'] == "home" || $_GET['menu'] == ''){
    include("views/dashboard/index.php");
}
    else if($_GET['menu'] == "profile"){
    include("views/profile/profile.php");
}
    else if($_GET['menu'] == "about"){
    include("views/about/about.php");
}
    else if($_GET['menu'] == "project"){
    include("views/project/project.php");
}
    else if($_GET['menu'] == "contact"){
    include("views/contact/contact.php");
    }
// else if ($_GET['menu'] == 'logout') {
//     session_start();
//     session_destroy();
//     print `<meta http-equiv="refresh" content="0; url=index.php">`;
//   }
?>