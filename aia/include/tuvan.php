<div class="col col-md-4 col-sm-7 col-xs-12 ">
  <div>
     <div class="button aiabase parbase section">
        <div>
           <div>
              <button id="btn848101738" class="btn btn-default btn-primary btn-stretch  " type="button" onclick="buttonClick(this)" data-link="/content/vn/vi/tools/modal-pages/can-tu-van" data-target="#btn-modal-848101738" data-toggle="modal">Bạn cần tư vấn?</button>
           </div>
        </div>
        <!--Popup lien he-->
           <?php
              include 'include/lh.php';
          ?>
          <!--ENd Popup-->
     </div>
     <div class="aiabase parbase section list-action">
        <ul class="action-list nav margin-top-md-0 margin-bottom-md-0 action-calltoaction">
           <li>
              <a href="#" onclick="setListActionClicked('GIỚI THIỆU CHO BẠN BÈ, NGƯỜI THÂN')" target="_blank">
                   <title>GIỚI THIỆU CHO BẠN BÈ, NGƯỜI THÂN</title>
                   <image class="icon icon-s " src="../../../content/dam/aia/icons/secondary/share-2nd.png" alt="null"></image>
                 <span class="h6">
                 GIỚI THIỆU CHO BẠN BÈ, NGƯỜI THÂN
                 </span>
              </a>
           </li>
           <li>
              <a href="http://www.aia.com.vn/content/dam/vn/vi/docs/our-products/An-Phuc-Hung-Loc.pdf" onclick="setListActionClicked('Tài liệu giới thiệu sản phẩm')" target="_blank">
                   <title>Tài liệu giới thiệu sản phẩm</title>
                   <image class="icon icon-s " src="../../../content/dam/aia/icons/secondary/downloadsearchaltb-2ndg.png" alt="null" ></image>
                 <span class="h6">
                 Tài liệu giới thiệu sản phẩm
                 </span>
              </a>
           </li>
        </ul>
     </div>
     <div class="section html-script">
        <script>
           function setCookie(cname,cvalue,exdays) {
               var d = new Date();
               d.setTime(d.getTime() + (exdays*24*60*60*1000));
               var expires = "expires=" + d.toGMTString();
               document.cookie = cname+"="+cvalue+"; "+expires;
           }
           
           function getCookie(cname) {
               var name = cname + "=";
               var ca = document.cookie.split(';');
               for(var i=0; i<ca.length; i++) {
                   var c = ca[i];
                   while (c.charAt(0)==' ') c = c.substring(1);
                   if (c.indexOf(name) == 0) {
                       return c.substring(name.length, c.length);
                   }
               }
               return "";
           }
           
           $(".action-calltoaction").click(function(){
           	setCookie("product_name", "An Phúc Hưng Lộc", 1);
           });
           
           $("button").click(function(){
           	setCookie("product_name", "An Phúc Hưng Lộc", 1);
           });
        </script>
     </div>
  </div>
</div>