<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

{{-- @extends('layouts.app')
@foreach ($data as $item)
      <h1>{{$item->name}}</h1>
   <div>{{$item->email}}</div>
   <div>{{$item->id}}</div>
   <a href="/delete/{{$item->id}}">delete</a>
   <a href="/edit/{{$item->id}}">edit</a>
@endforeach --}}


<div>
  <form action="" onsubmit="event.preventDefault(); login_email()">
  <input type="text" id="num" name="number" required>
  <input type="submit" value="submit" name="submit">
</form>
</div>

<div id="recaptcha-container" style="border:solid black 1px; width:200px; height:60px;"></div>

  















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>


<script>

  var firebaseConfig = {
    apiKey: "AIzaSyAGi6IsUTfGdJMajBk_sif2GEVhwMzN6Ls",
    authDomain: "lara-vel-db.firebaseapp.com",
    projectId: "lara-vel-db",
    storageBucket: "lara-vel-db.appspot.com",
    databaseURL:"https://lara-vel-db-default-rtdb.firebaseio.com/",
    messagingSenderId: "613425598996",
    appId: "1:613425598996:web:a99d4f11b302a63c458d01",
    measurementId: "G-313S1HDXVR"
  };
   firebase.initializeApp(firebaseConfig);



   function login_email(){
    var email = "junaidmugloo@gmail.com";
    var password = "Programmr#@$123";

  firebase.auth().signInWithEmailAndPassword(email, password)
    .then(function(user) {
      console.log("Signed in as:", user.user.uid);
    })
    .catch(function(error) {
      console.error("Sign in error:", error);
    });
    }
   


   //sign up with firebase
// function login_email(){
//   var email = "junaidmbugloo2@gmail.com";
//   var password = "Programmr#@$123";
//   firebase.auth().createUserWithEmailAndPassword(email, password)
//     .then(function(user) {
//       console.log("user created");
//       // You can also set additional data for the user in the Firebase Realtime Database:
//       firebase.database().ref("users/"+user.user.uid).set({
//         email: email,
//         password:password,
//       });
//     })
//     .catch(function(error) {
//       console.error("Sign up error:", error);
//     });
// }












// Sign in with Google
//var provider = new firebase.auth.GoogleAuthProvider();

// function login_google(){
// firebase.auth().signInWithPopup(provider).then(function(result) {
//   // This gives you a Google Access Token. You can use it to access the Google API.
//   var token = result.credential.accessToken;
//   // The signed-in user info.
//   var user = result.user;
//   console.log(user.displayName+"\n"+user.email+"\n"+user.photoURL);
//   // ...
// }).catch(function(error) {
//   // Handle Errors here.
//   var errorCode = error.code;
//   var errorMessage = error.message;
//   // The email of the user's account used.
//   var email = error.email;
//   // The firebase.auth.AuthCredential type that was used.
//   var credential = error.credential;
//   // ...
// });
// }






  //opt send code
//   window.onload= function(){
//     render();
//   }

//   // Create a Recaptcha verifier
//   function render(){
//   window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
//   recaptchaVerifier.render();

// }
//   // Send the OTP to the user
//   function sendOTP() {
   
    
//     var phoneNumber = "+91"+$("#num").val(); // Replace with the user's phone number
//     var appVerifier = recaptchaVerifier;

//     firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
//       .then(function (confirmationResult) {
//         // SMS sent. Prompt user to type the code from the message, then sign the
//         // user in with confirmationResult.confirm(code).
//         var verificationCode = prompt('Please enter the verification code that was sent to your mobile device:');
//         return confirmationResult.confirm(verificationCode);
//       })
//       .catch(function (error) {
//         console.error(error);
//       });
//   }
</script>


</body>
</html>


