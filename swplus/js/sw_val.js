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

  $("#record_17").click(function(){
    $("#content_imgId").attr('src','./img/content/sw_val2017.png');
    $("#record_17").attr('class','record_selected');
    $("#record_18").attr('class','record_unselected');
    $("#record_19").attr('class','record_unselected');
    $("#record_20").attr('class','record_unselected');
    $("#record_21").attr('class','record_unselected');
    $("#titletext").text('2017년도 SW교육실적');

  });

  $("#record_18").click(function(){
    $("#content_imgId").attr('src','./img/content/sw_val2018.png');
    $("#record_21").attr('class','record_unselected');
    $("#record_20").attr('class','record_unselected');
    $("#record_19").attr('class','record_unselected');
    $("#record_18").attr('class','record_selected');
    $("#record_17").attr('class','record_unselected');
    $("#titletext").text('2018년도 SW교육실적');

  });

  $("#record_19").click(function(){
    $("#content_imgId").attr('src','./img/content/sw2019s.png');
    $("#record_21").attr('class','record_unselected');
    $("#record_20").attr('class','record_unselected');
    $("#record_19").attr('class','record_selected');
    $("#record_18").attr('class','record_unselected');
    $("#record_17").attr('class','record_unselected');
    $("#titletext").text('2019년도 SW교육실적');

  });

  $("#record_20").click(function(){
    $("#content_imgId").attr('src','./img/content/sw2020s.png');
    $("#record_21").attr('class','record_unselected');
    $("#record_20").attr('class','record_selected');
    $("#record_19").attr('class','record_unselected');
    $("#record_18").attr('class','record_unselected');
    $("#record_17").attr('class','record_unselected');
    $("#titletext").text('2020년도 SW교육실적');

  });

  $("#record_21").click(function(){
    $("#content_imgId").attr('src','./img/content/sw2021s.png');
    $("#record_21").attr('class','record_selected');
    $("#record_20").attr('class','record_unselected');
    $("#record_19").attr('class','record_unselected');
    $("#record_18").attr('class','record_unselected');
    $("#record_17").attr('class','record_unselected');
    $("#titletext").text('2021년도 SW교육실적');

  });

});

function load_page1(){
  $("#menu_list1").attr('class','list_selected');
  $("#menu_list2").attr('class','list_unselected');
  $("#menu_list3").attr('class','list_unselected');
  $("#content_imgId").attr('src','./img/content/sw_val_update_2021_3.png');
  $("#content_imgId").attr('style','width: 100%;');
  $(".current_way2").text('가치확산 소개');
  $(".title").attr('style', 'visibility: hidden; margin-top:0px;');
  $("#record_21").attr('style', 'display: none;');
  $("#record_20").attr('style', 'display: none;');
  $("#record_19").attr('style', 'display: none;');
  $("#record_18").attr('style', 'display: none;');
  $("#record_17").attr('style', 'display: none;');
  $("#timeline").attr('style', 'display: none;');
  $("#arrow1").show();
  $("#arrow2").hide();
  $("#arrow3").hide();
}

function load_page2(){
  $("#menu_list2").attr('class','list_selected');
  $("#menu_list1").attr('class','list_unselected');
  $("#menu_list3").attr('class','list_unselected');
  $("#content_imgId").attr('src','./img/content/sw2021s.png');
  $("#content_imgId").attr('style','width: 80%; margin-top: 30px;');
  $(".current_way2").text('교육 실적');
  $(".title").attr('style', 'visibility: visible;');
  $("#record_21").attr('class', 'record_selected');
  $("#record_20").attr('class', 'record_unselected');
  $("#record_19").attr('class','record_unselected');
  $("#record_18").attr('class','record_unselected');
  $("#record_17").attr('class','record_unselected');
  $("#record_21").attr('style', 'visibility: visible;');
  $("#record_20").attr('style', 'visibility: visible;');
  $("#record_19").attr('style', 'visibility: visible;');
  $("#record_18").attr('style', 'visibility: visible;');
  $("#record_17").attr('style', 'visibility: visible;');
  $("#timeline").attr('style', 'display: none;');
  $("#arrow2").show();
  $("#arrow1").hide();
  $("#arrow3").hide();
}

function load_page3(){
  $("#menu_list2").attr('class','list_unselected');
  $("#menu_list1").attr('class','list_unselected');
  $("#menu_list3").attr('class','list_selected');
  $("#content_imgId").attr('src','./img/content/sw2021s.png');
  $("#content_imgId").attr('style','width: 80%; margin-top: 30px;');
  $(".current_way2").text('SW 타임라인');
  $(".title").attr('style', 'visibility: hidden; margin-top:0px;');
  $(".content_img").attr('style','display: none;');
  $("#record_21").attr('style', 'display: none;');
  $("#record_20").attr('style', 'display: none;');
  $("#record_19").attr('style', 'display: none;');
  $("#record_18").attr('style', 'display: none;');
  $("#record_17").attr('style', 'display: none;');
  $("#timeline").attr('style', 'visibility: visible;');
  $("#arrow3").show();
  $("#arrow2").hide();
  $("#arrow1").hide();
}
