 <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


    <script type="text/javascript">
    	$(".toggleForms").click(function()  {
    		$("#signUpForm").toggle();
    		$("#logInForm").toggle();
    	});


        document.querySelector('#signUp').addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var email = document.querySelector('#email').value;
            var password = document.querySelector('#password').value;
            

            var credential = firebase.auth.EmailAuthProvider.credential(email, password);
            var auth = firebase.auth();
            var currentUser = auth.currentUser;
            alert('hi');

            firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
              // Handle Errors here.
              var errorCode = error.code;
              var errorMessage = error.message;

              alert(errorMessage);
              // ...
            });

        })

        firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
           window.location.href = "main.php";
       
          } else {
            // No user is signed in.
            alert("no user is signed in");
          }
        });

    </script>
  </body>
</html>

   <?php include("firebase.php"); ?>