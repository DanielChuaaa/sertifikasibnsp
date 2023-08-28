<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">
    <title></title>
    </head>
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
          <a href="#">Hasil</a>
        </div>
      </nav>

      <main>
        <div id="wrapper" style="height:auto;  padding:16px">
    
        <table class="table table-striped" style="">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Hp</th>
                    <th>Semester</th>
                    <th>IPK</th>
                    <th>Pilihan Beasiswa</th>
                    <th>File</th>
                    <th>Status Ajuan</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($db, "SELECT * FROM form_registrasi");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?= $no++;  ?></td>
                        <td><?= $d['nama'];  ?></td>
                        <td><?= $d['nomorhp'];  ?></td>
                        <td><?= $d['semester'];  ?></td>
                        <td><?= $d['ipk'];  ?></td>
                        <td><?= $d['pilihanbeasiswa'];  ?></td>
                        <td><?= $d['file'];  ?></td>  
                        <td><?= $d['status'];  ?></td>  
                        <td>
                          <a href="terima.php?id=<?= $d['id']; ?>">Verifikasi</a>
                        </td>
                    </tr>
                <?php } 
                 ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>

      <footer data-fixed="footer-fix">
        <p>Copyright @ danielchua</p>
      </footer>
</body>
</html>