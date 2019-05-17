<!DOCTYPE html>

<html lang="en">

<head>
  <style>
  html{
    background-color: cyan;
  }
  #sendPane{
    position: fixed;
    bottom:10px;
  }

  #messageBox{
    width: 700px;
  }

  #messagePane{
    background-color: white;
    height: 560px;
  }

  #metaPane{
    background-color: lightgray;
    height: 100px;
    margin-bottom: 20px;
  }
  </style>

  <script>

  function sendMessage(){
    

  }
  </script>

</head>

<body>
  <div id="metaPane">
  </div>
  <div id="messagePane">
  </div>
  <div id="sendPane">
    <input type="text" id="messageBox"><button onclick="sendMessage()">Send</button>
  </div>


</body>

</html>
<?php
echo "something" ?>
