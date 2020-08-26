<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="style.css">
        <title>Facebook Login</title>
    </head>
    <body>
        <div style="text-align:center;" id="user-image">    
        </div>
        <h1 style="text-align:center;" id="user-email">
        </h1>
        <button style="display:none;text-align:center" onclick="signout()" id="sign-out"></button>  

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>
<!-- 
       <script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-auth.js"></script>
 -->

      <script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
  apiKey: "AIzaSyBwP64qrecBTom98BzoClha4zdL1YF4FKw",
  authDomain: "glogin-285008.firebaseapp.com",
  databaseURL: "https://glogin-285008.firebaseio.com",
  projectId: "glogin-285008",
  storageBucket: "glogin-285008.appspot.com",
  messagingSenderId: "488008889094",
  appId: "1:488008889094:web:54bcd8833611eaec2f2487",
  measurementId: "G-1L8S9C3BP5"
};
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  </script>
  <script>
  
    // function signin()
    // {
    var provider = new firebase.auth.FacebookAuthProvider();
    provider.addScope('user_birthday,email');
    firebase.auth().useDeviceLanguage();
    firebase.auth().signInWithPopup(provider).then(function(result) {
  // This gives you a Facebook Access Token. You can use it to access the Facebook API.
   var token = result.credential.accessToken;
    console.log(token);
  // The signed-in user info.
    document.querySelector("#sign-out").style.display="block";
    console.log(user);
    var user = result.user;
    console.log(user.email);
    var userImage = document.querySelector("#user-image");

  // appending the user profile image

    var userPic = document.createElement("img");
    userPic.src=user.photoURL;
    userImage.append(userPic);

  // appending the user email address

    var userEmail = document.querySelector("#user-email");
    userEmail.innerHTML = user.email;
    // window.location="home.php";

  // ...
  }).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
});
</script>
</body>
</html>