$(document).ready(function(){

  $(".arrow").show();
  $("a.webzine").click(function(){
      window.open(this.href);
     return false;
  });

  $("#menu_list1").click(function(){
    load_page1();
  });

  $("#menu_list2").click(function(){
    load_page2();
  });

  $("#menu_list4").click(function(){
    load_page4();
  });

});

function load_page1(){
  $("#menu_list1").attr('class','list_selected');
  $("#menu_list2").attr('class','list_unselected');
  $("#menu_list3").attr('class','list_unselected');
  $("#menu_list4").attr('class','list_unselected');
  $("#newsletter_imgId").attr('src','./img/content/newslettertitle.png');
  $(".current_way2").text('SW 중심대 뉴스레터');
  $(".content_img").show();
  $(".map").hide();
  $("#content_news1").show();
  $("#content_news2").hide();
  $("#content_news4").hide();
  $("#arrow1").show();
  $("#arrow2").hide();
  $("#arrow3").hide();
  $("#arrow4").hide();
}

function load_page2(){
  $("#menu_list2").attr('class','list_selected');
  $("#menu_list1").attr('class','list_unselected');
  $("#menu_list3").attr('class','list_unselected');
  $("#menu_list4").attr('class','list_unselected');
  $("#newsletter_imgId").attr('src','./img/content/sw_news_video_title.png');
  $(".current_way2").text('SW 중심대 동영상 뉴스');
  $(".content_img").show();
  $(".map").hide();
  $("#content_news2").show();
  $("#content_news1").hide();
  $("#content_news4").hide();
  $("#arrow2").show();
  $("#arrow1").hide();
  $("#arrow3").hide();
  $("#arrow4").hide();
}
function load_page4(){
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    window.open("https://csee.handong.edu/swplus/employment_mobile.php");
  }
  else{
  $("#menu_list2").attr('class','list_unselected');
  $("#menu_list1").attr('class','list_unselected');
  $("#menu_list3").attr('class','list_unselected');
  $("#menu_list4").attr('class','list_selected');
  $(".current_way2").text('컴공(심화) 전공자 취업/진학 상세 자료');
  $(".content_img").hide();
  $(".map").hide();
  $("#content_news2").hide();
  $("#content_news1").hide();
  $("#content_news4").show();
  $("#arrow2").hide();
  $("#arrow1").hide();
  $("#arrow3").hide();
  $("#arrow4").show();
}
}

/*  $("#menu_list2").click(function(){
    load_page2();
  });

  $("#record_17").click(function(){
    $("#record_imgId").attr('src','./img/content/2017.png');
    $(".year_box").attr('style','height: 649.31px;');
    $("#record_17").attr('class','year_selected');
    $("#record_18").attr('class','year_list');
    $("#record_19").attr('class','year_list');
  })

  $("#record_18").click(function(){
    $("#record_imgId").attr('src','./img/content/2018.png');
    $(".year_box").attr('style','height:578.63px;');
    $("#record_18").attr('class','year_selected');
    $("#record_17").attr('class','year_list');
    $("#record_19").attr('class','year_list');
  })
  /*$("#record_19").click(function(){
    $("#record_imgId").attr('src','./img/content/2019.png');
      $(".year_box").attr('height','639.31px');
      $("#record_19").attr('class','year_selected');
      $("#record_17").attr('class','year_unselected');
      $("#record_18").attr('class','year_unselected');
  })
});

/*function load_page1(){
  $("#menu_list1").attr('class','list_selected');
  $("#menu_list2").attr('class','last_list list_unselected');
  $("#content_imgId").attr('src','./img/content/sw_val1.png');
  $("#content_imgId").attr('style','width: 100%;');
  $(".current_way2").text('가치확산 소개');

}*/
