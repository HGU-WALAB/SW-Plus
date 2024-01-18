<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./css/employment_status.css">
<link rel="stylesheet" type="text/css" href="./css/bottom.css">
<!-- <link rel="stylesheet" type="text/css" href="./css/top2.css">
<link rel="stylesheet" type="text/css" href="./css/top.css"> -->
<link rel="stylesheet" type="text/css" href="./css/content.css">
<style>

body{
  font-family: 'Lato', sans-serif !important;
}

.mobile-container {
  margin: auto;
  font-size: 0.6em !important;
}

.topnav {
  overflow: hidden;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: #2f6951;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 12px;
  display: block;
}

.topnav a.icon {
  display: block;
  position: absolute;
  background-color: transparent !important;
  color: #2f6951 !important;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color: rgba(184,197,190, 0.3);
  color: rgb(134,115,70);
}

.mobile-container #smallbox{
  width: 5px !important;
}
.mobile-container #way{
  font-size:14px !important;
}
.mobile-container ul.status li::before{
  margin-left: -3.7em !important;
}
.mobile-container .content_way p {
  font-size: 9px !important;
}
.mobile-container .content_way {
  margin-bottom:0 !important;
  height: 30px !important;
}
.footerlogo{
  width: 100px;
  margin-top: 10px;
  margin-left: 5px;
}

.active {
  color: white;
}
</style>
</head>
<body>

<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
      <a class="" href="http://csee.handong.edu/swplus/"><img style="width: 60%;"src="./img/top/logo.png" id = "logo"/></a>
  <div id="myLinks">
    <a href="./sw_introduce.php?post=1">SW사업단 소개</a>
    <a href="./sw_edu.php?post=1">SW교육</a>
    <a href="./sw_val.php?post=1">SW가치확산</a>
    <a href="./newsletter.php">알림소식</a>
    <a href="http://csee.handong.edu/notice/swnotice/">공지사항</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div>
  <div class="topimg">
    <img style="width: 100%;" src="./img/top2/image5_1.png"/>
  </div>

  <div class="content_way">
  <p class="current_way2">SW 중심대 취업현황</p><p>한동대학교 SW중심대학 사업단 > SW 뉴스 > </p>
  </div>

  <div class="employment_wrapper" id="content_news4">
    <img id="smallbox" src="./img/content/title_1.png">
    <span id="way"> 컴공(심화) 전공자 취업/진학 상세 자료</span>
    <div class="employment">
    <ul class="status">
      <li>졸업생 졸업년도</li>
      <span class="normal-text">- 2017년 8월 - 2020년
      <li>컴퓨터공학 1전공자 취업자 수</li>
      <span class="normal-text">- 254명 취업 (컴공심화, 컴퓨터공학, IT 졸업생 수 309명)</span>
    </ul>

    <img id="smallbox" src="./img/content/title_1.png">
     <span id="way"> 연도별 취업/진학 현황</span>

     <table id="emp-table" style="margin-bottom: 10px !important;">
      <tr>
        <th>졸업시기</th>
        <th>졸업생 (명)</th>
        <th>진학/ 유학/ 군입대</th>
        <th>취업자 (c)</th>
        <th>미취업자 (c)</th>
        <th>순수<br>취업률</th>
        <th>진학률</th>
      </tr>
      <tr>
        <td id="td-subheading">17년 8월</td>
        <td>50</td>
        <td>7</td>
        <td>37</td>
        <td>6</td>
        <td>86.0%</td>
        <td>14%</td>
      </tr>
      <tr>
        <td id="td-subheading">18년 2월</td>
        <td>80</td>
        <td>11</td>
        <td>58</td>
        <td>11</td>
        <td>84.1%</td>
        <td>12.5%</td>
      </tr>
      <tr id="total-row">
        <td id="td-subheading">17.8월, 18.2월</td>
        <td>130</td>
        <td>18</td>
        <td>95</td>
        <td>17</td>
        <td>84.8%</td>
        <td>13.1%</td>
      </tr>

      <tr>
        <td id="td-subheading">18년 8월</td>
        <td>46</td>
        <td>7</td>
        <td>35</td>
        <td>4</td>
        <td>89.7%</td>
        <td>15.2%</td>
      </tr>
      <tr>
        <td id="td-subheading">19년 2월</td>
        <td>68</td>
        <td>12</td>
        <td>42</td>
        <td>14</td>
        <td>75.0%</td>
        <td>17.6%</td>
      </tr>
      <tr id="total-row">
        <td id="td-subheading">18.8월, 19.2월</td>
        <td>114</td>
        <td>19</td>
        <td>77</td>
        <td>18</td>
        <td>81.1%</td>
        <td>16.7%</td>
      </tr>

      <tr>
        <td id="td-subheading">19년 8월</td>
        <td>50</td>
        <td>9</td>
        <td>38</td>
        <td>3</td>
        <td>92.7%</td>
        <td>16.0%</td>
      </tr>
      <tr>
        <td id="td-subheading">20년 2월</td>
        <td>73</td>
        <td>12</td>
        <td>44</td>
        <td>17</td>
        <td>72.1%</td>
        <td>15.1%</td>
      </tr>
      <tr id="total-row">
        <td id="td-subheading">19.8월, 20.2월</td>
        <td>123</td>
        <td>21</td>
        <td>82</td>
        <td>20</td>
        <td>80.4%</td>
        <td>15.4%</td>
      </tr>

      <tr style="font-weight:bold" id="sum-row">
        <td id="td-subheading">전체</td>
        <td>367</td>
        <td>58</td>
        <td>254</td>
        <td>55</td>
        <td>82.2%</td>
        <td>15%</td>
      </tr>
    </table>

    <div class="normal-text" style="margin-bottom: 20px !important;">순수취업율 = 취업자 수 / 취업가능자 수 (졸업자수 - 진학자수 - 군입대자 - 외국인)</div>

    <img id="smallbox" src="./img/content/title_1.png">
    <span id="way"> 연도별 대학원 진학 현황</span>

    <table id="emp-table">
     <tr>
       <th>졸업년도</th>
       <th>진학자 수</th>
       <th>대학원명</th>
     </tr>
     <tr>
       <td id="td-subheading">17년8월</td>
        <td>7명 </td>
        <td>포항공과대학교(2), 한동대학교(1), KAIST(1), 고려대학교(1), <br> GIST(1), Technical University of Munich(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">18년2월</td>
        <td>10명 </td>
        <td>서울대학교(3), 한동대학교(2), KAIST(2), 포항공과대학교(1),  <br>총신대학교(1), DGIST(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">18년8월</td>
        <td>7명 </td>
        <td>한동대학교(3), 서울대학교(1), 포항공과대학교(1), 고려대학교(1), 부경대학교(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">19년2월</td>
        <td>12명 </td>
        <td>한동대학교(8), 서울대학교(1), 포항공과대학교(2), UNIST(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">19년8월</td>
        <td>8명 </td>
        <td>KAIST(2), 한동대학교(1), 서울대학교(1), GIST(1), <br> 성균관대학교(1), Johns Hopkins University(1), UNC(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">20년2월</td>
        <td>11명 </td>
        <td>한동대학교(5), 서울대학교(3), KAIST(2),포항공과대학교(1)</td>
     </tr>

   </table>



    <img id="smallbox" src="./img/content/title_1.png">
    <span id="way"> 대학원 분류별 진학 상세 현황</span>

    <table id="emp-table">
     <tr>
       <th>대학원명</th>
       <th>진학자수</th>
       <th>비율</th>
       <th>졸업년도</th>
     </tr>
     <tr>
       <td id="td-subheading">한동대학교</td>
        <td>20</td>
        <td>36.4%</td>
        <td>17년8월(1), 18년2월(2), 18년8월(3),19년2월(8), <br>19년8월(1), 20년2월(5)</td>
     </tr>
     <tr>
       <td id="td-subheading">서울대학교</td>
        <td>9</td>
        <td>16.4%</td>
        <td>18년2월(3), 18년8월(1), 19년2월(1),19년8월(1), 20년2월(3)</td>
     </tr>
     <tr>
       <td id="td-subheading">KAIST</td>
        <td>7</td>
        <td>12.7%</td>
        <td>17년8월(1), 18년2월(2), 19년8월(2),20년2월(2)</td>
     </tr>
     <tr>
       <td id="td-subheading">포항공과대학교</td>
        <td>7</td>
        <td>12.7%</td>
        <td>17년8월(2), 18년2월(1), 18년8월(1),19년2월(2), 20년2월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">고려대학교</td>
        <td>2</td>
        <td>3.6%</td>
        <td>17년8월(1), 18년8월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">GIST</td>
        <td>2</td>
        <td>3.6%</td>
        <td>17년8월(1), 19년8월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">성균관대학교</td>
        <td>1</td>
        <td>1.8%</td>
        <td>19년8월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">UNIST</td>
        <td>1</td>
        <td>1.8%</td>
        <td>19년2월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">DGIST</td>
        <td>1</td>
        <td>1.8%</td>
        <td>18년2월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">부경대학교</td>
        <td>1</td>
        <td>1.8%</td>
        <td>18년8월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">총신대학교</td>
        <td>1</td>
        <td>1.8%</td>
        <td>18년2월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">Johns Hopkins University</td>
        <td>1</td>
        <td>1.8%</td>
        <td>19년8월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">UNC</td>
        <td>1</td>
        <td>1.8%</td>
        <td>19년8월(1)</td>
     </tr>
     <tr>
       <td id="td-subheading">Technical University of Munich</td>
        <td>1</td>
        <td>1.8%</td>
        <td>17년8월(1)</td>
     </tr>
     <tr style="font-weight: bold;" id="sum-row">
       <td id="td-subheading">합계</td>
        <td>55명</td>
        <td>100%</td>
        <td></td>
     </tr>
   </table>



    <img id="smallbox" src="./img/content/title_1.png">
      <span id="way"> 기업분류별 취업 현황</span>

      <table id="emp-table">
       <tr>
         <th>기업분류</th>
         <th>기업 수</th>
         <th>총 취업자수</th>
         <th>비율</th>
       </tr>
       <tr>
         <td id="td-subheading">대기업</td>
         <td>27</td>
         <td>58</td>
         <td>22.9%</td>
       </tr>
       <tr>
         <td id="td-subheading">중견기업</td>
         <td>7</td>
         <td>7</td>
         <td>2.7%</td>
       </tr>
       <tr>
         <td id="td-subheading">중소기업</td>
         <td>60</td>
         <td>86</td>
         <td>33.8%</td>
       </tr>
       <tr>
         <td id="td-subheading">해외기업</td>
         <td>6</td>
         <td>6</td>
         <td>2.4%</td>
       </tr>
       <tr>
         <td id="td-subheading">공기업</td>
         <td>24</td>
         <td>34</td>
         <td>13.4%</td>
       </tr>
       <tr>
         <td id="td-subheading">금융권</td>
         <td>7</td>
         <td>10</td>
         <td>3.9%</td>
       </tr>
       <tr>
         <td id="td-subheading">비영리법인</td>
         <td>2</td>
         <td>2</td>
         <td>0.8%</td>
       </tr>
       <tr>
         <td id="td-subheading">비영리단체</td>
         <td>1</td>
         <td>1</td>
         <td>0.4%</td>
       </tr>
       <tr>
         <td id="td-subheading">병원</td>
         <td>2</td>
         <td>2</td>
         <td>0.8%</td>
       </tr>
       <tr>
         <td id="td-subheading">학교</td>
         <td>4</td>
         <td>4</td>
         <td>1.6%</td>
       </tr>
       <tr>
         <td id="td-subheading">연구기관</td>
         <td>2</td>
         <td>2</td>
         <td>0.8%</td>
       </tr>
       <tr>
         <td id="td-subheading">기타(미확인)</td>
         <td></td>
         <td>38</td>
         <td>15.0%</td>
       </tr>
       <tr style="font-weight:bold" id="sum-row">
         <td id="td-subheading">합계</td>
         <td>145</td>
         <td>254</td>
         <td>100%</td>
       </tr>
     </table>



       <img id="smallbox" src="./img/content/title_1.png">
       <span id="way">기업 분류별 취업 상세 현황</span>


     <ul class="status">
       <li>대기업 : 58명</li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">삼성전자</td>
          <td>12</td>
          <td>17년8월, 18년2월, 19년2월, 19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">롯데정보통신</td>
          <td>5</td>
          <td>18년8월, 19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">삼성SDS</td>
          <td>4</td>
          <td>17년8월, 18년2월, 18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">현대오토에버</td>
          <td>4</td>
          <td>17년8월, 19년8월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">LG CNS</td>
          <td>3</td>
          <td>17년8월, 18년2월, 18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">현대엠엔소프트</td>
          <td>3</td>
          <td>18년2월, 19년2월, 19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">네이버</td>
          <td>3</td>
          <td>18년2월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">CJ올리브네트웍스</td>
          <td>2</td>
          <td>17년8월, 18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">신세계아이앤씨</td>
          <td>2</td>
          <td>19년8월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">카카오엔터프라이즈</td>
          <td>2</td>
          <td>18년8월, 19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">현대중공업</td>
          <td>2</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">KT</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">LS오토모티브</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">Shinhan BNP Paribas Asset Management (Hong Kong) Limited</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">SKT</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">넥슨코리아</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">롯데e커머스</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">롯데닷컴</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">롯데쇼핑</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">삼성메디슨</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
         <td id="td-subheading">포스코</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">포스코ICT</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">포스코켐텍</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한화시스템</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">현대IT&E</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">현대자동차</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">효성인포메이션시스템</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
     </table>


     <ul class="status">
       <li>공기업 : 34명</li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">장교</td>
          <td>5</td>
          <td>18년2월, 18년8월, 19년2월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국전력공사</td>
          <td>5</td>
          <td>18년2월, 18년8월, 19년8월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국전력기술</td>
          <td>2</td>
          <td>19년2월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한전KDN</td>
          <td>2</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">LH공사</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">공군군무원</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">국민건강보험공단</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">근로복지공단</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">금융위원회</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">대구도시철도공사</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">도로교통공단</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">법무부</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">인천국제공항공사</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">전라북도청</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">특허정보원</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국가스공사</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국교육학술정보원</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국농어촌공사</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국산업인력공단</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국수력원자력</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국장학재단</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국전력거래소</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국환경공단</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국고용정보원</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
     </table>



     <ul class="status">
       <li>중견기업 : 7명</li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">CJ헬스케어</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">KAI</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">IBK시스템</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">NC 소프트 </td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">세메스</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">스타벅스코리아</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">오뚜기</td>
          <td>1</td>
          <td>18년 2월</td>
       </tr>
     </table>



     <ul class="status">
       <li>중소기업 : 88명</li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">스트라드비전</td>
          <td>12</td>
          <td>18년2월, 18년8월, 19년2월,19년8월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한컴GMD</td>
          <td>6</td>
          <td>17년8월, 18년8월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">Bizflow</td>
          <td>3</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">딥바이오</td>
          <td>3</td>
          <td>17년8월, 18년2월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">엑슨투</td>
          <td>3</td>
          <td> 19년2월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">다날</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">레이니스트</td>
          <td>2</td>
          <td>19년2월, 20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">안랩</td>
          <td>2</td>
          <td>17년8월, 18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">줌인터넷</td>
          <td>2</td>
          <td>17년8월, 18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">(주)와이오엘오</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">8퍼센트</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">DB inc </td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">IR큐더스</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">JPI헬스케어</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">KB데이터시스템</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">PUBG.corp (배틀그라운드)</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">ST Unitas</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">건설공제조합</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">게임빌</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">네오위즈</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">디퍼아이</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">라인</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">라인스튜디오</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
          <td id="td-subheading">라임오렌지</td>
          <td>1</td>
          <td>18년2월</td>
        </tr>
        <tr>
          <td id="td-subheading">렌딧</td>
           <td>1</td>
           <td>19년2월</td>
        </tr>
        <tr>
          <td id="td-subheading">바이엠텍</td>
           <td>1</td>
           <td>19년8월</td>
        </tr>
        <tr>
          <td id="td-subheading">바텍</td>
           <td>1</td>
           <td>18년2월</td>
        </tr>
        <tr>
          <td id="td-subheading">밸로프</td>
           <td>1</td>
           <td>20년2월</td>
        </tr>
        <tr>
          <td id="td-subheading">부동산다이렉트</td>
           <td>1</td>
           <td>17년8월</td>
        </tr>
        <tr>
          <td id="td-subheading">블루버드</td>
           <td>1</td>
           <td>18년8월</td>
        </tr>
        <tr>
          <td id="td-subheading">블릭스소프트</td>
           <td>1</td>
           <td>18년2월</td>
        </tr>
        <tr>
          <td id="td-subheading">스포카</td>
           <td>1</td>
           <td>20년2월</td>
        </tr>
        <tr>
          <td id="td-subheading">신한아이타스</td>
           <td>1</td>
           <td>19년8월</td>
        </tr>
        <td id="td-subheading">알라딘시스템</td>
         <td>1</td>
         <td>20년2월</td>
      </tr>
      <tr>
        <td id="td-subheading">어스팟</td>
         <td>1</td>
         <td>19년8월</td>
      </tr>
      <tr>
        <td id="td-subheading">에이스톰</td>
         <td>1</td>
         <td>19년2월</td>
      </tr>
      <tr>
        <td id="td-subheading">엔테크서비스</td>
         <td>1</td>
         <td>19년2월</td>
      </tr>
     <tr>
       <td id="td-subheading">왓챠</td>
        <td>1</td>
        <td>20년2월</td>
     </tr>
     <tr>
       <td id="td-subheading">원소프트다임</td>
        <td>1</td>
        <td>18년2월</td>
     </tr>
     <tr>
       <td id="td-subheading">이포넷</td>
        <td>1</td>
        <td>18년2월</td>
     </tr>
     <tr>
       <td id="td-subheading">인스랩</td>
        <td>1</td>
        <td>20년2월</td>
     </tr>
     <tr>
       <td id="td-subheading">자인컴</td>
        <td>1</td>
        <td>18년8월</td>
     </tr>
     <tr>
       <td id="td-subheading">주식회사 플레이오토</td>
        <td>1</td>
        <td>18년2월</td>
     </tr>
     <tr>
       <td id="td-subheading">(주)큐앤피플</td>
        <td>1</td>
        <td>20년2월</td>
     </tr>
     <tr>
         <td id="td-subheading">지씨에스씨(부산)</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">지앤티솔루션</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">청년세탁</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">케이텍</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">텍톤스페이스</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">텐핑</td>
          <td>1</td>
          <td>19년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">폴라리스3D</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">플레이더하우스</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">핏펫</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">하이네켄코리아</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">한컴MDS</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">해성 DS(반도체)</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">해줌</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">휴온스</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">JR 코딩연구소</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">휴인스</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
     </table>


     <ul class="status">
       <li>금융권 : 10명</li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">농협</td>
          <td>2</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국씨티은행</td>
          <td>2</td>
          <td>17년8월, 18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">국민은행</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">기업은행</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">대구은행</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">신한은행</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>

     </table>


     <ul class="status">
       <li>해외기업 : 6명</li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">axxessio GmbH (독일)</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">GDI Communications Inc</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">MAKADOOM LLC</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">Next Kernel</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">SureCom</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">일본기업</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
     </table>


     <ul class="status">
       <li>글로벌기업 : 4명</li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">SAP코리아</td>
          <td>2</td>
          <td>17년8월, 18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">HP</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">BASF</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
     </table>


     <ul class="status">
       <li>기타(비영리법인 / 비영리단체 / 연구기관 / 병원 / 학교) </li>
     </ul>

     <table id="emp-table">
       <tr>
         <th>취업처명</th>
         <th>취업자수</th>
         <th>졸업년도</th>
       </tr>
       <tr>
         <td id="td-subheading">강원대학교 병원</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">극동방송</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">  김재효 교수연구실</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">부경대학교</td>
          <td>1</td>
          <td>19년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">분당서울대병원 헬스케어연구소</td>
          <td>1</td>
          <td>18년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">포스텍 브릭</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국교직원공제회</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국로봇융합원</td>
          <td>1</td>
          <td>20년2월</td>
       </tr>
       <tr>
         <td id="td-subheading">한국정보통신진흥협회</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">한동대학교</td>
          <td>1</td>
          <td>17년8월</td>
       </tr>
       <tr>
         <td id="td-subheading">장로회신학대학교</td>
          <td>1</td>
          <td>18년8월</td>
       </tr>
    </table>

  </div>
  </div>


</div>

<hr>
<div class="down">
  <a href="http://handong.edu/" target="new"><img class="footerlogo" alt="한동대학교" src="./img/bottom/bottom logo.png"></a>
  <div style="float: right; text-align: right; font-size: 9px;">
      <p >37554 경북 포항시 북구 흥해읍 한동로 558<br> 한동대학교 뉴턴홀 218호 소프트웨어중심대학사업단</p>
      <p>copyright © 2019 한동대학교 전산전자공학부</p>
  </div>
</div>

<!-- End smartphone / tablet look -->
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html>
