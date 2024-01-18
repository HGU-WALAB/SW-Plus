
var moveType = 0; //0:left / 1:right
var moveSpeed = 7000;
var moveWork = false;
var movePause = false;

imgMove();

function imgMove(){
	var i = 0;
    if(!moveWork){
       // 0d\일경우 left방향
      if(moveType==0){
         // 맨처음 이미지의 폭
         var aWidth = $("ul.news_slider > li:first").width();
         // 롤링마지막에 맨처음의 a태그 추가
         $("ul.news_slider").append("<li><a href=\""+$("ul.news_slider > li:first > a").attr("href")+"\" target='new'>" + $("ul.news_slider > li:first > a").html()+ "</a></li>");
         // 맨처음이미지를 왼쪽으로 이동시킨다.
		 setVisible();
         $("ul.news_slider > li:first").animate({marginLeft:-aWidth},{duration:moveSpeed,step:function(){
         },complete:function(){
            // 이동을 마친후 첫번째 a태그를 지워버린다
			 $(this).remove();
			 // 이미지 움직이는것을 다시 실행

			 imgMove();
      }});
      }else{
		  // 마지막 a태그의 폭
		   var aWidth = $("ul.news_slider > li:last").width();
		   // a태그 앞에 마지막의 a태그를 생성한다 단 스타일은 마지막 a태그의 폭만큼 빼준다
		   $("<a href=\"" + $("ul.news_slider > li:last > a").attr("href")+ "\" style=\"margin-left:-" + aWidth + "px\">" + $("ul.news_slider > li:last > a").html()+ "</a>").insertBefore("ul.news_slider > li:first")
		   // 맨처음 a태그의 margin-left를 다시 0으로 맞춰준다.
		   setVisible();
		   $("ul.news_slider > li:first").animate({marginLeft:"30px"},{duration:moveSpeed,step:function(){
		   // 이동중 만약 일시정지 flag가 true라면
		   if(movePause){
				  // 이동을 멈춘다
				  $(this).stop();
		   }
		   },complete:function(){
		   // 이동을 마친후 마지막 a태그를 지워버린다
		   $("ul.news_slider > li:last").remove();
		   imgMove();
    }});
 }
 }
 }

 function setVisible(){
	var maximg = 2;
	$('ul.news_slider > li').each(function (index, item) {
		if(index > maximg){
			$(item).css("display","none");
		}
		else {
		    $(item).css("display","block");
		}
	});
 }
 function goMove(){
    // 일시정지가 풀려있을 경우를 대비하여 일시정지를 풀러준다
    movePause=false;
    // 0d\일경우 left방향
    if(moveType==0){
       imgMove();
       }else{
       $("ul.news_slider > li:first").animate({marginLeft:0},{duration:moveSpeed,step:function(){
       // 이동중 만약 일시정지 flag가 true라면
       if(movePause==true){
          // 이동을 멈춘다
          $(this).stop();
      }
       },complete:function(){
      // 이동을 마친후 마지막 a태그를 지워버린다
      //$("ul.news_slider > li:last").remove();
      // 이미지 움직이는것을 다시 실행
      imgMove();
   }});
}
}
