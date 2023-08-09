<?php
include("createUser.php")
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ab" xml:lang="ab">
<head>
<script src="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js"></script>
<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Affordable and professional web design">
<meta name="keywords" content="web design, affordable web design, professional web design">
<meta name="author" content="Brad Traversy">
<!-- <link rel="stylesheet" href="./custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


<!-- For Google Integration -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="AIzaSyAvYKqtJcIkdLiOseK-aEQrs7Xjar-Qm80.apps.googleusercontent.com">

<title>E-Franchise</title>
<link rel="stylesheet" href="./css/c.css">
<link rel="icon" href="img/favicon.png">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://apis.google.com/js/api:client.js"></script>
  <!-- <script>
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          document.getElementById('name').innerText = "Signed in: " +
              googleUser.getBasicProfile().getName();
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
  }
  </script> -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #45a29e;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  height: 20px;
}

img.avatar {
  width: 5%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

/* Global */
.container{
  width:80%;
  margin:auto;
  overflow:hidden;
}
.container2 {
  margin: auto;
  width:20%;
  padding:20px;
}
.google-btn {
  width: 184px;
  height: 42px;
  background-color: #4285f4;
  border-radius: 2px;
  box-shadow: 0 3px 4px 0 rgba(0,0,0,.25);
}
.google-icon-wrapper {
    position: absolute;
    margin-top: 1px;
    margin-left: 1px;
    width: 40px;
    height: 40px;
    border-radius: 2px;
    background-color: #fff;
}
  .google-icon {
    position: absolute;
    margin-top: 11px;
    margin-left: 11px;
    width: 18px;
    height: 18px;
  }
  .btn-text {
    float: right;
    margin: 11px 11px 0 0;
    color:#fff;
    font-size: 14px;
    letter-spacing: 0.2px;
    font-family: "Roboto";
  }
ul{
  margin:0;
  padding:0;
}
.button_1{
  height:38px;
  background: #b80017;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
}
.dark{
  padding:15px;
  background:#3e1c00;;
  color:#ffffff;
  margin-top:10px;
  margin-bottom:10px;
}
/* Header **/
header{
  background-color: #0b0c10;
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#0b0c10 3px solid;
}
header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}
header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}
header #branding{
  float:left;
}
header #branding h1
{
  margin:0;
}
header nav{
  float:right;
  margin-top:10px;
}
header .highlight, header .current a
{
  color:#ffffff;
  font-weight:bold;
}
header a:hover{
  color:#cccccc;
  font-weight:bold;
}
/* Showcase */
#showcase{
  min-height:400px;
  /* background:url('./Images/LOGO.png') no-repeat; */
  background-position: center;
  background-size: cover;
  background-color:#0b0c10;
}
#showcase h1{
  margin-top:100px;
  font-size:55px;
  margin-bottom:10px;
  color:#ffffff;
  text-align:left;
}
#showcase p{
  font-size:20px;
}
/* Newsletter */
#newsletter{
  padding:15px;
  color:#ffffff;
  background:#000;
}
#newsletter h1{
  float:left;
}
#newsletter form {
  float:right;
  margin-top:15px;
}
#newsletter input[type="email"]{
  padding:4px;
  height:25px;
  width:250px;
}
/* Boxes */
#boxes{
  margin-top:20px;
}
#boxes .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}
#boxes .box img{
  width:90px;
}
/* Sidebar */
aside#sidebar{
  float:right;
  width:30%;
  margin-top:10px;
}
aside#sidebar .quote input, aside#sidebar .quote textarea{
  width:90%;
  padding:5px;
}
/* Main-col */
article#main-col{
  float:left;
  width:65%;
}
/* Services */
ul#services li{
  list-style: none;
  padding:20px;
  border: #cccccc solid 1px;
  margin-bottom:5px;
  background:#e6e6e6;
}
/* footer{
  position: absolute;
    bottom: 0;
    width: 100%;
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#000;
  text-align: center;
} */

.loginButton {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align :center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;
}
/* Media Queries */
@media(max-width: 768px){
  header #branding,
  header nav,
  header nav li,
  #newsletter h1,
  #newsletter form,
  #boxes .box,
  article#main-col,
  aside#sidebar{
    float:none;
    text-align:center;
    width:100%;
  }
  header{
    padding-bottom:20px;
  }
  #showcase h1{
    margin-top:40px;
  }
  #newsletter button, .quote button{
    display:block;
    width:100%;
  }
  #newsletter form input[type="email"], .quote input, .quote textarea{
    width:100%;
    margin-bottom:5px;
  }
  #heading-text{
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Ubuntu, Arial, sans-serif;
  }

  /* body {font-family: Arial, Helvetica, sans-serif;} */

  /* Google login */
  #customBtn {
      display: inline-block;
      background: white;
      color:pink;
      width: 300px;
      border-radius: 5px;
      border: thin solid #888;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font-family: serif;
      font-weight: normal;
      background-color: yellow;
    }
    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
      background-color: pink;
    }
    #footer {
      padding:20px;
      margin-top:20px;
      color:#ffffff;
      background-color:pink;
      text-align: center;
  }

}
</style>
<body>
<main>
  
  <header >
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">E-Franchise</span></h1>
      </div>
      <nav>
      <ul>
        <li class="current">
          <a href="Home.html">Home</a>
        </li>
        <li>
          <a href="aboutc.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
        <li>
          <a href="franchiseListing.html">FAQ</a>
        </li>
        <li> 
          <button id="buttonClick" onclick="alert('Button was clicked!');" style="background-image: url(./Images/user.png);"> 
            <!-- <img src="./Images/user.png" style="width: 30px;height: 30px;align-self: center;"></img> -->
          </button>
          <!-- <a href="UserProfile.html">
            <img src="./Images/user.png" style="width: 30px;height: 30px;"></img>
          </a> -->
        </li>
      </ul>
        <div style="margin-top: 30px;margin-left: 200px;" id="hidelogin">
          <li>
            <button onclick="document.getElementById('id01').style.display='block'">LOGIN</button>
          </li>
          <li style="padding-left: 25px;">
            <button onclick="document.getElementById('id02').style.display='block'">FIRST TIME USER</button>
          </li>
        </div>
          <li>
            <div style="margin-top: 30px;margin-left: 190px;" id="showlogin">
            <button>LOGOUT</button>
            </div>
          </li>
      </nav>
    </div>
    </header>
    <section id="showcase">
    <div class="container">
      <h1 id="heading-text" style="color: #66fcf1;">Find the Right Franchise with Franchise Hub</h1>
      <p id="heading-text" style="color: #ffffff;text-align: left;">Franchise Hub is your one-stop destination to find the right franchise for you. With Franchise Hub, you can explore a wide range of franchise opportunities, browse through various industries and categories, and find the perfect match for your investment and business goals. Whether you're looking for a fast-food franchise, a retail franchise, or a service-based franchise, Franchise Hub provides a comprehensive platform to discover and evaluate franchise options. Take advantage of the resources available on Franchise Hub to research, compare, and make an informed decision about the franchise that suits you best.
</p>
    </div>
    </section>
    <section id="boxes">
    <div class="container">
      <div class="box">
        <img src="./Images/search.jpeg">
        <a href="./discover.html">
          <h3>Discover</h3>
        </a>
      </div>
      <div class="box">
        <img src="./Images/evaluare.png">
        <a href="./evaluate.html">
          <h3>Evaluate</h3>
          </a>
      </div>
      <div class="box">
        <img src="./Images/invest.png">
        <a href="./invest.html" style="margin-top: 10px;">
          <h3>Invest</h3>
        </a>
      </div>
    </div>
    </section>
</main>
  
<footer style="background-color: black;position: relative;bottom: 0;align-items: center;padding: 30px;">
<div style="color: white; text-align: center;">
	E-Franchise, Copyright & copy; 2023
</div>
</footer>

<!-- /*-----Login-------*/ -->
<div id="id01" class="modal">
  
  <form class="modal-content animate"  method="post" action="Login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./Images/user.png" alt="avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">LOGIN</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        <span class="psw" style="padding-top: 0;">Forgot <a href="#">password?</a></span>
      </label>
      
      
    </div>
    <!-- In the callback, you would hide the gSignInWrapper element on a
  successful sign in -->
  <!-- <div>
    <span style="width: 90px;float: left;padding-top: 5px;padding-bottom: 5px;">Sign in with:</span>
    <div style="float: left;padding-top: 5px;padding-bottom: 5px" class="customGPlusSignIn" id="customBtn">
      <span class="icon"></span>
      <span class="buttonText">Google</span>
    </div>
    <button class="social-signin google" id="login">Log in with Google+</button>
  </div> -->
  <div class="container2">
    <div class="google-btn" id="login">
      <div class="google-icon-wrapper">
        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
      </div>
      <p class="btn-text"><b>Sign in with google</b></p>
    </div>
  </div>
  <div id="name"></div>
  <!-- <script>startApp();</script> -->

    </div>
  </form>
</div>

<!-- /*-----For first time user-------*/ -->
<div id="id02" class="modal">
  
  <form class="modal-content animate"  method="post" action="createUser.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./Images/user.png" alt="avatar" class="avatar">
    </div>

    <div class="container">
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter first name" name="firstname" id="firstname" required>

      <label for="email"><b>Email</b></label><br>
      <input type="text" placeholder="Enter your email" name="email" id="email" required>
        
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" id="Password" required>
        
      <label for="confirmPassword"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Confirm Password" name="confirmPassword" required>
        
      <button type="submit" name="submit">SIGN UP</button>
    </div>

    <div class="container">
      <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
</div>


<div id="id0" class="modal">
  
  <form class="modal-content animate"  method="post" action="createUser.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./Images/user.png" alt="avatar" class="avatar">
    </div>

    <div class="container">
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter first name" name="firstname" id="firstname" required>

      <label for="email"><b>Email</b></label><br>
      <input type="text" placeholder="Enter your email" name="email" id="email" required>
        
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" id="Password" required>
        
      <label for="confirmPassword"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Confirm Password" name="confirmPassword" required>
        
      <button type="submit" name="submit">SIGN UP</button>
    </div>

    <div class="container">
      <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
</div>

<div id="message-container">
  <!-- Success message will be displayed here -->
</div>

<script>
  // Get the modal
  var modal = document.getElementById('id01');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>

  <!-- MOCK SNIPPET: DO NOT COPY -->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-auth.js"></script>
 

<!-- <script>
  var config = {
    apiKey: "AIzaSyAvYKqtJcIkdLiOseK-aEQrs7Xjar-Qm80",
    authDomain: "capstone-8a0e3.firebaseapp.com",
    projectId: "capstone-8a0e3",
    storageBucket: "capstone-8a0e3.appspot.com",
    messagingSenderId: "78775924959",
    appId: "1:78775924959:web:c37c0bd873cb91f3f9d16a",
    measurementId: "G-L8GNE2H4ZG"
  };
  firebase.initializeApp(config);
</script> -->
  </body>
  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
    import { getAuth, signInWithPopup, GoogleAuthProvider } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
    var loginDone =false;
    var divLogout = document.getElementById("showlogin");
    divLogout.style.display = "none";

  
    // When the user clicks anywhere outside of the modal, close it
    divLogout.addEventListener('click',(e) =>{
      if (event.target == modal) {
          var div = document.getElementById("id01");
          var div2 = document.getElementById("hidelogin");
          div.style.display = "block";
          div2.style.display = "block";
          divLogout.style.display = "none";
      }
    })
    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyDGq8KP1tbDKlXpeImMahzuFkukXs7y0C0",
      authDomain: "auth-3397c.firebaseapp.com",
      projectId: "auth-3397c",
      storageBucket: "auth-3397c.appspot.com",
      messagingSenderId: "733950680780",
      appId: "1:733950680780:web:0f95e0960a70e07e852c69"
    };
  
    // Initialize Firebase
    // const app = initializeApp(firebaseConfig);
    // const auth = getAuth(app);
    // const provider = new GoogleAuthProvider(app);
  
    login.addEventListener('click',(e) =>{
      const app = initializeApp(firebaseConfig);
      const auth = getAuth(app);
      const provider = new GoogleAuthProvider(app);
      signInWithPopup(auth,provider)
      console.log("user is",auth,provider)
      setTimeout(()=>{
        var div = document.getElementById("id01");
        var div2 = document.getElementById("hidelogin");
        div.style.display = "none";
        div2.style.display = "none";
        divLogout.style.display = "block";
      },7000)
    })
  
    signInWithPopup(auth, provider)
      .then((result) => {
        console.log("user is")
        // This gives you a Google Access Token. You can use it to access the Google API.
        const credential = GoogleAuthProvider.credentialFromResult(result);
        const token = credential.accessToken;
        // The signed-in user info.
        const user = result.user;
        // IdP data available using getAdditionalUserInfo(result)
        console.log(user.displayName,"user is",user)
        // ...
      }).catch((error) => {
        // Handle Errors here.
        const errorCode = error.code;
        const errorMessage = error.message;
        // The email of the user's account used.
        const email = error.customData.email;
        // The AuthCredential type that was used.
        const credential = GoogleAuthProvider.credentialFromError(error);
        // ...
      });
  
  </script>
</html>