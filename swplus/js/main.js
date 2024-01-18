var slideIndex = 0;
swimgsel();
showDivs(slideIndex);
loadFb();
function plusDivs(n) {
   showDivs(slideIndex += n);
}
function currentDiv(n) {
   showDivs(slideIndex = n);
}

function swimgsel() {
   var i;
   var x = document.getElementsByClassName("slides");
   var dots = document.getElementsByClassName("demo");
   for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
   }
   slideIndex++;
   if (slideIndex > x.length) {
      slideIndex = 1
   }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" currentshow", "");
   }
   dots[slideIndex-1].className += " currentshow";
   x[slideIndex-1].style.display = "block";
   setTimeout(swimgsel, 3500); // Change image every 2 seconds
}


function showDivs(n) {
   var i;
   var x = document.getElementsByClassName("slides");
   var dots = document.getElementsByClassName("demo");
   if (n > x.length) {slideIndex = 1}
   if (n < 1) {slideIndex = x.length}
   for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" currentshow", "");
   }
   x[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " currentshow";
}

function loadFb(){
  //alert("loadFb");
  $.ajax({
      url : "https://graph.facebook.com/v4.0/503550453320183/feed?access_token=EAACMsZCbzyt4BAFkF9XO5CTZBx1wgHD0XtlXto2gZBeMlpxACgALhkwmaZCYmaUqydyeIYAAzkRZCSmSbDZCZA5qXX75UfYmVI6XiAxNNKGEouAGNcRnL8aEb82sZA52VPicvHg7ewKQiUmwrNg5mePcd67dLchfYMiOSHbdtioCfdTY60ZClmqpa",
      dataType: "json",
      success : function(data){
      //alert("가져온 데이터 입니다 . "+data);
      console.log(data);
      //alert(data['data'][0]['message']);
      var i=0;
      var count=0;
      while(count<5){
        if(data['data'][i]['message']!=undefined){
          $(".fb_content").append("<li><a href='http://www.facebook.com/"+data['data'][i]['id']+"' target='new'>'"+data['data'][i]['message']+"</a></li>");
          count++;
        }
        i++;
        /*if(data['data'][i]['message']==undefined)
          i=i-1;*/
      }

    },
      error: function(xhr, status, error){
        $(".fb_content").append("<li>null</li>");
      }
  });
}
