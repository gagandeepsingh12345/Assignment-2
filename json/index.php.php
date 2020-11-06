 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<!--Text to Speech JS -->
    <title>Json Assigment2</title>
  </head>
  <body class="container">
  <div class header="JSON File">
      <img src='Images/Scplogoandmoto.jpg' style='width:55%' >
     
       </div>
    <?php
   $scp2 = json_decode(file_get_contents('scp2.json'));

    ?>
    <?php foreach($scp2 as $key=>$display):;?>
    

  
    <div class="alert alert-primary  " style="margin-top:5px">
    <p id="Item" text align="center">Item:<?php echo $display->Item; ?></p>
    <p id="Object" text align="center">Object:<?php echo $display->Object; ?></p>
    </div>
    <div class="alert alert-success " style="margin-top:5px">  
    <p class="card-title">Containment</p>
    <p class="card-text" id="Containment <?php echo $key?>">Containment<?php echo $display->Containment;?></p>
    <p class="card-title">Description</p>
    <p class="card-text" id="Description<?php echo $key?>"> Description<?php echo $display->Description; ?></p>
        <button class="btn alert alert-primary" onclick="TextToSpeech('Description<?php echo $key?>')">Click For Speech </button>
    </div>
    </div>
    
    <?php endforeach;?>
    
    <script>
        function TextToSpeech(a){
            const speech = new SpeechSynthesisUtterance();
            let voices = speechSynthesis.getVoices();
            let convert = document.getElementById(a).innerHTML;

            
            
            speech.text = convert;
            speech.volume = 1;
            speech.rate = 1;
            speech.pitch = 1;
            speech.voice = voices[1];
            window.speechSynthesis.cancel();
            window.speechSynthesis.speak(speech);
            
        }
    </script>
    <footer>
         <div class="alert alert-primary  " style="margin-top:2px" text align="center">
        <p>Name Gagandeep Singh</p>
        </p>Student id 30029497</p>
        </div>
    </footert>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>