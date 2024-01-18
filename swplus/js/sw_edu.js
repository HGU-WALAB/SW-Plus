$(document).ready(function(){

  $("#menu_list1").click(function(){
    load_page1();
  });

  $("#menu_list2").click(function(){
    load_page2();
  });

});

function load_page1(){
  $("#menu_list1").attr('class','last_list list_selected');
  $("#menu_list2").attr('class','list_unselected');
  $("#content_imgId").attr('src','./img/content/sw_edu1.png');
  $(".current_way2").text('SW 융합교육');
  $("#arrow1").show();
  $("#arrow2").hide();
}

function load_page2(){
  $("#menu_list2").attr('class','list_selected');
  $("#menu_list1").attr('class','last_list list_unselected');
  $("#content_imgId").attr('src','./img/content/sw_edu2.png');
  $(".current_way2").text('SW 전공교육');
  $("#arrow2").show();
  $("#arrow1").hide();
}
