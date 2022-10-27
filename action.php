<?php     //start php tag
//include connect.php page for database connection
include('connect.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['user_name']==''|| $_REQUEST['password']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into users(user_name,password) values('".$_REQUEST['user_name']."',  '".$_REQUEST['password']."')";
$res=mysqli_query($conn,$sql);
If($res)
{

header("Location:index.php");
}
Else
{
Echo "There is some problem in registration";
}

}
}

?>