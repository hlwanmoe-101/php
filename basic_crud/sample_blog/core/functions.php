<?php
//common start
function alert($data,$color="danger"){
    return "<p class='alert alert-$color'>$data</p>";
}
function runQuery($sql){
    $con=conn();
    if(mysqli_query($con,$sql)){
        return true;
    }else{
        die("DB ERROR".mysqli_error($con));
    }
}
function fetch($sql){
    $query=mysqli_query(conn(),$sql);
    $row=mysqli_fetch_assoc($query);
    return $row;
}
function fetchAll($sql){
    $query=mysqli_query(conn(),$sql);
    $rows=[];
    while ($row=mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }
    return $rows;

}
function redirect($l){
    header("location:$l");
}
function linkto($l){
    echo "<script> location.href='$l'</script>";
}
function showTime($timestamp,$format="d-m-y"){
    return date($format,strtotime($timestamp));
}
function countTotal($table,$condition=1){
    $sql="SELECT COUNT(id) FROM $table WHERE $condition";
    $total=fetch($sql);
    return $total['COUNT(id)'];
}
function short($str,$length="100"){
    return substr($str,0,$length)."...";
}
function textfilter($text){
    $text=trim($text);
    $text=htmlentities($text,ENT_QUOTES);
    $text=stripcslashes($text);
    return $text;
}
//common end

//auth start

function register(){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    if($password==$repassword){
        $spass=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO users (name,email,password) VALUES ('$name','$email','$spass')";
        if(!runQuery($sql)){
            return redirect("login.php");
        }
    }else{
        return alert("Password doesn't match");
    }

}

function login(){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email'";
    $query=mysqli_query(conn(),$sql);
    $row=mysqli_fetch_assoc($query);
    if(!$row){
        return alert("Username & Password doesn't match");
    }else{
        if(!password_verify($password,$row['password'])){
            return alert("Username & Password doesn't match");

        }else{
            session_start();
            $_SESSION['user']=$row;
            redirect("dashboard.php");
        }
    }


}
//auth end

//user start

function user($id){
    $sql="SELECT * FROM users WHERE id=$id";
    return fetch($sql);
}
function users(){
    $sql="SELECT * FROM users";
    return fetchAll($sql);
}
//user end

//category start

function categoryAdd(){
    $title=$_POST['title'];
    $userid=$_SESSION['user']['id'];
    $sql="INSERT INTO categories (title,user_id) VALUES ('$title','$userid')";
    if(runQuery($sql)){
        linkto("category_add.php");
    }

}
function categoryDelete($id){
    $sql="DELETE FROM categories WHERE id=$id";
    return runQuery($sql);
}

function category($id){
    $sql="SELECT * FROM categories WHERE id=$id";
    return fetch($sql);
}
function categories(){
    $sql="SELECT * FROM categories ORDER BY ordering DESC";
    return fetchAll($sql);
}
//function categoryUpdate($id,$title){
//    $sql="UPDATE categories SET title='$title' WHERE id=$id";
//    return runQuery($sql);
//}(my code)
function categoryUpdate(){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $sql="UPDATE categories SET title='$title' WHERE id=$id";
    return runQuery($sql);
}
function categoryPinToTop($id){
    $sql="UPDATE categories SET ordering='0'";
    mysqli_query(conn(),$sql);
    $sql="UPDATE categories SET ordering='1' WHERE id=$id";
    return runQuery($sql);
}
function categoryRemovePin($id){
    $sql="UPDATE categories SET ordering='0'";
    return runQuery($sql);
}
//category end
//post start


function postAdd(){
    $title=textfilter($_POST['title']);
    $description=textfilter($_POST['description']);
    $category_id=$_POST['category_id'];
    $userid=$_SESSION['user']['id'];
    $sql="INSERT INTO posts (title,description,category_id,user_id) VALUES ('$title','$description','$category_id','$userid')";
        if(runQuery($sql)){
        linkto("post_add.php");
    }

}
function post($id){
    $sql="SELECT * FROM posts WHERE id=$id";
    return fetch($sql);
}
function posts($limit=9999999){
    if($_SESSION['user']['role']>1){
        $currentUserId=$_SESSION['user']['id'];
        $sql="SELECT * FROM posts WHERE user_id='$currentUserId' LIMIT $limit";
    }else{
        $sql="SELECT * FROM posts LIMIT $limit";
    }
    return fetchAll($sql);
}
function postDelete($id){
    $sql="DELETE FROM posts WHERE id=$id";
    return runQuery($sql);
}
//function categoryUpdate($id,$title){
//    $sql="UPDATE categories SET title='$title' WHERE id=$id";
//    return runQuery($sql);
//}(my code)
function postUpdate(){
    $id=$_POST['id'];
    $title=textfilter($_POST['title']);
    $description=textfilter($_POST['description']);
    $categoryId=$_POST['category_id'];
    $sql="UPDATE posts SET title='$title',description='$description',category_id='$categoryId' WHERE id=$id";
    return runQuery($sql);
}

//post end
//front panel start

function fPosts($orderCol="id",$orderType="DESC"){

    $sql="SELECT * FROM posts ORDER BY $orderCol $orderType";
    return fetchAll($sql);
}
function fCategories(){
    $sql="SELECT * FROM categories ORDER BY ordering DESC";
    return fetchAll($sql);
}
function fPostsCate($category_id,$limit="99999",$post_id=0){
    $sql="SELECT * FROM posts WHERE category_id=$category_id AND id!=$post_id  ORDER BY id DESC LIMIT $limit";
    return fetchAll($sql);
}
function fSearch($key){
    $sql="SELECT * FROM posts WHERE title LIKE '%$key%' OR description LIKE '%$key%' ORDER BY id DESC ";
    return fetchAll($sql);
}
function fSearchByDate($start,$end){
    $sql="SELECT * FROM posts WHERE created_at BETWEEN '$start' AND '$end' ORDER BY id DESC ";
    return fetchAll($sql);
}
//front panel end
//user viewer start
function userAnalysis($userId,$postId,$device){
    $sql="INSERT INTO viwers (user_id,post_id,device) VALUES ('$userId','$postId','$device')";
    runQuery($sql);
}
function countByPost($postId){
    $sql="SELECT * FROM viwers WHERE post_id=$postId";
    return fetchAll($sql);
}
function countByUser($userId){
    $sql="SELECT * FROM viwers WHERE user_id=$userId";
    return fetchAll($sql);
}
//user viewer end
//ads start
function ads(){
    $today=date('Y-m-d');
    $sql="SELECT * FROM ads WHERE start <= '$today' AND end > '$today'";
    return fetchAll($sql);
}
//ads end
//payment start
function payNow(){
    $from=$_SESSION['user']['id'];
    $to=$_POST['to_user'];
    $amount=$_POST['amount'];
    $description=$_POST['description'];

    //from user money update
    $fromUserDetail=user($from);
    $leftMoney=$fromUserDetail['money'] - $amount;
    if($fromUserDetail['money'] >= $amount)
    {
        $sql="UPDATE users SET money='$leftMoney' WHERE id='$from'";
        mysqli_query(conn(),$sql);

        //to user money update
        $toUserDetail=user($to);
        $updateMoney=$toUserDetail['money']+$amount;
        $sql="UPDATE users SET money='$updateMoney' WHERE id='$to'";
        mysqli_query(conn(),$sql);

        //add to transition table
        $sql="INSERT INTO transition (from_user,to_user,amount,description) VALUES ('$from','$to','$amount','$description')";
        runQuery($sql);
    }}
function trans(){
    $userId=$_SESSION['user']['id'];
    if($_SESSION['user']['role']==0){
        $sql="SELECT * FROM transition";
    }else{
        $sql="SELECT * FROM transition WHERE from_user=$userId OR to_user=$userId";
    }
    return fetchAll($sql);
}
function transS($id){
    $sql="SELECT * FROM transition WHERE id='$id'";
    return fetch($sql);
}
//payment end
//dashboard start
function dashboardPosts($limit=9999999){
    if($_SESSION['user']['role']>1){
        $currentUserId=$_SESSION['user']['id'];
        $sql="SELECT * FROM posts WHERE user_id='$currentUserId' ORDER BY id DESC LIMIT $limit";
    }else{
        $sql="SELECT * FROM posts ORDER BY id DESC LIMIT $limit";
    }
    return fetchAll($sql);
}
//dashboard end
//api start
function apiOutput($arr){
    echo json_encode($arr);
}

//api end