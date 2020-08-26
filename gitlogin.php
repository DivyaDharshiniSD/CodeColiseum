<!DOCTYPE html>
<html>
    <head>
        <title>Github Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <!-- the place for holding github profile pic-->

        <div id="user-image">
            
        </div>

        <!-- the place for holding hithub email address-->
        
        <h1 id="user-email">

        </h1>
      

   
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.11.1/firebase-auth.js"></script> 

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
 --><script>
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

    var provider = new firebase.auth.GithubAuthProvider();
    provider.addScope('repo');

    firebase.auth().signInWithPopup(provider).then(function(result) {
  // This gives you a GitHub Access Token. You can use it to access the GitHub API.
  var token = result.credential.accessToken;
  console.log(token);
  // The signed-in user info.
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