$(document).ready(function(){

  $("#menu_list1").click(function(){
    load_page1();
  });

  $("#menu_list2").click(function(){
    load_page2();
  });

  $("#menu_list3").click(function(){
    load_page3();
  });

});

function load_page1(){
  $("#menu_list1").attr('class','list_selected');
  $("#menu_list2").attr('class','list_unselected');
  $("#menu_list3").attr('class','last_list list_unselected');
  $("#content_imgId").attr('src','./img/content/sw_introduce1.png');
  $(".current_way2").text('사업목표');
  $(".content_img").show();
  $(".content_table").hide();
  $(".map").hide();
  $("#arrow1").show();
  $("#arrow2").hide();
  $("#arrow3").hide();
}

function load_page2(){
  $("#menu_list2").attr('class','list_selected');
  $("#menu_list1").attr('class','list_unselected');
  $("#menu_list3").attr('class','last_list list_unselected');
  $("#content_imgId").attr('src','./img/content/update3.png');
  $(".current_way2").text('사업단 조직');
  $(".content_img").hide();
  $(".content_table").show();
  $(".map").hide();
  $("#arrow2").show();
  $("#arrow1").hide();
  $("#arrow3").hide();
}

function load_page3(){
  $("#menu_list2").attr('class','list_unselected');
  $("#menu_list1").attr('class','list_unselected');
  $("#menu_list3").attr('class','last_list list_selected');
  $(".current_way2").text('오시는 길');
  $(".content_img").hide();
  $(".content_table").hide();
  $(".title").show();
  $(".map").show();
  $("#arrow2").hide();
  $("#arrow1").hide();
  $("#arrow3").show();
}
