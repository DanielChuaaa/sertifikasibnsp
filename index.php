<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      .text-container {
        max-width: 72ch;
      }
      .h3-index {
        margin-top: 2.15%;
      }
    </style>
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav">
          <a href="#">Pilihan Beasiswa</a>

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

      <main>
        <h3 class="h3-index">Beasiswa Akademik</h3>
        <div class="text-container">
          <section>
            <p>
              Ketetuan Syarat : Beasiswa diberikan kepada mahasiswa aktif S1
              mulai Semester I sampai dengan Semester VIII (Bidik Misi) dan
              Semester III sampai dengan Semester VIII (beasiswa PPA), dan untuk
              beasiswa lainnya tergantung permintaan dari penyandang
              dana/sponsor.
            </p>

            <ul>
              <li>
                Fotokopi transkrip nilai dengan Indeks Prestasi Kumulatif (IPK)
                minimal 3,00 pada standar 4,00
              </li>
              <li>
                Surat keterangan penghasilan orang tua atau wali yang disahkan
                oleh pihak yang berwenang (untuk pegawai negeri atau swasta
                disahkan oleh bagian keuangan sedangkan untuk yang bukan pegawai
                negeri atau swasta disahkan oleh lurah atau kepala desa
                setempat)
              </li>
            </ul>
            <a href="daftarbeasiswa.php">
              <button>Beasiswa Akademik</button>
            </a>
          </section>

          <section>
            <h3>Beasiswa Non Akademik</h3>
            <p>
              Persyaratan Calon Mahasiswa Baru yang Berprestasi Non Akademik
            </p>

            <ul>
              <li>Juara minimal tingkat provinsi/regional 2 tahun terakhir</li>
              <li>Usia maksimal 20 tahun pada bulan oktober tahun berjalan</li>
              <li>
                Rekomendasi dari pengprov cabor atau dinas pendidikan provinsi
                sebagai bahan pertimbangan
              </li>
              <li>
                Bersedia mengikuti seleksi teknis yang diselenggarakan oleh
                kemahasiswaan
              </li>
              <li>
                Bersedia menandatangani kontrak beasiswa dengan pihak
                Kemahasiswaaan didampingi orang tua/wali.
              </li>
            </ul>
            <a href="daftarbeasiswanon.php">
              <button>Beasiswa Non Akademik</button>
            </a>
          </section>
        </div>
      </main>
    </div>

    <footer>
      <p>Copyright @ danielchua</p>
    </footer>
  </body>
</html>
