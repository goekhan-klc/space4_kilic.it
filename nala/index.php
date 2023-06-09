<?php 

require '../php/elements.php';
require '../php/config.php';

if($setting["maintenance"]) {
  header("Location: ../maintenance");
}

?>

<!DOCTYPE html>
<html>
  <head>

    <?php getHead("Nalabaer") ?>

      <style>
      body {
        background-color: white;
      }

        #maxwell {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          animation: moveMaxwell 1s infinite;
        }
        
        @keyframes moveMaxwell {
          0% { transform: translate(-50%, -50%) rotate(0deg); }
          25% { transform: translate(-50%, -50%) rotate(40deg); }
          50% { transform: translate(-50%, -50%) rotate(0deg); }
          75% { transform: translate(-50%, -50%) rotate(-40deg); }
          100% { transform: translate(-50%, -50%) rotate(0deg); }
        }
    </style>

  </head>

<body>
  <div id="maxwell">
    <img src="../media/nala.png" alt="Nala">
  </div>

  <audio controls autoplay>
    <source src="../media/song.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
</body>
</html>
