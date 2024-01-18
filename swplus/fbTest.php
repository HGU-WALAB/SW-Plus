<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

<script type="text/javascript">

  function loadFb(){
    $.ajax({
        url : "https://graph.facebook.com/v4.0/503550453320183/feed?access_token=EAAFoF1KE8w8BADeX3bHXj679fST5tfkL2ZAwaD2aNZAFNjobnlBFuNl28lHbqGoc9EY7QgE50BeZA5yF7gsZAh7MsZCon7mfjEoQQ0Yt1DgqykjZA7jWdyZBIJuIj9lJZB0uZBKKvZApOpcn3gj7aBSJwofsilMJEy1dqLkjperKQomkQb4pxy4P06z4ZCbAYSTmhZBbl03bMkChwQZDZD",
        dataType: "json",
        success : function(data){
        //alert("가져온 데이터 입니다 . "+data);
        console.log(data);
        alert(data['data'][0]['message']);
        var i=0;
        var count=0;
        while(count<5){
          if(data['data'][i]['message']!=undefined){
            $("#fbBoard").append("<p>"+data['data'][i]['message']+"</p>");
            count++;
          }
          i++;
          /*if(data['data'][i]['message']==undefined)
            i=i-1;*/
        }

      },
        error: function(xhr, status, error){
            alert("데이터 받기에 실패했습니다.");
        }
    });
  }

  $(document).ready(function(){
    loadFb();
  });

</script>

<body>
  <p>제발 되게 해주세요</p>
  <div id="fbBoard">

  </div>
</body>
