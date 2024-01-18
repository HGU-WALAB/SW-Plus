
<?php include('top2.php'); ?>

<div id="container">
    <div class="content_container">
    <div class="content_menu">
      <div class="menu_title">
        <p>SW 교육</p>
      </div>
      <ul class="menu_list">
		<li id ="menu_list2" class="list_selected"><img id="arrow2" class="arrow" src="./img/content/arrow.png"/>SW 전공교육</li>
		<li id ="menu_list1" class="last_list list_unselected"><img id="arrow1" class="arrow" src="./img/content/arrow.png"/>SW 융합교육</li>       
      </ul>
    </div> <!--content_menu-->

    <div class="content_main">
      <div class="content_way">
      <p class="current_way2">SW 융합교육</p><p>한동대학교 SW중심대학 사업단 > SW 사업단 소개 > </p>
      </div>
      <div class="content_img">
        <img id="content_imgId"/ src="./img/content/sw_edu1.png">
      </div>
    </div>

  </div>
</div> <!--div container-->

<?php include('bottom.php'); ?>
<script src="./js/sw_edu.js"></script>

<?php

if($_GET['post']==2){
  echo "<script>load_page2();</script>";
}
else{
    echo "<script>load_page1();</script>";
}

?>
