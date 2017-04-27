<?php
    include 'includes/dbconfig.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cand_name = $_POST["candidatename"];
        $party = $_POST["party"];

        $cand_query = mysqli_query($con,"SELECT * FROM presidential_candidates WHERE cand_name = '$cand_name' AND party = '$party'");
        $cand_rows = mysqli_num_rows($cand_query);

        if ($cand_rows != 0) {
            echo '<script> alert("Candidate Already Available.");</script>';
            echo '<script> window.location="../create_can.php"; </script>';
        }else{
            $create_query = mysqli_query($con,"INSERT INTO presidential_candidates(cand_name,party) VALUES('$cand_name','$party')");
            if ($create_query) {
                echo '<script> alert("Created Successfully");</script>';
                echo '<script> window.location="../create_can.php"; </script>';
            }else{
                echo '<script> alert("Creating Error. Please try Again.");</script>';
                echo '<script> window.location="../create_can.php"; </script>';
            }
        }
    }
?>