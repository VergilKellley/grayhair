<?php
  include_once 'header.php';
?>
      
        <div class="container" id="first-section">
          <div class="row">
            <div class="col-sm-6">
              <img name="slide" id="first-photo">
              <p style="color: #000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate 
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non velit esseproident, sunt in culpa qui officia deserunt mollit anim id est laborum. adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate 
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non velit esseproident, ssssssssssunt in culpa qui officia deserunt mollit anim id est laborum.ssssssssssunt in culpa qui officia deserunt mollit anim id est laborum.
             </p>
            </div>
          </div>
        
          <div class="col-sm-3 " id="second-section">
              <img id="second-photo" src="img/curlygrey.jpg">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.$$$$$$$</p>
          </div>
        </div>
      
       <?php include_once'footer.php';?>
        

        <script>
        var i = 0; //start point
        var images = [];
        var time = 3000;

        // Image list
        images[0] = 'img-slider/image1.jpg';
        images[1] = 'img-slider/image2.jpg';
        images[2] = 'img-slider/image3.jpg';
        images[3] = 'img-slider/image4.jpg';
        images[4] = 'img-slider/image5.jpg';
        images[5] = 'img-slider/image6.jpg';
        images[6] = 'img-slider/image7.jpg';
        images[7] = 'img-slider/image8.jpg';
        images[8] = 'img-slider/image9.jpg';
        images[9] = 'img-slider/image10.jpg';
        images[10] = 'img-slider/image11.jpg';
        images[11] = 'img-slider/image12.jpg';
        images[12] = 'img-slider/image13.jpg';
        images[13] = 'img-slider/image14.jpg';
        images[14] = 'img-slider/image15.jpg';
        images[15] = 'img-slider/image16.jpg';
        images[16] = 'img-slider/image17.jpg';
        images[17] = 'img-slider/image18.jpg';
        images[18] = 'img-slider/image19.jpg';
        images[19] = 'img-slider/image20.jpg';
        




        // Change Image

        function changeImg(){
          document.slide.src = images[i];

          if(i < images.length - 1){
            i++;
          } else {
            i = 0;
          }

          setTimeout('changeImg()', time);
        }

        window.onload = changeImg;
      </script>
      


