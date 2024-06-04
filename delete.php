<?php
include "db.php";
session_start();
$postid=$_GET['postid'];
$userid=$_GET['userid'];
$areaid=$_GET['areaid'];
echo $postid;
$sql ="delete from message where pid=$postid";
if (!$db->query($sql)) {
        echo '<div> error at delete.php </div>';
}
$sql ="delete from likeuserid where pid=$postid";
if (!$db->query($sql)) {
        echo '<div> error at delete.php </div>';
}
$sql = "delete from post where postid='$postid'";
if (!$db->query($sql)) {
        echo '<div> error at delete.php </div>';
}
else {
        echo "
        <script>
                setTimeout(function(){window.location.href='viewPostList.php?areaid=$areaid&userid=$userid';},200);
        </script>";

}
?>