<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beasiswa Akademik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav">
          <a href="index.php">Pilihan Beasiswa</a>

          <div class="dropdown">
            <a href="#">Daftar</a>

            <div class="dropdown-content">
              <a href="daftarbeasiswa.php">Beasiswa Akademik</a>
              <a href="daftarbeasiswanon.php">Beasiswa Non Akademik</a>
            </div>
          </div>
          <a href="hasil.php">Hasil</a>
        </div>
      </nav>

      <h2 class="text-center margin-top">Daftar Beasiswa Non Akademik</h2>
      <form action="inputbeasiswa.php" method="post">
        <div class="form-container">
          <h4 class="form-h4">Registrasi Beasiswa</h4>

          <div class="input-container">
            <label for="nama" data-display="block">Masukkan Nama</label>
            <input type="text" placeholder="Nama" name="nama" />

            <label for="email" data-display="block">Masukkan Email</label>
            <input type="email" placeholder="Email" name="email" required />

            <label for="nomorhp" data-display="block">Nomor HP</label>
            <input type="number" placeholder="Nomor HP" name="nomorhp" />

            <label for="semester" data-display="block">Semester Saat Ini</label>
            <select name="semester" id="">
              <option>Pilih</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>

            <div>
              <label for="ipk" data-display="block">IPK Terakhir</label>

              <p
                id="error"
                style="
                  color: red;
                  position: absolute;
                  font-size: 0.8rem;
                  margin-left: 12rem;
                  margin-top: 1.6rem;
                "
              ></p>
              <input
                class
                type="number"
                placeholder="IPK"
                name="ipk"
                id="ipk"
                readonly
              />
            </div>

            <label for="pilihanbeasiswa" data-display="block"
              >Pilihan Beasiswa</label
            >
            <select name="pilihanbeasiswa" id="pilihanbeasiswa">
              <option>Pilihan Beasiswa</option>
              <option value="Beasiswa Non Akademik">
                Beasiswa Non Akademik
              </option>
            </select>

            <label for="file" data-display="block">Upload Berkas Syarat</label>
            <input type="file" name="file" id="file" />

            <div class="button-container">
              <button type="submit" class="button" id="button">Daftar</button>
              <a href="#">
                <button type="submit" class="button" id="refresh">Batal</button>
              </a>
            </div>
          </div>
          <p class="border-bottom">.</p>
        </div>
      </form>
    </div>
    <footer>
      <p>Copyright @ danielchua</p>
    </footer>
    <script src="random.js"></script>
    <script src="refresh.js"></script>
  </body>
</html>
