<html>
  <head>
    <title>한동대 SW중심대학 </title>
	<style>
		div.topbar {
			width:100%;
			height:70px;
			display:inline-block;
		}
		div.logo {
			float:left;
		}
		div.topmenu {
			float:right;
		}
		div.topmenu ul{
			float:right;		
			right:10px;
		}
		div.topmenu ul li{
			float:left;		
		}

		div.bottomMenu {
			position:absolute;
			background-color:gray;
			width:100%;
			float:right;
		}
		div.bottomMenu ul{
			float:right;
		}
	</style>
  </head>

  <body>
    <div class=bodyWrapper>
    <div class="menu">
      <div class="topbar">
        <div class="logo">
            <a class="no" href="http://csee.handong.edu/swplus/"><img src="./img/top/logo.png" id = "logo"/></a>
        </div>
        <div class="topMenu">
          <ul>
            <li id="reference" class="top_unselected"><a href="http://csee.handong.edu/notice/swnotice/" target="new">공지 사항</a></li>
            <li id="notice" class="top_unselected"><a href="./newsletter.php">알림 소식</a></li>
            <li id="sw_value" class="top_unselected"><a href="./sw_val.php?post=1">SW가치확산</a></li>
            <li id="sw_edu" class="top_unselected"><a href="./sw_edu.php?post=1">SW교육</a></li>
            <li id="sw_introduce" class="top_unselected"><a href="./sw_introduce.php?post=1">SW사업단 소개</a></li>
          </ul>
        </div>		
      </div>

      <div class="bottomMenu">
          <ul id="reference_child" class="bot_unselected">
            <li id="reference_child1" class="child_unselected"><a href="http://csee.handong.edu/notice/swnotice/" target="new">공지사항</a></li>
            <li id="reference_child2" class="child_unselected"><a href="http://csee.handong.edu/pds/" target="new">자료실</a></li>
          </ul>
          <ul id="notice_child" class="bot_unselected">
            <li id="notice_child1" class="child_unselected"><a href="./newsletter.php">뉴스레터</a><li>
            <li id="notice_child2" class="child_unselected"><a href="http://csee.handong.edu/webzine/" target="new">웹진</a><li>
          </ul>
          <ul id="value_child" class="bot_unselected">
            <li id="val_child1" class="child_unselected"><a href="./sw_val.php?post=1">가치확산 소개</a></li>
            <li id="val_child2" class="child_unselected"><a href="./sw_val.php?post=2">교육실적</a></li>
          </ul>
          <ul id="edu_child" class="bot_unselected">
            <li id="edu_child2" class="child_unselected"><a href="./sw_edu.php?post=2">SW전공교육</a></li>
            <li id="edu_child1" class="child_unselected"><a href="./sw_edu.php?post=1">SW융합교육</a></li>
          </ul>
          <ul id="introduce_child" class="bot_unselected">
            <li id="intro_child1" class="child_unselected"><a href="./sw_introduce.php?post=1">사업목표</a></li>
            <li id="intro_child2" class="child_unselected"><a href="./sw_introduce.php?post=2">사업단 조직</a></li>
            <li id="intro_child3" class="child_unselected"><a href="./sw_introduce.php?post=3">오시는 길</a></li>
          </ul>
        </div>
    </div>
    <!---div menu-->
   <div id="container">
       <div class = "slidebox">
         <div id="subject">
           <img class="slides" src="./img/main/mainimage.png" alt="subject5" style="display:block"/></a>
           <img class="slides" src="./img/main/main_new.png" alt="subject2"/></a>
           <img class="slides" src="./img/main/main3.png" alt="subject3"/></a>

         <!--  <img class="slides" src="./img/main/mainimage.png" alt="subject4"/></a>-->

           <img class="leftslide" src="./img/main/left.png" onclick="plusDivs(-1)" />
           <img class="rightslide" src="./img/main/right.png" onclick="plusDivs(1)" />

            <div class="slideshow">
               <span class="badge demo currentshow" onclick="currentDiv(1)"></span>
               <span class="badge demo" onclick="currentDiv(2)"></span>
               <span class="badge demo" onclick="currentDiv(3)"></span>
               <!--<span class="badge demo" onclick="currentDiv(4)"></span>-->
            </div>
       </div>
     </div>

     <div class="middlebox">
       <div class="contentDiv">
         <div class="fourbox">
           <a href="./sw_introduce.php" ><img class="boxMenu " src="./img/main/image1.png"/></a>
           <a href="./sw_edu.php?post=2" ><img class="boxMenu fourMargin" src="./img/main/image2.png"/></a>
           <a href="./sw_edu.php?post=1" ><img class="boxMenu fourMargin" src="./img/main/image3.png"/></a>
           <a href="./sw_val.php" ><img class="boxMenu fourMargin" src="./img/main/image4.png"/></a>

         </div>

         <div class="threebox">
             <div class="box1">
               <div class="boxcontent">
                 <div id="boxheading"><img id="titleimage" src="./img/middle/notice_2.png">
                 <a href="http://csee.handong.edu/notice/swnotice/" id="plus"><img class="moreImg" src="./img/middle/more_green.png"/></a>
                 </div>
                 <hr>
                                      
                   <ul id="content">

                       <!-- the loop -->
                                                  <li><a href="http://csee.handong.edu/2019/10/%ec%a7%80%ec%97%ad%ec%84%a0%eb%8f%84%eb%8c%80%ed%95%99-%eb%8c%80%ea%b2%bd%ea%b6%8c-%ea%b3%b5%ea%b3%b5%eb%8d%b0%ec%9d%b4%ed%84%b0-%ed%99%9c%ec%9a%a9-%ea%b2%bd%ec%a7%84%eb%8c%80%ed%9a%8c/" target="new">[지역선도대학] 대경권 공공데이터 활용 경진대회[L]</a></li>
                                                  <li><a href="http://csee.handong.edu/2019/10/sw%ec%a4%91%ec%8b%ac%eb%8c%80-%ed%8c%80%ec%8a%a4%ed%8e%98%ec%9d%b4%ec%8a%a4%ec%82%ac%ec%9d%b4%eb%8b%88%ec%a7%80-%ea%b4%80%eb%a6%ac-%ea%b7%bc%eb%a1%9c%ed%95%99%ec%83%9d-%eb%aa%a8%ec%a7%91/" target="new">[SW중심대] 팀스페이스&amp;사이니지 관리 근로학생 모집[L]</a></li>
                                                  <li><a href="http://csee.handong.edu/2019/10/sw%ec%a4%91%ec%8b%ac%eb%8c%80-2019%eb%85%84-sw%ea%b5%90%ec%9c%a1-%eb%b4%89%ec%82%ac%eb%8b%a8-%ea%b5%ad%eb%82%b4-%ed%95%b4%ec%99%b8-%ed%98%84%ec%9e%a5%ec%8b%a4%ec%8a%b5-%ec%88%98%ea%b8%b0-%ea%b3%b5/" target="new">[SW중심대] 2019년 SW교육 봉사단 &amp;국내, 해외 현장실습 수기 공모전 수상자 안내[L]</a></li>
                                                  <li><a href="http://csee.handong.edu/2019/10/sw%ec%a4%91%ec%8b%ac%eb%8c%80-%ed%8a%b9%ed%97%88%ec%ba%a0%ed%94%84-%ec%9d%bc%ec%8b%9c-%ec%95%88%eb%82%b4-10-9%ec%88%98-10%ec%8b%9c16%ec%8b%9c/" target="new">[SW중심대] 특허캠프 일시 안내 (10/9(수) 10시~16시)[L]</a></li>
                                                  <li><a href="http://csee.handong.edu/2019/10/%ec%a0%9c-5%ed%9a%8c-%ea%b8%80%eb%a1%9c%eb%b2%8c-%ec%9d%b4%eb%85%b8%eb%b2%a0%ec%9d%b4%ed%84%b0-%ed%8e%98%ec%8a%a4%ed%83%8010-13/" target="new">제 5회 글로벌 이노베이터 페스타(~10/13)[L]</a></li>
                                              <!-- end of the loop -->

                   </ul>
                       
             
</div>
      </div>
      <div class="box2">
        <div class="boxcontent">
          <div id="boxheading"><img id="titleimage1" src="./img/middle/newsletters_2.png">
          <a href="./newsletter.php" id="plus"><img class="moreImg" src="./img/middle/more_white.png"/></a>
          </div>
          <hr>
          <div class="newsletter">
            <div id="c1">
              <a href="http://csee.handong.edu/newsletter/1908_v4/newsletter_v4.html" target="new"><img class="news1" alt="뉴스레터v4" src="./img/middle/v4.png"></a>
              <p class="caption">2019.07 뉴스레터 Vol.4</p>
            </div>
            <div id="c2">
                     <a href="http://csee.handong.edu/newsletter/1904_v3/newsletter_v3.html" target="new"><img class ="news2" alt="뉴스레터v3" src="./img/middle/v3.png"></a>
                     <p class="caption">2019.04 뉴스레터 Vol.3</p>
                 </div>
             </div>

      </div>
      </div>
      <div class="box3">
        <div class="boxcontent">
          <div id="boxheading"><img id="titleimage2" src="./img/middle/facebook_2.png">
          <a href="https://www.facebook.com/hguswplus/" target="_blank" id="plus"><img class="moreImg" src="./img/middle/more_green.png"></a>
          </div>
          <hr>
              <ul id="content" class="fb_content">

             </ul>
             </div>
           </div>
         </div>
       </div> <!--contentDiv-->
     </div>
   </div> <!--container-->
     <div class="footer">
      <hr>
      <div class="link">
        <div class="RollDiv">
          <div>
                <a href="http://www.software.kr/um/main.do" target="new"><img alt="소중대" src="./img/bottom/bottom3.png"></a>
                <a href="http://handong.edu/" target="new"><img id="handongImg" alt="한동대학교" src="./img/bottom/bottom1.png"></a>
                <a href="http://csee.handong.edu/" target="new"><img alt="한동대전산전자공학부" src="./img/bottom/bottom2.png"></a>
                <a href="https://www.facebook.com/hguswplus/" target="new"><img  alt="중심대페북" src="./img/bottom/bottom4.png" ></a>
                <a href="https://www.facebook.com/hgucsee/" target="new"><img  alt="전산전자페북" src="./img/bottom/bottom5.png"></a>
        </div>
      </div>
    </div>
    <hr>
    <div class="down">
      <a href="http://handong.edu/" target="new"><img class="logodown" alt="한동대학교" src="./img/bottom/bottom logo.png"></a>
      <div class="address">
      		<p class="l1">37554 경북 포항시 북구 흥해읍 한동로 558 한동대학교 뉴턴홀 309호 전산전자공학부</p>
          <p class="l2">Phone. 054-260-1414, 1378 &nbsp;| &nbsp; Fax. 054-260-1976 &nbsp; | &nbsp; Email. csee@handong.edu</p>
      	  <p class= "l3">copyright © 2019 한동대학교 전산전자공학부</p>
      </div>
    </div>
  </div>

</div> <!-- bodyWrapper-->
</body>
</html>

