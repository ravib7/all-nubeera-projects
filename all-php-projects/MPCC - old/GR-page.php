
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>M.P.C.C</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="Components/CSS/navbar.css">
  <link rel="stylesheet" href="Components/CSS/style.css">
  <link rel="stylesheet" href="Components/CSS/image slide.css">
  <link rel="stylesheet" href="Components/CSS/sing in& signup.css">
  <link rel="stylesheet" href="Components/CSS/about-us.css">
  <link rel="stylesheet" href="Components/CSS/image-slide.css">
  <link rel="stylesheet" href="Components/CSS/EventsNews.css">
  <link rel="stylesheet" href="Components/CSS/SingInSignup.css">

</head>

<body>

 <!-------------------Heading-img----------------------->
 <div class="container-fluid">
        <div class="headline">
            <img src="Components/Images/top image.png" alt="Top Image">
            <!-- <h3>सत्यम‍ेव जयते</h3> -->
        </div>
    </div>
    <!-------------------Heading-img----------------------->

    <!-------------------------Navbar-start---------------------------->

    <nav>
      <div class="logo">M.P.C.C</div>
      <label for="btn" class="icon">
        <span class="fas fa-bars"></span>
      </label> 
      <input type="checkbox" id="btn"> 
      <ul>
			<li><a href="view.php">Home</a></li>
        <li>

          <label for="btn-1" class="show">Application +</label>
          <a href="#">Application</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a  href="crud/Form.php">Business</a></li>
            <li><a  href="crud/Form.php">Job</a></li>
          </ul>
        </li>
        <li>

          <li><a href="events-news.html">Events&News</a></li>
          <li><a href="GR-page.php">GR</a></li>
        <li>

          <label for="btn-2" class="show">Login +</label>
          <a href="#">Login</a>
          <input type="checkbox" id="btn-2">
          <ul>
            <li><a  href="signin.html">Sign in</a></li>
            <li><a  href="signup.html">Sign up</a></li>
          </ul>

            <li><a href="about-us.html">About us</a></li>
            <li><a href="contact-us.html">Contact us</a></li>
              </ul>
            </li> 
          </ul> 
        </li>
      </ul>
    </nav>          

<!-------------------------Navbar-End---------------------------->

<!---------------------------PDF-Upload-Start-------------------->

<div id="pdfContainer"></div>

<script>
  fetch("pdf-display.php")
    .then(response => response.text())
    .then(pdfContent => {
      const pdfContainer = document.getElementById("pdfContainer");
      pdfContainer.innerHTML = pdfContent;
    })
    .catch(error => {
      console.error("Error fetching and displaying the PDF:", error);
    });
</script>

<!---------------------------PDF-Upload-End-------------------->


</body>
</html>
