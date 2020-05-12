<?php 
    $mail_message = "";

    if(isset($_POST['submit'])) {
        $to = "bobby.lee.hen@hotmail.com";
        $subject = "Request for web development";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $companyName = $_POST['company'];

        $body = "Name: " . $name . "<br>
                Email: " . $email . "<br>
                Company Name: " . $companyName . "<br>
                Message: " . $message;
        // Format Headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=utf-8\r\n";
        $headers .= "From: $email";

        mail($to, $subject, $body, $headers);
        $mail_message = 'Message sent successfully!';
    }
    
    else {
        $mail_message = "There was an error sending your message. Please try again.";
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bobby Henderson</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Sarabun:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>

    <header>
      <nav id="menu" style="background-color: #000;">
        <ul>
          <li>
            <a class="hamIcon" onclick="responsiveNav()">
              <i class="fa fa-bars"></i>
            </a>
          </li>
          <li><a href="index.html#home">Home</a></li>
          <li><a href="index.html#about">About Me</a></li>
          <li><a href="index.html#projects">Projects</a></li>
          <li><a href="index.html#contact">Contact</a></li>
          <li><a href="assets/documents/Henderson-resume.pdf" target="_blank"><i class="far fa-file-alt"></i> Resume</a></li>
        </ul>
      </nav>
      <!-- navigation end -->
    </header>

    <main>
      <section class="light-background" style="min-height: 50vh" id="...">
        <h1>Form Submission</h1>
        
        <!-- Print sent message -->
        <?php 
            echo $mail_message;
        ?>

      </section>
      <!-- contact section end -->

    </main>

    <footer>
      <div class="footerContainer">
        <div class="footerContent">
          <p class="footerText">&copy; Bobby Henderson 2020</p>
          
          <ul id="footerSocial">
            <li>
              <a href="https://www.linkedin.com/in/bobby-henderson-884236149" target="_blank"><i class="fab fa-linkedin"></i>&nbsp;&nbsp;Linkedin</a>
            </li>

            <li>
              <a href="https://github.com/BobbyHen" target="_blank"> <i class="fab fa-github-square"></i>&nbsp;&nbsp;GitHub</a>
            </li>

            <li>
              <a href="mailto:bobby.lee.hen@hotmail.com" target="_top"><i class="fas fa-envelope-square"></i>&nbsp;&nbsp;Email</a>
            </li>
          
          </ul>
        </div>
          <p class="footerText"></p>
        </div>
      </div>
    </footer>

  </body>
</html>
