<?php 
    
    include("config.php");

?>

    <div class="leaders_5x5">

<?php 

    

    $query = 'SELECT * FROM `tabela_5x5_1-4` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_5x5_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
        
        
<?php 

    

    $query = 'SELECT * FROM `tabela_5x5_1-9` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_5x5_1-9">
                            <div class="leaders_head">1 - 9</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
              

        
<?php 

    

    $query = 'SELECT * FROM `tabela_5x5_1-19` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_5x5_1-19">
                            <div class="leaders_head">1 - 19</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>



    </div>


    <div class="leaders_6x6">

<?php 

    

    $query = 'SELECT * FROM `tabela_6x6_1-4` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_6x6_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
        
        
<?php 

    

    $query = 'SELECT * FROM `tabela_6x6_1-9` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_6x6_1-9">
                            <div class="leaders_head">1 - 9</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
              

        
<?php 

    

    $query = 'SELECT * FROM `tabela_6x6_1-19` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_6x6_1-19">
                            <div class="leaders_head">1 - 19</div>
                            
                            <?php 

    if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>



    </div>


    <div class="leaders_7x7">

<?php 

    

    $query = 'SELECT * FROM `tabela_7x7_1-4` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_7x7_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
        
        
<?php 

    

    $query = 'SELECT * FROM `tabela_7x7_1-9` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_7x7_1-9">
                            <div class="leaders_head">1 - 9</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
              

        
<?php 

    

    $query = 'SELECT * FROM `tabela_7x7_1-19` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_7x7_1-19">
                            <div class="leaders_head">1 - 19</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>



    </div>

    
    <div class="leaders_8x8">

<?php 

    

    $query = 'SELECT * FROM `tabela_8x8_1-4` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_8x8_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
        
        
<?php 

    

    $query = 'SELECT * FROM `tabela_8x8_1-9` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_8x8_1-9">
                            <div class="leaders_head">1 - 9</div>
                            
                            <?php

    if(mysqli_num_rows($result) > 0){ 
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>
              

        
<?php 

    

    $query = 'SELECT * FROM `tabela_8x8_1-19` ORDER BY `time` ASC, `id` ASC LIMIT 5';
    $count = 1;
    $result = mysqli_query($con, $query);
        
        ?>
        
        
                    
                        <div class="leaders_8x8_1-19">
                            <div class="leaders_head">1 - 19</div>
                            
                            <?php 

    if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $name = $row['name'];
                                    $time = $row['time'];
                                    
                                    if($time >= 60)
                                    {
                                        $min = floor($time / 60);
                                    }
                                    else $min = 0;
                                    
                                    $sek = $time - ($min*60);
                                    
                                    $time2 = "";
                                    
                                    if($min < 10) $time2 = $time2.'0'.$min.':';
                                    else $time2 = $time2.''.$min.':';
                                    
                                    if($sek < 10) $time2 = $time2.'0'.$sek;
                                    else $time2 = $time2.''.$sek;

                            ?>
                            
                            <div class="leaders_center">
                                <div class="leaders_name"><?php echo $count;?>. <?php echo $name;?></div><div class="leaders_time"><?php echo $time2;?></div>
                            </div>
                            
                            <?php
                                    $count++;
                                }
                            ?>
            <?php
                }
                            ?>
                            
                        </div>



    </div>

<?php

    $con->close();
?>