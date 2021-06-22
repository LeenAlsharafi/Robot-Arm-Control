<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>Robot Arm</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@600&display=swap" rel="stylesheet"> 
<style>
body {
    font-family: 'Lemonada', cursive;
}
.background-details {
    background: linear-gradient(90deg, #00DBDE 0%,  #FC00FF  100%);
            background-Size : "400% 400%";
            animation : "gradient 25s ease infinite";
        }

 #container {
    margin: 0 auto;
     height: 35rem;
     width: 35%;
     background-color: #ffff;
     opacity: 0.3;
     border-radius: 50px;
 }   
.title {
     text-align: center;
     color: #ffff;

 }    
 h3 {
     display: inline-block;
     
 }

 div {
     margin: 0 4rem;
 }
 input {
     margin:0 3em;
 }
 button {
    
     padding: .8rem 3rem;
     margin-top: 1em;
     border-radius: 30px;
     color: black;
     font-size: 1.3rem;
 }
 .save-button {
     margin-left: 1.6rem;
     margin-right: 7rem;
     background-color: #FC00FF;
 }
 .play-button {
    background-color:  #00DBDE;
 }
 button:hover {
     background-color: black;
     color: #ffff;
 }
 span {
     font-size: 1.7rem;
     
 }


          

</style>
</head>
<h1 class="title">التحكم بذراع الروبوت</h1>
  <body class='background-details'>
      <form id="container" method="POST" action="connect.php">
        <div class="slider1-div"> 
            <h3>محرك 1</h3>
            <input type="range" min="0" max="180" value="0" id="slider1" name="slider1" >
            <span id="slider1-value"></span>
        </div>
        <div class="slider2-div"> 
            <h3>محرك 2</h3>
            <input type="range" min="0" max="180" value="0" id="slider2" name="slider2">
            <span id="slider2-value"></span>
        </div>
        <div class="slider3-div"> 
            <h3>محرك 3</h3>
            <input type="range" min="0" max="180" value="0" id="slider3" name="slider3">
            <span id="slider3-value"></span>
        </div>
        <div class="slider4-div"> 
            <h3>محرك 4</h3>
            <input type="range" min="0" max="180" value="0" id="slider4" name="slider4">
            <span id="slider4-value"></span>
        </div>
        <div class="slider5-div" > 
            <h3>محرك 5</h3>
            <input type="range" min="0" max="180" value="0" id="slider5" name="slider5">
            <span id="slider5-value"></span>
        </div>
        <div class="slider6-div"> 
            <h3>محرك 6</h3>
            <input type="range" min="0" max="180" value="0" id="slider6" name="slider6">
            <span id="slider6-value"></span>
        </div>
        <button class="save-button" name="save" value="save">حفظ</button>
        <button class="play-button">تشغيل</button>
    </form>
    <script> 
var slider1,slider2,slider3,slider4,slider5,slider6;
let output;
slider1 = document.getElementById("slider1");
slider2 = document.getElementById("slider2");
slider3 = document.getElementById("slider3");
slider4 = document.getElementById("slider4");
slider5 = document.getElementById("slider5");
slider6 = document.getElementById("slider6");
slider1.oninput = function(){
    output = document.getElementById("slider1-value");
    output.innerHTML = this.value;
}
slider2.oninput = function(){
    output = document.getElementById("slider2-value");
    output.innerHTML = this.value;
}
slider3.oninput = function(){
    output = document.getElementById("slider3-value");
    output.innerHTML = this.value;
}
slider4.oninput = function(){
    output = document.getElementById("slider4-value");
    output.innerHTML = this.value;
}
slider5.oninput = function(){
    output = document.getElementById("slider5-value");
    output.innerHTML = this.value;
}
slider6.oninput = function(){
    output = document.getElementById("slider6-value");
    output.innerHTML = this.value;
}

 </script>
  </body>
</html>














