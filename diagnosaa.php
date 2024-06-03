<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="diagnosa.css">
    <title>Sistem Pakar| Kelompok 2</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <div class="navbar">
            <div class="container">
                <div class="box-navbar">
                    <div class="logo">
                        <h1>Kelompok 9999</h1>
                    </div>
                    <ul class="menu">
                        <li><a href="index.html">Home</a></li>
                    </ul>
                    <i class="fa-solid fa-bars menu-bar"></i>
                </div>
            </div>
        </div>
        <!-- Navbar -->

        <!-- hero -->
        <div class="hero" id="home">
            <div class="container">
                <div class="box-hero">
                    <div class="box">
                        <!-- Konten yang akan muncul jika pengguna sudah masuk -->
                        <div class="user-content">

                            <h2 class="judul">Diagnosa Kesehatan Mental</h2>

                            <div id="pertanyaan-1">
                                <p>merasa gelisah, susah tidur, pikirannya kacau dan merasa <br> takut </p>
                                <button id="yes-button-1" onclick="tombolClick('yes', 1)">Ya</button>
                                <button id="no-button-1" onclick="tombolClick('no', 1)">Tidak</button>
                            </div>

                            <div id="pertanyaan-2" style="display: none;">
                                <p>Apakah anda sadar dengan itu?</p>
                                <button id="sadar-button" onclick="tombolClick('sadar', 2)">Dibawah kendali kesadaran</button>
                                <button id="tidak-button" onclick="tombolClick('tidak', 2)">Tidak dibawah kendali kesadaran</button>
                            </div>

                            <div id="pertanyaan-3-1" style="display: none;">
                                <p>Pilih gangguan yang anda alami </p>
                                <button id="berbicara-button" onclick="tombolClick('berbicara', 3.1)">Sulit untuk <br> berbicara</button>
                                <button id="lupaingatan-button" onclick="tombolClick('lupaingatan', 3.1)">Tidak mengenal dimana anda tinggal sekarang </button>
                                <button id="pelupa-button" onclick="tombolClick('pelupa', 3.1)">Terganggu daya <br> ingatnya </button>
                            </div>

                            <div id="pertanyaan-3-11" style="display: none;">
                                <p>Mengkonsumsi obat </p>
                                <button id="one-button-1" onclick="tombolClick('one', 3.111)">Ya</button>
                                <button id="two-button-1" onclick="tombolClick('two', 3.111)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-12" style="display: none;">
                                <p>Tidak mampu membayangkan masa depan </p>
                                <button id="thre-button-1" onclick="tombolClick('thre', 3.112)">Ya</button>
                                <button id="four-button-1" onclick="tombolClick('four', 3.112)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-13" style="display: none;">
                                <p> Tidak mampu mengenali hal-hal yang baru </p>
                                <button id="five-button-1" onclick="tombolClick('five', 3.113)">Ya</button>
                                <button id="six-button-1" onclick="tombolClick('six', 3.113)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-14" style="display: none;">
                                <p> Mengalami hambatan pada pekerjaan </p>
                                <button id="yes314-button-1" onclick="tombolClick('yes314', 3.114)">Ya</button>
                                <button id="no314-button-1" onclick="tombolClick('no314', 3.114)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-121" style="display: none;">
                                <p> Percaya terhadap hal-hal yang aneh </p>
                                <button id="q-button-1" onclick="tombolClick('q', 3.121)">Ya</button>
                                <button id="q-button-1" onclick="tombolClick('q', 3.121)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-122" style="display: none;">
                                <p> Suka berhalusinasi </p>
                                <button id="w-button-1" onclick="tombolClick('w', 3.122)">Ya</button>
                                <button id="w-button-1" onclick="tombolClick('w', 3.122)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-123" style="display: none;">
                                <p> Mudah tersinggung </p>
                                <button id="e-button-1" onclick="tombolClick('e', 3.123)">Ya</button>
                                <button id="e-button-1" onclick="tombolClick('e', 3.123)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-131" style="display: none;">
                                <p> Lupa dengan identitas diri </p>
                                <button id="r-button-1" onclick="tombolClick('r', 3.131)">Ya</button>
                                <button id="r-button-1" onclick="tombolClick('r', 3.131)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-132" style="display: none;">
                                <p> Susah berkonsentrasi </p>
                                <button id="t-button-1" onclick="tombolClick('t', 3.132)">Ya</button>
                                <button id="t-button-1" onclick="tombolClick('t', 3.132)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-133" style="display: none;">
                                <p> Sering berilusinasi </p>
                                <button id="y-button-1" onclick="tombolClick('y', 3.133)">Ya</button>
                                <button id="y-button-1" onclick="tombolClick('y', 3.133)">Tidak</button>
                            </div>


                            <div id="pertanyaan-3-2" style="display: none;">
                                <p>Pilih gangguan yang anda alami </p>
                                <div class="baris1"><button id="berguna-button" onclick="tombolClick('berguna', 3.2)">Merasa tidak berguna </button>
                                    <button id="marah-button" onclick="tombolClick('marah', 3.2)">Mudah marah </button>
                                    <button id="mual-button" onclick="tombolClick('mual', 3.2)">Merasa mual </button>
                                </div>
                                <div class="baris2"><button id="cemas-button" onclick="tombolClick('cemas', 3.2)">Merasa cemas</button>
                                    <button id="kencing-button" onclick="tombolClick('kencing', 3.2)">Sering kencing </button>
                                    <button id="perasaan-button" onclick="tombolClick('perasaan', 3.2)">Ada perubahan suasana perasaan </button>
                                </div>
                            </div>

                            <div id="pertanyaan-4-111" style="display: none;">
                                <p> Merasa Harga dirinya rendah </p>
                                <button id="u-button-1" onclick="tombolClick('u', 4.111)">Ya</button>
                                <button id="u-button-1" onclick="tombolClick('u', 4.111)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-112" style="display: none;">
                                <p> Pernah berfikiran untuk mengakhiri hidup </p>
                                <button id="i-button-1" onclick="tombolClick('i', 4.112)">Ya</button>
                                <button id="i-button-1" onclick="tombolClick('i', 4.112)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-113" style="display: none;">
                                <p> Mengalami perasaan tidak nyata </p>
                                <button id="o-button-1" onclick="tombolClick('o', 4.113)">Ya</button>
                                <button id="o-button-1" onclick="tombolClick('o', 4.113)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-114" style="display: none;">
                                <p> Sering mengalami sakit kepala </p>
                                <button id="p-button-1" onclick="tombolClick('p', 4.114)">Ya</button>
                                <button id="p-button-1" onclick="tombolClick('p', 4.114)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-121" style="display: none;">
                                <p> Sulit untuk berteman </p>
                                <button id="a-button-1" onclick="tombolClick('a', 4.121)">Ya</button>
                                <button id="a-button-1" onclick="tombolClick('a', 4.121)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-122" style="display: none;">
                                <p> Selalu curiga terhadap orang lain </p>
                                <button id="s-button-1" onclick="tombolClick('s', 4.122)">Ya</button>
                                <button id="s-button-1" onclick="tombolClick('s', 4.122)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-123" style="display: none;">
                                <p> Muntah </p>
                                <button id="d-button-1" onclick="tombolClick('d', 4.123)">Ya</button>
                                <button id="d-button-1" onclick="tombolClick('d', 4.123)">Tidak</button>
                            </div>
                            <div id="pertanyaan-4-131" style="display: none;">
                                <p> Sulit untuk berteman </p>
                                <button id="f-button-1" onclick="tombolClick('f', 4.131)">Ya</button>
                                <button id="f-button-1" onclick="tombolClick('f', 4.131)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-132" style="display: none;">
                                <p> Kembung </p>
                                <button id="g-button-1" onclick="tombolClick('g', 4.132)">Ya</button>
                                <button id="g-button-1" onclick="tombolClick('g', 4.132)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-133" style="display: none;">
                                <p> Terasa pandangannya ganda </p>
                                <button id="h-button-1" onclick="tombolClick('h', 4.133)">Ya</button>
                                <button id="h-button-1" onclick="tombolClick('h', 4.133)">Tidak</button>
                            </div>
                            <div id="pertanyaan-4-141" style="display: none;">
                                <p> Mudah tersinggung </p>
                                <button id="j-button-1" onclick="tombolClick('j', 4.141)">Ya</button>
                                <button id="j-button-1" onclick="tombolClick('j', 4.141)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-142" style="display: none;">
                                <p> Merasa sakit nyeri pada tubuhnya </p>
                                <button id="k-button-1" onclick="tombolClick('k', 4.142)">Ya</button>
                                <button id="k-button-1" onclick="tombolClick('k', 4.142)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-143" style="display: none;">
                                <p> Persepsinya berlebihan pada suatu bagian tubuhnya </p>
                                <button id="l-button-1" onclick="tombolClick('l', 4.143)">Ya</button>
                                <button id="l-button-1" onclick="tombolClick('l', 4.143)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-151" style="display: none;">
                                <p> Sulit kencing </p>
                                <button id="z-button-1" onclick="tombolClick('z', 4.151)">Ya</button>
                                <button id="z-button-1" onclick="tombolClick('z', 4.151)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-152" style="display: none;">
                                <p> Sesak nafas </p>
                                <button id="x-button-1" onclick="tombolClick('x', 4.152)">Ya</button>
                                <button id="x-button-1" onclick="tombolClick('x', 4.152)">Tidak</button>
                            </div>
                            <div id="pertanyaan-4-153" style="display: none;">
                                <p> Keringat dingin </p>
                                <button id="c-button-1" onclick="tombolClick('c', 4.153)">Ya</button>
                                <button id="c-button-1" onclick="tombolClick('c', 4.153)">Tidak</button>
                            </div>

                            <div id="pertanyaan-4-161" style="display: none;">
                                <p>Ada perubahan suasana perasaan. </p>
                                <button id="dsa-button-1" onclick="tombolClick('dsa', 4.16)">Merasa cepat lelah </button>
                                <button id="asd-button-1" onclick="tombolClick('asd', 4.16)">Tidak mampu menampakan emosinya</button>
                            </div>

                            <div id="pertanyaan-5-11" style="display: none;">
                                <p>Suka menyendiri </p>
                                <button id="qw-button-1" onclick="tombolClick('qw', 5.11)">Ya</button>
                                <button id="qw-button-1" onclick="tombolClick('qw', 5.11)">Tidak</button>
                            </div>

                            <div id="pertanyaan-5-12" style="display: none;">
                                <p>Tidak mampu membayangkan masa depan </p>
                                <button id="er-button-1" onclick="tombolClick('er', 5.12)">Ya</button>
                                <button id="er-button-1" onclick="tombolClick('er', 5.12)">Tidak</button>
                            </div>

                            <div id="pertanyaan-5-13" style="display: none;">
                                <p> Tidak mampu mengenali hal-hal yang baru </p>
                                <button id="ty-button-1" onclick="tombolClick('ty', 5.13)">Ya</button>
                                <button id="ty-button-1" onclick="tombolClick('ty', 5.13)">Tidak</button>
                            </div>

                            <div id="pertanyaan-5-14" style="display: none;">
                                <p> Mengalami hambatan pada pekerjaan </p>
                                <button id="ui-button-1" onclick="tombolClick('ui', 5.14)">Ya</button>
                                <button id="ui-button-1" onclick="tombolClick('ui', 5.14)">Tidak</button>
                            </div>

                            <div id="pertanyaan-5-21" style="display: none;">
                                <p>Kurang dalam dorongan beraktivitas </p>
                                <button id="as-button-1" onclick="tombolClick('as', 5.21)">Ya</button>
                                <button id="as-button-1" onclick="tombolClick('as', 5.21)">Tidak</button>
                            </div>

                            <div id="pertanyaan-5-22" style="display: none;">
                                <p>Kurang mampu berbicara </p>
                                <button id="df-button-1" onclick="tombolClick('df', 5.22)">Ya</button>
                                <button id="df-button-1" onclick="tombolClick('df', 5.22)">Tidak</button>
                            </div>

                            <div id="pertanyaan-5-23" style="display: none;">
                                <p> Tidak dapat menikmati kegiatan yang disenanginya </p>
                                <button id="gh-button-1" onclick="tombolClick('gh', 5.23)">Ya</button>
                                <button id="gh-button-1" onclick="tombolClick('gh', 5.23)">Tidak</button>
                            </div>

                            <div id="hasil" style="display: none;">
                                <p id="output"> </p>
                            </div>
                            <script>
                                function tombolClick(pilihan, langkah) {
                                    if (langkah === 1) {
                                        if (pilihan === 'yes') {
                                            document.getElementById('pertanyaan-1').style.display = 'none';
                                            document.getElementById('pertanyaan-2').style.display = 'block';
                                        } else if (pilihan === 'no') {
                                            document.getElementById('pertanyaan-1').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Anda sehat';
                                        }
                                    } else if (langkah === 2) {
                                        if (pilihan === 'sadar') {
                                            document.getElementById('pertanyaan-2').style.display = 'none';
                                            document.getElementById('pertanyaan-3-1').style.display = 'block';
                                        } else if (pilihan === 'tidak') {
                                            document.getElementById('pertanyaan-2').style.display = 'none';
                                            document.getElementById('pertanyaan-3-2').style.display = 'block';
                                        }
                                    } else if (langkah === 3.1) {
                                        if (pilihan === 'berbicara') {
                                            document.getElementById('pertanyaan-3-1').style.display = 'none';
                                            document.getElementById('pertanyaan-3-11').style.display = 'block';
                                        } else if (pilihan === 'lupaingatan') {
                                            document.getElementById('pertanyaan-3-1').style.display = 'none';
                                            document.getElementById('pertanyaan-3-121').style.display = 'block';
                                        } else if (pilihan === 'pelupa') {
                                            document.getElementById('pertanyaan-3-1').style.display = 'none';
                                            document.getElementById('pertanyaan-3-131').style.display = 'block';
                                        }
                                    } else if (langkah === 3.2) {
                                        if (pilihan === 'berguna') {
                                            document.getElementById('pertanyaan-3-2').style.display = 'none';
                                            document.getElementById('pertanyaan-4-111').style.display = 'block';
                                        } else if (pilihan === 'marah') {
                                            document.getElementById('pertanyaan-3-2').style.display = 'none';
                                            document.getElementById('pertanyaan-4-122').style.display = 'block';
                                        } else if (pilihan === 'mual') {
                                            document.getElementById('pertanyaan-3-2').style.display = 'none';
                                            document.getElementById('pertanyaan-4-131').style.display = 'block';
                                        } else if (pilihan === 'cemas') {
                                            document.getElementById('pertanyaan-3-2').style.display = 'none';
                                            document.getElementById('pertanyaan-4-141').style.display = 'block';
                                        } else if (pilihan === 'kencing') {
                                            document.getElementById('pertanyaan-3-2').style.display = 'none';
                                            document.getElementById('pertanyaan-4-151').style.display = 'block';
                                        } else if (pilihan === 'perasaan') {
                                            document.getElementById('pertanyaan-3-2').style.display = 'none';
                                            document.getElementById('pertanyaan-4-161').style.display = 'block';
                                        }

                                    } else if (langkah === 3.111) {
                                        if (pilihan === 'one') {
                                            document.getElementById('pertanyaan-3-11').style.display = 'none';
                                            document.getElementById('pertanyaan-3-12').style.display = 'block';
                                        } else if (pilihan === 'two') {
                                            document.getElementById('pertanyaan-3-11').style.display = 'none';
                                            document.getElementById('pertanyaan-3-12').style.display = 'block';
                                        }
                                    } else if (langkah === 3.112) {
                                        if (pilihan === 'thre') {
                                            document.getElementById('pertanyaan-3-12').style.display = 'none';
                                            document.getElementById('pertanyaan-3-13').style.display = 'block';
                                        } else if (pilihan === 'four') {
                                            document.getElementById('pertanyaan-3-12').style.display = 'none';
                                            document.getElementById('pertanyaan-3-13').style.display = 'block';
                                        }
                                    } else if (langkah === 3.113) {
                                        if (pilihan === 'five') {
                                            document.getElementById('pertanyaan-3-13').style.display = 'none';
                                            document.getElementById('pertanyaan-3-14').style.display = 'block';
                                        } else if (pilihan === 'six') {
                                            document.getElementById('pertanyaan-3-13').style.display = 'none';
                                            document.getElementById('pertanyaan-3-14').style.display = 'block';
                                        }
                                    } else if (langkah === 3.114) {
                                        if (pilihan === 'yes314') {
                                            document.getElementById('pertanyaan-3-14').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Amnestik ';
                                        } else if (pilihan === 'no3113') {
                                            document.getElementById('pertanyaan-3-14').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Amnestik ';
                                        }
                                    } else if (langkah === 3.121) {
                                        if (pilihan === 'q') {
                                            document.getElementById('pertanyaan-3-121').style.display = 'none';
                                            document.getElementById('pertanyaan-3-122').style.display = 'block';
                                        }
                                    } else if (langkah === 3.122) {
                                        if (pilihan === 'w') {
                                            document.getElementById('pertanyaan-3-122').style.display = 'none';
                                            document.getElementById('pertanyaan-3-123').style.display = 'block';
                                        }
                                    } else if (langkah === 3.123) {
                                        if (pilihan === 'e') {
                                            document.getElementById('pertanyaan-3-123').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Demensia ';
                                        }
                                    } else if (langkah === 3.131) {
                                        if (pilihan === 'r') {
                                            document.getElementById('pertanyaan-3-131').style.display = 'none';
                                            document.getElementById('pertanyaan-3-132').style.display = 'block';
                                        }
                                    } else if (langkah === 3.132) {
                                        if (pilihan === 't') {
                                            document.getElementById('pertanyaan-3-132').style.display = 'none';
                                            document.getElementById('pertanyaan-3-133').style.display = 'block';
                                        }
                                    } else if (langkah === 3.133) {
                                        if (pilihan === 'y') {
                                            document.getElementById('pertanyaan-3-133').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Delirium ';
                                        }
                                    } else if (langkah === 4.111) {
                                        if (pilihan === 'u') {
                                            document.getElementById('pertanyaan-4-111').style.display = 'none';
                                            document.getElementById('pertanyaan-4-112').style.display = 'block';
                                        }
                                    } else if (langkah === 4.112) {
                                        if (pilihan === 'i') {
                                            document.getElementById('pertanyaan-4-112').style.display = 'none';
                                            document.getElementById('pertanyaan-4-113').style.display = 'block';
                                        }
                                    } else if (langkah === 4.113) {
                                        if (pilihan === 'o') {
                                            document.getElementById('pertanyaan-4-113').style.display = 'none';
                                            document.getElementById('pertanyaan-4-114').style.display = 'block';
                                        }
                                    } else if (langkah === 4.114) {
                                        if (pilihan === 'p') {
                                            document.getElementById('pertanyaan-4-114').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Disosiatif  ';
                                        }
                                    } else if (langkah === 4.121) {
                                        if (pilihan === 'a') {
                                            document.getElementById('pertanyaan-4-121').style.display = 'none';
                                            document.getElementById('pertanyaan-4-122').style.display = 'block';
                                        }
                                    } else if (langkah === 4.122) {
                                        if (pilihan === 's') {
                                            document.getElementById('pertanyaan-4-122').style.display = 'none';
                                            document.getElementById('pertanyaan-4-123').style.display = 'block';
                                        }

                                    } else if (langkah === 4.123) {
                                        if (pilihan === 'd') {
                                            document.getElementById('pertanyaan-4-123').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Neurosis Depresif   ';
                                        }
                                    } else if (langkah === 4.131) {
                                        if (pilihan === 'f') {
                                            document.getElementById('pertanyaan-4-131').style.display = 'none';
                                            document.getElementById('pertanyaan-4-132').style.display = 'block';
                                        }
                                    } else if (langkah === 4.132) {
                                        if (pilihan === 'g') {
                                            document.getElementById('pertanyaan-4-132').style.display = 'none';
                                            document.getElementById('pertanyaan-4-133').style.display = 'block';
                                        }

                                    } else if (langkah === 4.133) {
                                        if (pilihan === 'h') {
                                            document.getElementById('pertanyaan-4-133').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Kepribadian   ';
                                        }
                                    } else if (langkah === 4.141) {
                                        if (pilihan === 'j') {
                                            document.getElementById('pertanyaan-4-141').style.display = 'none';
                                            document.getElementById('pertanyaan-4-142').style.display = 'block';
                                        }
                                    } else if (langkah === 4.142) {
                                        if (pilihan === 'k') {
                                            document.getElementById('pertanyaan-4-142').style.display = 'none';
                                            document.getElementById('pertanyaan-4-143').style.display = 'block';
                                        }

                                    } else if (langkah === 4.143) {
                                        if (pilihan === 'l') {
                                            document.getElementById('pertanyaan-4-143').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Somatoform    ';
                                        }
                                    } else if (langkah === 4.151) {
                                        if (pilihan === 'z') {
                                            document.getElementById('pertanyaan-4-151').style.display = 'none';
                                            document.getElementById('pertanyaan-4-152').style.display = 'block';
                                        }
                                    } else if (langkah === 4.152) {
                                        if (pilihan === 'x') {
                                            document.getElementById('pertanyaan-4-152').style.display = 'none';
                                            document.getElementById('pertanyaan-4-153').style.display = 'block';
                                        }

                                    } else if (langkah === 4.153) {
                                        if (pilihan === 'c') {
                                            document.getElementById('pertanyaan-4-153').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Cemas Menyeluruh ';
                                        }
                                    } else if (langkah === 4.16) {
                                        if (pilihan === 'dsa') {
                                            document.getElementById('pertanyaan-4-161').style.display = 'none';
                                            document.getElementById('pertanyaan-5-11').style.display = 'block';
                                        } else if (pilihan === 'asd') {
                                            document.getElementById('pertanyaan-4-161').style.display = 'none';
                                            document.getElementById('pertanyaan-5-21').style.display = 'block';
                                        }
                                    } else if (langkah === 5.11) {
                                        if (pilihan === 'qw') {
                                            document.getElementById('pertanyaan-5-11').style.display = 'none';
                                            document.getElementById('pertanyaan-5-12').style.display = 'block';
                                        }
                                    } else if (langkah === 5.12) {
                                        if (pilihan === 'er') {
                                            document.getElementById('pertanyaan-5-12').style.display = 'none';
                                            document.getElementById('pertanyaan-5-13').style.display = 'block';
                                        }
                                    } else if (langkah === 5.13) {
                                        if (pilihan === 'ty') {
                                            document.getElementById('pertanyaan-5-13').style.display = 'none';
                                            document.getElementById('pertanyaan-5-14').style.display = 'block';
                                        }
                                    } else if (langkah === 5.14) {
                                        if (pilihan === 'ui') {
                                            document.getElementById('pertanyaan-5-14').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Afektif  ';
                                        }
                                    } else if (langkah === 5.21) {
                                        if (pilihan === 'as') {
                                            document.getElementById('pertanyaan-5-21').style.display = 'none';
                                            document.getElementById('pertanyaan-5-22').style.display = 'block';
                                        }
                                    } else if (langkah === 5.22) {
                                        if (pilihan === 'df') {
                                            document.getElementById('pertanyaan-5-22').style.display = 'none';
                                            document.getElementById('pertanyaan-5-23').style.display = 'block';
                                        }
                                    } else if (langkah === 5.23) {
                                        if (pilihan === 'gh') {
                                            document.getElementById('pertanyaan-5-23').style.display = 'none';
                                            document.getElementById('hasil').style.display = 'block';
                                            document.getElementById('output').innerText = 'Gangguan kesehatan mental Skizofrenia  ';
                                        }
                                    }




                                }
                            </script>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>



</body>

</html>