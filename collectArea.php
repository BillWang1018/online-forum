<?php
    include "db.php";
    session_start();
    $userid = $_GET['userid'];
    $areaid = $_GET['areaid'];
    header("Location: viewAreaList.php?userid=$userid");
    $sql ="select count(*) as c, * from collect_area where uid=$userid and aid=$areaid";
    $result = $db->query($sql);
    $rows = $result->fetch(PDO::FETCH_ASSOC);
    if (!$rows['c']){
        $sql = "INSERT INTO collect_area (uid, aid) VALUES ('$userid', '$areaid')";
        if (!$db->query($sql)) {
            echo '<div> error at collectArea.php </div>';
        }
        else {
            echo "
            <script>
                setTimeout(function(){window.location.href = 'viewAreaList.php?userid=$userid;},200);
            </script>";
        }
    }
    else {
        $sql = "DELETE FROM collect_area WHERE uid=$userid and aid=$areaid";
        if (!$db->query($sql)) {
            echo '<div> error at collectArea.php </div>';
        }
        else {
            echo "
            <script>
                setTimeout(function(){window.location.href = 'viewAreaList.php?userid=$userid;},200);
            </script>";
        }
    }
    // 假设 $db 是已连接的数据库连接对象
?>