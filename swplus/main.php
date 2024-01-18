<?php //require_once( dirname(__FILE__) . '/../wp-load.php' );?>
<?php include('top.php'); ?>

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
                   <?php
                   if ( !isset($wp_did_header) ) {
                     $wp_did_header = true;
           $wpb_all_query = new WP_Query(array('post_type'=>'post', 'category_name' =>'swnotice', 'post_status'=>'publish', 'posts_per_page'=>5)); ?>
                   <?php if ( $wpb_all_query->have_posts() ){ ?>

                   <ul id="content">

                       <!-- the loop -->
                       <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                           <li><a href="<?php the_permalink(); ?>" target="new"><?php the_title(); ?></a></li>
                       <?php endwhile; ?>
                       <!-- end of the loop -->

                   </ul>
                       <?php wp_reset_postdata(); ?>

             <?php } else { ?>

                   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                       <?php }
             }
             ?>

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
              <a href="http://csee.handong.edu/newsletter/2206_v13/newsletter_v13.html" target="new"><img class="news1" alt="뉴스레터v13" src="https://csee.handong.edu/wp-content/uploads/2022/06/newsletter_v13.png"></a>
              <p class="caption">2022.06 뉴스레터 Vol.13</p>
            </div>
            <div id="c2">
                 <a href="https://csee.handong.edu/newsletter/2212_v14/newsletter_v14.html" target="new"><img class ="news2" alt="뉴스레터v14" src="https://csee.handong.edu/wp-content/uploads/2022/12/csee.handong.edu_newsletter_2212_v14_newsletter_v14.html_.png"></a>
                 <p class="caption">2022.12 뉴스레터 Vol.14</p>
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
                <!--
                <li><a href="facebook.com/hguswplus/posts/954687381539819?__tn__=-R" target="new">국립해양조사원 공모전 소식 해양(수산)정보를 활용한 VR, AR, 앱 등의 산업화 기획</a></li>
                 <li><a href="https://www.facebook.com/hguswplus/posts/950633208611903?__xts__%5B0%5D=68.ARAnxQViyGFauIFYmUfgy2DBR2siOcXqG2qXpUxnZ8nrl2ubK1zaLsP6JSWtJ90t-J4t26vcksaiQiEArMhxWdbXZ8kLUezFAv9c1jHh1fh_c5HMgvU3i6SgL2uj34-zV2mJ9f_yPsXDslVa5kUOEiPQ27TX_Xctq6lT-VLVvvuGs-Zg0y_LFVBZg_EY8mtU-a_pC6nJzrDlKCiMzYM_CrNEZ8xE2RGqzuhP15LOOzAcxaAbjrRyKiJm9MVsXskk_YdyXztYaOfKw4tXBxkFV_VAkR-GE5sska8b9N7I05lU8qQw_4_F6M5I9T4r1bhYhG1Mw1Pp3skUaic6CykdICOVJaHgP68Fn_D3UmWeXHA-qMe8hvle2tFa6cRSgGJuuE_pKMFG6wZHYypHsSSzkpRhJE4u_nhzOj669EIPE7anXrNOfxXLWnqTNLTDKngQsGS3k9FgJeCtCEvjrxbGe4dHcvDf&__tn__=-R" target="new">FEConf2019 공식 페이지가 오픈되었습니다!
 많은 관심 부탁드립니다</a></li>
                 <li><a href="https://www.facebook.com/hguswplus/posts/947726335569257?__xts__%5B0%5D=68.ARDByNy2s_M9KyZJ1AllNajsBUw7VpWmaSKNGanS5j5eXeSmHcKbLtnNrLyCeL75yBJDBuymF9QE0KZkhFkENm5gyatlaKZMexVXrKzFyD5Pp6AND0zYaPDPeN2HQRxospaof5wYkDKJGdEbZ-_xvpz1wbqUQL-r0G96sg8jSe6Z-2-1mFdDVQVvDcF7VKqf3-kvdblRlxEK4CSXO55bqwZ4cmgMv9HD_znmi-Bm42HZ7WpHORBwYas8YVoM_rCtS2WiMVYjNU845q46La2FL-HybEWcK6RZPFMCMqz_HgE5ehm-r4ivsI1UmhkUeRIG70tOJZJc98z4oQ5WCN5w8ww&__tn__=-R" target="new">
                 한동대 창업관련 대회·공모전 잇따라 수상</a></li>
                 <li><a href="https://www.facebook.com/hguswplus/posts/946953978979826?__xts__%5B0%5D=68.ARBG8NK-Tic675Jmj8oUtuvlK-jBYor5NNYp9364lL8j5GQgydDMMNR12sezZ4QpFofPtUwhW5Y82Vow5AX7xd5VAJbpA4QBMayFrG38UFa8vHEhy-NCsjlfv_uk6Yw2teRt1WFjQr_16z-BTiUtYkM5GgUmN2OCbTtBrO_-6iEpUWKD7HiWY6lAqk-kJpIhHNaBuVX3BCly7H_G5fVQM-V762Yjobx43yyvw-r9cyhw-fvATlIWG58-enaNapQf2UDFA9beEXTMx0zdm6Y6Aeq-JAjmVoUQjAUFt-PlYfXMnDJPVlm-zhEXckDpvU3h4cZgz-9nTJvaLgqngOT4rjc&__tn__=-UC-R" target="new"><a>한동대, 한국컴퓨팅종합학술대회서 논문상 다수 수상 - 머니튜데이 뉴스</a></li>
                 <li><a href="https://www.facebook.com/hguswplus/photos/a.594054617603099/945501112458446/?type=3&__xts__%5B0%5D=68.ARDWVQtaAEVZEjwuXqQPQPGMsJ3B_-DQDx7n3E--blxAWEFjjmr6AlFPkTz1DjdbyKMh-8wvrrEzTa--OVbjh9rEeFDN6BsIKg_BdVEGmCkCDcHwywVL97ci7ob8LGpuMCeMxjB2vPHwkLHLvRfnfjKG2nK-mL0cQG59m3xZ8kbXheNSC-bd0mLpeQOfbz_C7uzBRWpfkfmzXa_5Uhv4BnPvUAQ8QS3yb5QO-UkGfB3kyejk6SSQzRVsz8AUr1hYYnp-aQiwLVwOmWJdE_oRpr2o2BsfmohybUWOzZsgwwxG5Sg8m2Y2BS4uGG4fCtzdh-JRRxXQst7Lihl4E5JEecU&__tn__=-R" target="new"><a>SW중심대학에서 지원하는 미국 단기 현장실습(인턴십) 지원 안내</a></li>-->

             </ul>
             </div>
           </div>
         </div>
       </div> <!--contentDiv-->
     </div>
   </div> <!--container-->
   <?php include('bottom.php'); ?>
   <script src="./js/main.js"></script>
