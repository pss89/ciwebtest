
<!--<h1>토픽 페이지 입니다.</h1>-->
<ul>
<?php
    for($i=0;$i<count($data);$i++){      
?>
    <li><a href="/index.php/topic/get/<?php echo $data[$i]['idx']; ?>"><?php echo $data[$i]['contents']; ?></a></li>
<?php
    }
?>
</ul>