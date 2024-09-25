<!--  Membuat CV yang dibuat oleh :
 Nama : Siti Nur Fadilah
 NIM : 32231614
 Prodi : Komputerisasi Akuntansi --> 

<?phpS
// Menentukan variabel untuk informasi pribadi
$name = "Siti Nur Fadilah";
$nickname = "Dila";
$age = 19;
$university = "STMIK IKMI Cirebon";
$major = "Komputerisasi Akuntansi";

// Menentukan variabel untuk informasi kontak
$birthplace = "Cirebon";
$birthdate = "17 April 2005";
$phone_number = "085861533373";
$email = "fdlhdila17@gmail.com";
$address = "Jl. Aman, Cipeujeuh Wetan, Sindang Laut, RT.10/RW.03, Kec. Lemahabang, Kab. Cirebon";
$social_media = "IG : vdilaa.__";

// Menentukan variabel untuk pendidikan
$education = array(
    "SDN 1 Cipeujeuh Kulon" => "2011-2017",
    "SMP Negeri 1 Lemahabang" => "2017-2020",
    "SMA Negeri 1 Kota Cirebon" => "2020-2023"
);

// Menentukan variabel untuk skill
$skills = array(
    "Menguasai Microsoft Word",
    "Dapat mengoperasikan sistem operasi",
    "Mampu mengekspresikan diri secara terbuka dan jelas",
    "Interpersonal Communication"
);

// Menentukan variabel untuk pengalaman
$experience = array(
    array(
        "title" => "Projek GyFest untuk Peningkatan Membentuk Karakter",
        "date" => "Januari-Maret 2023",
        "tasks" => array(
            "Mengelola emosional selama pertunjukkan dengan tulus tanpa kehilangan kendali untuk menciptakan koneksi emosional dengan penonton",
            "Menciptakan keberanian untuk mengambil resiko dan mengeksplorasi karakter dengan cara yang kreatif ke dalam peran",
            "Bekerja sama dengan tim untuk menghasilkan pertunjukkan teater berjalan lancar"
        )
    ),
    array(
        "title" => "OKM - Pelatihan KomInfo",
        "date" => "18 Maret- 22 Maret 2024",
        "tasks" => array(
            "Mengoperasikan komputer seperti menggunakan Microsoft Word, Microsoft Excel, Powerpoint, dan sistem operasi"
        )
    )
);

// Menentukan variabel untuk hobi
$hobbies = array(
    "Mendengarkan Musik",
    "Membaca Novel"
);

// Output struktur HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curiculume Vitue</title>
</head>
<body>

    <div id="main-container">

        <div id="container">
            <div id="header-container">
                <img src="image/PAS FOTO.jpeg" alt="">
                <h2><?= $name ?></h2>
                <p>Perkenalkan nama saya <?= $name ?>, biasa dipanggil <?= $nickname ?>, saya berumur <?= $age ?> tahun. saya seorang mahasiswa dari <?= $university ?> dengan jurusan <?= $major ?>, itulah perkenalan singkat saya</p>
                <div class="clear-fix"></div>
            </div>

            <div class="list">
                <li>Tempat, Tanggal Lahir </li>
                <p><?= $birthplace ?>, <?= $birthdate ?></p>

                <li>Pendidikan</li>
                <p><?= $university ?></p>

                <li>No. Telepon</li>
                <p><?= $phone_number ?></p>

                <li>Email</li>
                <p><?= $email ?></p>

                <li>Alamat</li>
                <p><?= $address ?></p>

                <li>SOSIAL MEDIA</li>
                <p><?= $social_media ?></p>
            </div>
        </div>

        <div class="my-list">
            <div class="Riwayat">
                <section>RIWAYAT PENDIDIKAN</section>
                <ul>
                    <?php foreach ($education as $school => $year) { ?>
                    <p><li><?= $school ?> (<?= $year ?>)</li></p>
                    <?php } ?>
                </ul>
            </div>

            <div class="Keahlian">
                <section>KEAHLIAN</section>
                <ul>
                    <?php foreach ($skills as $skill) { ?>
                    <li><?= $skill ?></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="Pengalaman">
                <section>PENGALAMAN/PROJEK</section>
                <ol>
                    <?php foreach ($experience as $exp) { ?>
                    <li style="font-family: 'Times New Roman', Times, serif;"><b> <?= $exp["title"] ?> (<?= $exp["date"] ?>)</b></li>
                    <ul>
                        <?php foreach ($exp["tasks"] as $task) { ?>
                        <li><?= $task ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </ol>
            </div>

            <div class="Hobi">
                <section>HOBI</section>
                <ul>
                    <?php foreach ($hobbies as $hobby) { ?>
                    <li><?= $hobby ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>