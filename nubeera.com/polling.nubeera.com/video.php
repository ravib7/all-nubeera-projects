<!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  body {
  			margin: 30px;
  			padding: 0;
  			background: #ddd;
  			font-family: Arial, Helvetica, sans-serif;
  		}

  		.title {
  			width: 100%;
  			max-width: 854px;
  			margin: 0 auto;
  		}

  		.caption {
  			width: 100%;
  			max-width: 854px;
  			margin: 0 auto;
  			padding: 20px 0;
  		}

  		.vid-main-wrapper {
  			width: 100%;
  			max-width: 1100px;
  			min-width: 440px;
  			background: #fff;
  			margin: 0 auto;
  		}


  		/*  VIDEO PLAYER CONTAINER
 		############################### */
  		.vid-container {
		    position: relative;
		    padding-bottom: 52%;
		    padding-top: 30px; 
		    height: 0; 
        width:70%;
        float:left;
		}
		 
		.vid-container iframe,
		.vid-container object,
		.vid-container embed {
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    min-height: 360px;
		}


		/*  VIDEOS PLAYLIST 
 		############################### */
		.vid-list-container {
			width: 30%;
      height:360px;
			overflow: hidden;
      float:right;
		}

    .vid-list-container:hover, .vid-list-container:focus {
       overflow-y: auto;
     }

		ol#vid-list {
      margin:0;
      padding:0;
      background: #222;
		}

    ol#vid-list li {
		  list-style: none;
    }

    ol#vid-list li a {
      text-decoration: none;
      background-color: #222;
      height:55px;
      display:block;
      padding:10px;
    }

    ol#vid-list li a:hover {
      background-color:#666666
    }

		.vid-thumb {
      float:left;
			margin-right: 8px;
		}

    .active-vid { 
      background:#3A3A3A;
    }

		#vid-list .desc {
			color: #CACACA;
			font-size: 13px;
			margin-top:5px;
		}


		@media (max-width: 624px) {
			body {
				margin: 15px;
			}
			.caption {
				margin-top: 40px;
			}
			.vid-list-container {
				padding-bottom: 20px;
			}

		}
  </style>
</head>
<body oncontextmenu="return false;">

<div class="vid-main-wrapper clearfix">

  		    <!-- THE YOUTUBE PLAYER -->
      <div class="vid-container">
          <iframe id="vid_frame" src="https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
      </div>

      <!-- THE PLAYLIST -->
      <div class="vid-list-container">
            <ol id="vid-list">
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/cOSEOYi9JS4/default.jpg" /></span>
                  <div class="desc">WeatherBeater™ Product Video</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/jOs2h8A5nPk/default.jpg" /></span>
                  <div class="desc">X-act Contour® Product Video</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/KHxNpXovl58/default.jpg" /></span>
                  <div class="desc">GearBox® Product Video</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/jOs2h8A5nPk/default.jpg" /></span>
                  <div class="desc">Mud Guards Product Video</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/vYoh2IgoBXg/default.jpg" /></span>
                  <div class="desc">Wheel Well Guards Product Video</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/jOs2h8A5nPk/default.jpg" /></span>
                  <div class="desc">Cargo Liner Product Video</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/EvTjAjLNphE/default.jpg" /></span>
                  <div class="desc">Husky Liners Products</div>
                </a>
              </li>
              <li>
                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/jOs2h8A5nPk?rel=0&showinfo=0&autohide=1'">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/jOs2h8A5nPk/default.jpg" /></span>
                  <div class="desc">Custom Molded Mud Guards</div>
                </a>
              </li>
              
            </ul>
       </div>

<script>
/*JS FOR SCROLLING THE ROW OF THUMBNAILS*/ 
$(document).ready(function () {
  $('.vid-item').each(function(index){
    $(this).on('click', function(){
      var current_index = index+1;
      $('.vid-item .thumb').removeClass('active');
      $('.vid-item:nth-child('+current_index+') .thumb').addClass('active');
    });
  });
});
</script>
</body>

</html>