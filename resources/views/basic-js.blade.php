<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <script src="operation.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Week 4 P-Web</h1>
      <div id="id1"></div>
      <div id="id2"></div>
      <div id="mentahan"> berenang </div>
      <div id="id3"> berang berang <span id="id31"></span> di tepi sungai</div>
      <center>
        <button onclick="tombol()" class="btn btn-primary">tekan</button>
        <button onclick="showAlert()" class="btn btn-primary"> tekan gasin</button>
        <br>
        <button onclick="modify()" class="btn btn-primary">modif disinii </button>
      </center>
      <input type="textbox" id="id4">
      <br><br><br><br>

      <div class="form-group">
        <label for="bil1"> Bilangan 1 </label>
        <input type="number" id="bil1" placeholder="Masukkan bilangan pertama" class="form-control">  
      </div>
      <div class="form-group">
        <label for="bil2"> Bilangan 2 </label>
        <input type="number" id="bil2" placeholder="Masukkan bilangan kedua" class="form-control">  
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary m-1" onclick="tambah()"> Tambah</button>
        <button type="button" class="btn btn-primary m-1" onclick="kali()"> Kali</button>
      </div>
      <div id="hasil"></div>
    </div>



    <script>
        let term = false;
        const material = document.getElementById("mentahan");
        const span = document.getElementById("id31"); 
        const textbox = document.getElementById("id4");
      const tombol = () => {
        document.getElementById("id1").innerHTML = "6546541";
      };
      const showAlert = () => {
        term = confirm("Dijamin GACOR di GACOR88\nkm mw g?");
        if(term) document.getElementById("id2").innerHTML = "oomaga kena tipu";
        else document.getElementById("id2").innerHTML = "";
    }

    const modify = () =>{
        material.style.color = "red";
        span.innerHTML = material.innerText;
        textbox.value = document.getElementById("id3").innerText
    }

    
    
    </script>
  </body>
</html>
