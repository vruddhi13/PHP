<?php

    include 'connection.php';
    $obj = new dataConnection();

    $res = $obj->showstudent();
    $num = mysqli_num_rows($res);

    if($num>0)
    {
        ?>
        <table border="1">
            <tr>
                <th>Student Id</th>
                <th>Student Name</th>
                <th>Student Contact</th>
                <th>Skill ID</th>
                <th>Student Image</th>
            </tr>

            <?php  while($data = mysqli_fetch_array($res))
            {
                ?>
                    <tr>
                        <th><?php echo $data[0];  ?></th>
                        <th><?php echo $data[1];  ?></th>
                        <th><?php echo $data[2];  ?></th>
                        <th><?php echo $data[3];  ?></th>
                        <th><?php echo $data[4];  ?></th>
                    </tr>
                <?php

            }
            ?>
        </table>
        <?php
    }


?>