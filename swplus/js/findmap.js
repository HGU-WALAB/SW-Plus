$(document).ready(function() {
var myLatlng = new google.maps.LatLng(36.103253,129.387043); // 위치값 위도 경도
var Y_point			= 36.103253;		// Y 좌표
var X_point			= 129.387043;		// X 좌표
var zoomLevel		= 18;				// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
var markerTitle		= "한동대학교 SW사업단";		// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
var markerMaxWidth	= 300;				// 마커를 클릭했을때 나타나는 말풍선의 최대 크기

// 말풍선 내용
var contentString	= '<div>' +
'<h2>한동대학교 SW사업단</h2>' +
'<p>뉴턴홀 218호</p>' +

'</div>';
var myLatlng = new google.maps.LatLng(Y_point, X_point);
var mapOptions = {
				zoom: zoomLevel,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
var map = new google.maps.Map(document.getElementById('map_ma'), mapOptions);
var marker = new google.maps.Marker({
									position: myLatlng,
									map: map,
									title: markerTitle
});
var infowindow = new google.maps.InfoWindow(
										{
											content: contentString,
											maxWizzzdth: markerMaxWidth
										}
	);
google.maps.event.addListener(marker, 'click', function() {
infowindow.open(map, marker);
});
});
