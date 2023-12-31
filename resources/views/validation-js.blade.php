<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style></style>
    <script>
      function validateForm() {
        var x = document.getElementById("usname");
        var nrp = document.getElementById("nrp");
        if (x.value == "") {
          alert("Name must be filled out");
          x.focus();
          return false;
        }
        if (nrp.value == "") {
          alert("NRP masih kosong");
          nrp.focus();
          return false;
        }
        if (isNaN(nrp.value)) {
          alert("NRP harus dalam bentuk angka");
          nrp.focus();
          return false;
        }
        if (nrp.value.length != 10) {
          alert(
            `Saat ini anda memasukkan ${nrp.value.length} \nNRP harus 10 digit`
          );
          nrp.focus();
          return false;
        }
        if (nrp.value.slice(0, 4) != 5026) {
          alert("Hanya diperuntukkan untuk Mahasiswa S-1 Sistem Informasi");
          nrp.focus();
          return false;
        }
        if (nrp.value.slice(4, 6) != 22 && nrp.value.slice(4, 6) != 21) {
          alert(
            "Hanya diperuntukkan untuk Mahasiswa S-1 Sistem Informasi angkatan 2022 dan 2021"
          );
          nrp.focus();
          return false;
        }

        return true;
      }
    </script>
  </head>
  <body>
    <div class="container">
      <h2>Pendaftaran Asisten Lab Departemen Sistem Informasi</h2>
      <form
        name="myForm"
        action="https://google.com"
        onsubmit="return validateForm()"
        method="post"
        target="_blank"
      >
        Nama :
        <input type="text" id="usname" class="form-control" />
        <br />
        NRP : <input type="text" id="nrp" class="form-control" />

        <br />
        <input type="submit" value="submit" class="btn btn-primary" />
        <input type="reset" value="kosong" class="btn btn-warning" />
      </form>
    </div>
  </body>
</html>
