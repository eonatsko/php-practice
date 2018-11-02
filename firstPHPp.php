<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
    $name= '';
    $password = '';
    $comments ='';
    $gender = '';
    $tc = '';
    $color = '';
    $languages=array();
    if (isset($_POST['submit'])){
        $ok = true;
        if(!isset($_POST['name']) || $_POST['name']===''){
            $ok=false;
        } else {
            $name = $_POST['name'];
        }
        if(!isset($_POST['password']) || $_POST['password']===''){
            $ok=false;
        } else {
            $password = $_POST['password'];
        }
        if(!isset($_POST['comments']) || $_POST['comments']===''){
            $ok=false;
        } else {
            $comments= $_POST['comments'];
        }
        if(!isset($_POST['gender']) || $_POST['gender']===''){
            $ok=false;
        } else {
            $gender = $_POST['gender'];
        }
        if(!isset($_POST['tc']) || $_POST['tc']===''){
            $ok=false;
        } else {
            $tc = $_POST['tc'];
        }
        if(!isset($_POST['color']) || $_POST['color']===''){
            $ok=false;
        } else {
            $color = $_POST['color'];
        }
        if(!isset($_POST['languages']) || !is_array($_POST['languages']) ||
            count($_POST['languages'])===0){
            $ok=false;
        } else {
            $languages = $_POST['languages'];
        }
        if($ok){
        printf('User name: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Color: %s
        <br>Language(s): %s,
        <br>Comments: %s,
        <br>T&amp;C: %s,',
            htmlspecialchars($_POST['name']),
            htmlspecialchars($_POST['password']), 
            $_POST['gender'], 
            $_POST['color'], 
            implode(' ', $_POST['languages']),
            htmlspecialchars($_POST['comments']),
            $_POST['tc']);
        }
}
?>
<form method="post" actions="">
    Username: <input type ="text" name="name" value="<?php 
        echo htmlspecialchars($name);
    ?>"><br><br>
    Password: <input type ="password" name="password" value="<?php 
        echo htmlspecialchars($password);
    ?>"><br><br>
    Gender:
        <input type="radio" name="gender" value="M">Male
        <input type="radio" name="gender" value="F">Female<br><br>
    Favorite Color:
    <select name="color">
        <option value="red">red</option>
        <option value="yellow">yellow</option>
        <option value="green">green</option>
        </select><br><br>
    Languages Spoken:
        <select name="languages[]" multiple size="3">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
            <option value="ru">Russin</option>
            </select><br>
    Comments:<textarea name="comments"> <?php 
        echo htmlspecialchars($comments);
    ?></textarea><br><br>
    <input type="checkbox" name="tc" value="ok">I accept the terms and conditions<br><br>
    <input type="submit" name="submit" value="Submit">
</body>
</html>
