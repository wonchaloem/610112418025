<html>
<body>
<?php
echo "Hello World !!!";

$sname="Somart";
$sports = array("Swimming","running");
?>
<hr>
<?="My name is Wanchaloem " . $sname?>


<form action="../action/post.php" method="POST">
            <select name="sl_sport">
             <option>-Select-</option>
                <option value="1">Football</option>
                <option value="2">Tennis</option>
                 <?php
                foreach($sports as $key => $sport){
                 ?>
                <option value="<?=$key+3?>"><?=$sport?></option>
                <?php } ?>
                
            </select>
            <button type="submit">SEND</button>
        </form>
        <label id="lb_post"></label>

    </body>
</html>
<script src="../js/jquery-3.4.1.min.js"></script>
<script>
    $(function(){
        $("select").change(function(){
            sp_val = $(this).val();
            $("#lb_post").load("../action/post.php?getSport=" + sp_val);
        });
    });
</script>
