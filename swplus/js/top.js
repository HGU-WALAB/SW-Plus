
    $(document).ready(function(){

      $(".bottombar").hide();

      $("#notice").on('mouseenter',function(){
        $(".bottombar").show();
        $("#notice").attr('class','top_selected');
        $("#notice_child").attr('class','bot_selected');
      });
      $("#notice").on('mouseleave',function(){
        $(".bottombar").hide();
        $("#notice").attr('class','top_unselected');
        $("#notice_child").attr('class','bot_unselected');
      });

      $("#notice_child").on('mouseenter',function(){
        $("#notice").attr('class','top_selected');
        $("#notice_child").attr('class','bot_selected');
      });
      $("#notice_child").on('mouseleave',function(){
        $("#notice").attr('class','top_unselected');
        $("#notice_child").attr('class','bot_unselected');
      });

      $("#sw_value").on('mouseenter',function(){
        $(".bottombar").show();
        $("#sw_value").attr('class','top_selected');
        $("#value_child").attr('class','bot_selected');
      });

      $("#sw_value").on('mouseleave',function(){
        $(".bottombar").hide();
        $("#sw_value").attr('class','top_unselected');
        $("#value_child").attr('class','bot_unselected');
      });

      $("#value_child").on('mouseenter',function(){
        $("#sw_value").attr('class','top_selected');
        $("#value_child").attr('class','bot_selected');
      });

      $("#value_child").on('mouseleave',function(){
        $("#sw_value").attr('class','top_unselected');
        $("#value_child").attr('class','bot_unselected');
      });


      $("#sw_edu").on('mouseenter',function(){
        $(".bottombar").show();
        $("#sw_edu").attr('class','top_selected');
        $("#edu_child").attr('class','bot_selected');
      });

      $("#sw_edu").on('mouseleave',function(){
        $(".bottombar").hide();
        $("#sw_edu").attr('class','top_unselected');
        $("#edu_child").attr('class','bot_unselected');
      });

      $("#edu_child").on('mouseenter',function(){
        $("#sw_edu").attr('class','top_selected');
        $("#edu_child").attr('class','bot_selected');
      });

      $("#edu_child").on('mouseleave',function(){
        $("#sw_edu").attr('class','top_unselected');
        $("#edu_child").attr('class','bot_unselected');
      });

      $("#sw_introduce").on('mouseenter',function(){
        $(".bottombar").show();
        $("#sw_introduce").attr('class','top_selected');
        $("#introduce_child").attr('class','bot_selected');
      });

      $("#sw_introduce").on('mouseleave',function(){
        $(".bottombar").hide();
        $("#sw_introduce").attr('class','top_unselected');
        $("#introduce_child").attr('class','bot_unselected');
      });

      $("#introduce_child").on('mouseenter',function(){
        $("#sw_introduce").attr('class','top_selected');
        $("#introduce_child").attr('class','bot_selected');
      });

      $("#introduce_child").on('mouseleave',function(){
        $("#sw_introduce").attr('class','top_unselected');
        $("#introduce_child").attr('class','bot_unselected');
      });

      $("#reference").on('mouseenter',function(){
        $(".bottombar").show();
        $("#reference").attr('class','top_selected');
        $("#reference_child").attr('class','bot_selected');
      });

      $("#reference").on('mouseleave',function(){
        $(".bottombar").hide();
        $("#reference").attr('class','top_unselected');
        $("#reference_child").attr('class','bot_unselected');
      });

      $("#reference_child").on('mouseenter',function(){
        $("#reference").attr('class','top_selected');
        $("#reference_child").attr('class','bot_selected');
      });

      $("#reference_child").on('mouseleave',function(){
        $("#reference").attr('class','top_unselected');
        $("#reference_child").attr('class','bot_unselected');
      });

      $(".bottomMenu").on('mouseenter',function(){
        $(".bottombar").show();
      });

      $(".bottomMenu").on('mouseleave',function(){
        $(".bottombar").hide();
      });


    });
