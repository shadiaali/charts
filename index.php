<?php
include_once 'connect.php';
?>


        <?php
        $sql = "SELECT COUNT(1) FROM rtp2k;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $total = $row[0];
                echo "Total responses: " . $total;
            }
        }
        ?>
      
      <?php
        $sql = "SELECT COUNT(1) FROM `rtp2k` WHERE `subscribed` = 'yes'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYes = $row[0];

                echo "Total yes: " . $totalYes;
            }
        }
        ?>
      
      <?php
        $sql = "SELECT COUNT(1) FROM `rtp2k` WHERE `day1` = 'y'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYesDay1 = $row[0];

                echo "Total yes day 1: " . $totalYesDay1;
            }
        }
        ?>

<?php
        $sql = "SELECT COUNT(1) FROM `rtp2k` WHERE `day2` = 'y'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYesDay2 = $row[0];

                echo "Total yes day 2: " . $totalYesDay2;
            }
        }
        ?>


<?php
        $sql = "SELECT COUNT(1) FROM `rtp2k` WHERE `day4` = 'y'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYesDay4 = $row[0];

                echo "Total yes day 4: " . $totalYesDay4;
            }
        }
        ?>