<?php
    include "connect.php";
    $query1 = mysqli_query($con, "SELECT * FROM history WHERE user_id='{$_GET['user_id']}'");
?>

<div class="col">
        
        <?php
            for($i=0;$i<$query1->num_rows;$i++){
                $stroka1 = $query1->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <h3>
                        <?php 
                            if ($stroka1['type']==1) {
                                echo "Завтрак";
                            }elseif ($stroka1['type']==2) {
                                echo "Обед";
                            }elseif ($stroka1['type']==3) {
                                echo "Ужин";
                            }
                        ?>
                    </h3>
                </div>
                <div class="row">
                    <p>
                        <?php 
                            echo $stroka1['day1'];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col">
                <form action="delhist.php" method="POST">
                    <?php
                        echo '<input style="display:none;"type="num" name="id" value="'.$stroka1['id'].'">'
                    ?>                    
                    <button class="btn">DELETE</button>
                </form>
            </div>
        </div>
        <?php
            }
        ?>
        
    </div>