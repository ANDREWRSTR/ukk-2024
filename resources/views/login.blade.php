<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: rgb(182, 213, 225);
    }

    input{
      margin-top:10px;
      padding:10px;
      width:230px;
      border-radius:10px;
      margin-left:7%;
    }

     h1{
      text-align:center;
      font-family:cursive;
    }
    .container{
      width:300px;
      height:265px;
      border:2px solid black;
      border-radius:5%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgb(170, 200, 215);
    }
    button{
      width:84.5%;
      padding:10px;
      border-radius:10px;
      margin-top:10px;
      font-family:cursive;
      background-color: rgb(182, 213, 225);
      margin-left:7%;
      cursor:pointer;
    }
    button:hover{
      background-color:rgb(165, 190, 210);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
      <input type="text" placeholder="username"><br>
      <input type="password" placeholder="password"><br>
      <button type="submit"><b>Login</b></button>
  </div>
</body>
</html>