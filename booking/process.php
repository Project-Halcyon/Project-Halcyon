
<!DOCTYPE html>

   <html>
       <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          
<style>

.topnav {
  background-color: rgb(142, 196, 221);
  overflow: hidden;
  margin-bottom: 1rem;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #032b5a;
  color: white;
}


.head{
 height:20%;
 width:100%;
 background-color: #bc94dc;
 color: white;
 padding: 0.5rem;
 text-align: center;
 font-size: 1.5rem;
}

.grid{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr;
}
.card {
  width:650px;
  margin-bottom: 1rem;
  border-radius: 5px;
}

form{
  padding-left: 2rem;
  padding-right: 2rem;
  width:99%;
  font-weight:600;
}

@media(min-width:900px){
  form{
    padding-left: 2rem;
    padding-right: 2rem;
    width:50%;
    font-weight:600;
  }
}

label{
  font-size: 1.2rem;
}

input{
  color: grey;
  background-color: white;
  font-size: 1rem;
}

.back{
  width: 99%;
  padding: 5rem;
  height: 700px;
  text-align:center;

  background-image: linear-gradient( rgb(255, 255, 255) 10%, rgb(204, 190, 240)100%);

  border-radius: 5px;
}

  body {
        padding: 10%;
        background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
        background-image: linear-gradient(to top, #f5ebf4 0%, #dbc2e0 100%);
        background-attachment: fixed;
        background-repeat: no-repeat;

        font-family: "Vibur", cursive;
        /*   the main font */
        font-family: "Abel", sans-serif;

        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
      }

      h1,
      h2 {
        font-family: "Vibur", cursive;
      }
      .title{
        color: white;
        font-size: 2rem;
        font-weight: 600;
      }
      .cardtitle{
        font-size: 1.3rem;

      }
      .viewbtn{
        display: block;
        width: 100px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #45a29e, #5bcadd, #3292be);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .viewbtn:hover {
        background-position: right;
      }

      .acceptbtn{
        display: block;
        width: 150px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
       background-image: linear-gradient(to right, #745ed8, #bcb2df);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin-top: 1rem;
        margin-left: 32%;
        cursor: pointer;
        transition: 0.5s;
      }
      .acceptbtn:hover {
        background-position: right;
        color:black;
      }


      i{
        margin-right:0.3rem;
      }

      form{
 margin-top:2rem;
      }

      @media(min-width:900px)
      {
     form{

       margin-left:25%;
       margin-top:5%;
     }

     .acceptbtn{
       display: block;
       width: 150px;
       height: 35px;
       border-radius: 25px;
       outline: none;
       border: none;
      background-image: linear-gradient(to right, #745ed8, #bcb2df);
       background-size: 200%;
       font-size: 1.2rem;
       color: #fff;
       font-family: "Poppins", sans-serif;
       text-transform: uppercase;
       margin-top: 1rem;
       margin-left: 35%;
       cursor: pointer;
       transition: 0.5s;
     }

      }

    #initiallyHiddenBlock {
          display: none;
      }


       .homebtn {
        border: 1px solid white;
        background-color: rgb(184, 155, 231);
        margin: 0.5rem;
        width: 90%;
        height: 5rem;
        font-size: 20px;
        font-family: "montserrat";
        font-weight: 600;
        cursor: pointer;
        border-radius: 5px;
        transition: 0s;
        position: relative;
        overflow: hidden;
        color: black;
      }

      @media (min-width: 600px) {
        .homebtn {
          border: 1px solid white;
          border-radius: 5px;
          margin: 1rem;
          width: 30%;
          height: 5rem;
          font-size: 20px;
          font-family: "montserrat";
          font-weight: 600;
          cursor: pointer;
          color: black;
          background-color: rgb(184, 155, 231);
          transition: 0s;
          position: relative;
          overflow: hidden;
        }
      }

      .homebtn:hover {
        color: white;
        background: #b367e6;
      }


      @media(min-width:900px)
     {

       .buttongrid{

        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        margin-left: 5%;
          margin-top:15%;

      }
      }

    @media(max-width:900px)
     {

       .buttongrid{

        display: grid;
        grid-template-columns: 1fr ;
        grid-template-rows: 1fr 1fr 1fr;
        margin-left: 5%;
          margin-top:25%;

      }
      }

      h1{

          margin-top:7%;
            font-family: "Vibur", cursive;


      }
</style>
<body>

<?php

$date = filter_input(INPUT_POST, 'date');
$timezoneid = filter_input(INPUT_POST, 'timezoneid');
$slot = filter_input(INPUT_POST, 'slot');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$countryCode = filter_input(INPUT_POST, 'countryCode');
$phonenumber = filter_input(INPUT_POST, 'phonenumber');
$age = filter_input(INPUT_POST, 'age');
$gender = filter_input(INPUT_POST, 'gender');
$optional = filter_input(INPUT_POST, 'optional');
$opt = filter_input(INPUT_POST, 'opt');
if (!empty($date) || !empty($timezoneId) || !empty($slot) || empty($name) || !empty($email)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "moody";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO booking (date, timezoneid, slot, name, email, countryCode, phonenumber, age, gender,optional, opt )
values ('$date','$timezoneid','$slot','$name','$email', '$countryCode', '$phonenumber', '$age', '$gender', '$optional', '$opt')";


echo '<div style="text-align: center;">';
                       echo '<form method="POST"  id="HideBlock">';



                            echo ' <label for = "date">DATE </label>';
                             echo '<input type="text" class="form-control" id="date"
                             name = "date" value = '.filter_input(INPUT_POST, 'date');' readonly>';
                            echo ' <label for = "slot"> SLOT </label>';
                             echo '<input type="text" class="form-control" id="slot"
                             name = "slot" value = ' .filter_input(INPUT_POST, 'slot');' readonly>';

           echo'  <label for = "timezoneid"> TIMEZONE </label>';
                             echo'  <input type="text" class="form-control" 
                               name = "timezoneid" value = '.filter_input(INPUT_POST, 'timezoneid');' readonly>';
         
                             echo'  <label for = "name">FIRST NAME </label>';
                             echo'  <input type="text" class="form-control" 
                               name = "name" value = '.filter_input(INPUT_POST, 'name');' readonly>';
   
     echo'  <label for = "name">LAST NAME </label>';
                             echo'  <input type="text" class="form-control" 
                               name = "lastname" value = '.filter_input(INPUT_POST, 'lastname');' readonly>';


        echo'  <label for = "email">FIRST NAME </label>';
                             echo'  <input type="text" class="form-control" 
                               name = "email" value = '.filter_input(INPUT_POST, 'email');' readonly>';
           


                     echo'    <div>';
                      echo '<input type = "submit" class ="acceptbtn" value = "Confirm" name ="submit" id="showHiddenBlock">';
                   echo'    </div>';

                   echo'  </form>';

                 

if ($conn->query($sql)){

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "please enter your name , email, date and timeslot with timezone";
die();
}

?>

          </body>

    

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
     $(document).ready(function() {
      $('#showHiddenBlock').click(function() {
 $('#initiallyHiddenBlock').show();
  $('#HideBlock').hide();
      });
  });
  </script>

</html>
