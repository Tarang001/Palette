<?php
include_once "connection.php";
$ename=$_POST['ename'];
$edesc=$_POST['edesc'];
$from_path=$_FILES['eimg']['tmp_name'];
$to_path=$_FILES['eimg']['name'];
move_uploaded_file($from_path,$to_path);
if(move_uploaded_file($from_path, $to_path)){
    echo "Love u zindagi";
}else{
    echo "gaand marao";
}
echo "$from_path";
echo"$to_path";
    $status=mysqli_query($conn,"insert into pallete_notice(ename,edesc,eimg) values('$ename','$edesc','$to_path')");
    if($status){
        echo "<h1>Notice Added Successfully!!</h1>
        <a href='notice_add.html'>
        <button>OK</button>
        </a>";
    }
    else{
        echo "Error in SQL";
        echo mysqli_error($conn);
    }
?>       