<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Kasir</title>
  <style>
    body {
      font-family: cursive;                   
      margin: 0;                                       
      padding: 0;                                 
      background-color: rgba(252, 252, 252, 0.822);  
      display: flex;                                   
      flex-direction: column;                           
      align-items: flex-start;                          
    }

    header {
      background-color: #0d0d0d;
      height: 79px;
      text-align: center;
      width: 1360px;
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }

    .logout {
      margin-top: auto;
      text-decoration: none;
      text-align: center;
      display: block;
      cursor: pointer;
      transition: 0.3s;
    }

    .container {
      display: flex;
    }

    .menu {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 16px;
      background-color: #888888;
      width: 160px;
      height: 82vh;
      
    }

    .menu a {
      text-decoration: none;
      font-size: 19px;
      margin-bottom: 20px;
      transition: 0.3s;
      color: black;
    }

    .menu a:hover {
      color: #fff;
    }

    .isi {
      width: 900px;
      padding: 20px;
    }

    h2{
        color: #fff;
        
        margin-left: 20px;
    }
    input[type="text"]{
        margin-bottom:10px;
        margin-left:auto;
        margin-right:20px;
        width:400px;
        padding:5px;
        border-radius:5px;
    }
    .kotak{
        width:420px;
        border:1px solid black;
        padding:20px;
        margin-left:360px;
        border-radius:5%;
        background-color:#999999;
    }
    button{
        padding:5px;
        width:70px;
        border-radius:5px;
    }
  </style>
</head>
<body>

  <header>
    <h2>Kasir</h2>
  </header>

  <div class="container">
      <div class="menu" >
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('produk') }}">Produk</a>
        <a href="{{ url('tambah') }}">tambah produk</a>
        <a href="#">Penjualan</a>
        <a href="#" class="logout">Logout</a>
      </div>

      <div class="isi">
        <div class="kotak">
            <h1>Tambah Produk</h1>
            <label>Nama Produk</label><br>
            <input type="text" name="" id=""><br>
            <label>Harga</label><br>
            <input type="text" name="" id=""><br>
            <label>Stok</label> <br>
            <input type="text" name="" id=""><br>
            <button type="submit">SIMPAN</button>
        </div>
      </div>
    </div>
</body>
</html>