
<?php include('top2.php'); ?>

<div id="container">
    <div class="content_container">
    <div class="content_menu">
      <div class="menu_title">
        <p id="menu_title_p">SW 사업단 소개</p>
      </div>
      <ul class="menu_list">
        <li id ="menu_list1" class="list_selected"><img id="arrow1" class="arrow" src="./img/content/arrow.png"/>사업목표</li>
        <li id ="menu_list2" class="list_unselected" ><img id="arrow2" class="arrow" src="./img/content/arrow.png"/>사업단 조직</li>
        <li id ="menu_list3" class="last_list list_unselected" ><img id="arrow3" class="arrow" src="./img/content/arrow.png"/>오시는 길</li>
      </ul>
    </div> <!--content_menu-->

    <div class="content_main">
      <div class="content_way">
      <p class="current_way2">사업목표</p><p>한동대학교 SW중심대학 사업단 ></p> <p class="current_way1">SW 사업단 소개 > </p>
      </div>
      <div class="content_img">
        <img id="content_imgId"/ src="./img/content/sw_introduce1.png">
      </div>
      <div class="content_table">
        <img id="smallbox" src="./img/content/title_1.png">
        <span id="way">사업단 조직 </span>
        <br><br>
        <table id="sw_introduce_table">
          <tr>
            <th>이름</th>
            <th>연락처</th>
          </tr>
          <tr>
            <td id="td-subheading">단장 전산전자공학부 이강 교수님</td>
             <td>yk@handong.edu</td>
          </tr>
          <tr>
            <td id="td-subheading">실장 전산전자공학부 용환기 교수님</td>
             <td>wyong@handong.edu</td>
          </tr>
          <tr>
            <td id="td-subheading">실장 글로벌리더십학부 김경미 교수님</td>
             <td>kmkim@handong.edu</td>
          </tr>
          <tr>
            <td id="td-subheading">실장 전산전자공학부 김호준 교수님</td>
             <td>hjkim@handong.edu</td>
          </tr>
          <tr>
            <td id="td-subheading">실장 전산전자공학부 김광 교수님</td>
             <td>kkim@handong.edu</td>
          </tr>
          <tr>
            <td id="td-subheading">실장 전산전자공학부 조성배 교수님</td>
             <td>sungbaejo@handong.edu</td>
          </tr>
        </table>
        <br><br>
        <table id="sw_introduce_table">
          <tr>
            <th>이름</th>
            <th>연락처</th>
            <th>업무</th>
          </tr>
          <tr>
            <td id="td-subheading">이윤정 </td>
             <td>1478</td>
             <td>예산<br> 마일리지 장학금 </br>SW특기자 장학금 <br> SW페스티벌 <br> 사업관련 출장 지원 </td>
          </tr>
          <tr>
            <td id="td-subheading">최경현 </td>
             <td>1515</td>
             <td>예산<br> 가치확산 (SW봉사단/꿈틀학교/교수외부특강) </br>창업지원  <br> 경진대회 및 공모전 <br> 학생지원(전공) / TOPCIT </td>
          </tr>
          <tr>
            <td id="td-subheading">이미나 </td>
             <td>1477</td>
             <td>국내외 산학 연구 프로젝트 <br> 교재개발 (전공/기초) </br>SW특기자 장학금 <br> SW페스티벌 <br> 사업관련 출장 지원 </td>
          </tr>
          <tr>
            <td id="td-subheading">김선영 </td>
             <td>1492</td>
             <td>국내외 인턴십 및 교육<br> 전문가 특강 </br>대외 업무 및 회의 준비 <br> 전공 캠프 <br> 홍보업무 (웹진, 뉴스레터, 사이니지) </td>
          </tr>
          <tr>
            <td id="td-subheading">문다정 </td>
             <td>1470</td>
             <td>시설, 공간관리<br> 기자재 구입 및 대여, 관리 </br>노트북(맥북) 대여 사업 <br> TA 지원 <br> AI융합전공 행정업무 <br> 취업현황, 마일스톤 관리 </td>
          </tr>
        </table>
        <br><br>
      </div>
      <div class="map">
        <img id="smallbox" src="./img/content/title_1.png"/> <span id="way"> 오시는 길</span>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=ggrgqn99xd" ></script>
        <div id="map_ma"></div>
        <script src="./js/hdmap.js"></script>
        <img id="address"/ src="./img/content/info.png">
      </div>
    </div>

  </div>
</div> <!--div container-->

<?php include('bottom.php'); ?>
<script src="./js/sw_introduce.js"></script>

<?php

if($_GET['post']==2){
  echo "<script>load_page2();</script>";
}
else if($_GET['post']==3){
  echo "<script>load_page3();</script>";

}
else{
    echo "<script>load_page1();</script>";
}
?>
