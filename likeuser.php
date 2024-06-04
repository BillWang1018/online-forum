<title> All messages </title>

<?php
    include 'style.html';
    include "db.php";
    $postid = $_POST['postid'];
    $userid = $_POST['userid'];
    $areaid = $_POST['areaid'];
    $sql ="select * from likeuserid where uid=$userid and pid=$postid";
    $result = $db->query($sql);
    if ($rows = $result->rowCount()==0) {
        $sql = "INSERT INTO likeuserid (uid, pid) VALUES ('$userid', '$postid')";
        if (!$db->query($sql)) {
            echo '<div> error at likeuser.php </div>';
        }
        else {
            echo "
                <script>
                    setTimeout(function() {
                        window.location.href = 'viewPostDetail.php?userid=$userid&areaid=$areaid&postid=$postid';
                    }, 500);
                </script>";
        }
    }   
    else {
        $sql = "DELETE FROM likeuserid WHERE uid=$userid and pid=$postid";
        if (!$db->query($sql)) {
            echo '<div> error at likeuser.php </div>';
        }
        else {
            echo "
                <script>
                    setTimeout(function() {
                        window.location.href = 'viewPostDetail.php?userid=$userid&areaid=$areaid&postid=$postid';
                    }, 500);
                </script>";
        }
    }
    // 假设 $db 是已连接的数据库连接对象
?>