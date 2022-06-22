<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Drumkit</title>
</head>
<body>

    <div class="keys">
        <div data-key="68" class="key">
             <kbd>D</kbd>
             <span class="sound">kick</span>
        </div>
        <div data-key="75" class="key">
            <kbd>K</kbd>
            <span class="sound">snare</span>
       </div>
       <div data-key="74" class="key">
            <kbd>J</kbd><br>
            <span class="sound">ride</span>
        </div>
   </div>



    </div>
  <audio data-key="68" src="sounds/Bass-Drum-1.wav"></audio>
  <audio data-key="75" src="sounds/DrumMRoomSnare_05_705.wav"></audio>
  <audio data-key="74" src="sounds/TD6K_Ride_036_73_SP.wav"></audio>



    <script src="app.js"></script>
</body>
</html>
