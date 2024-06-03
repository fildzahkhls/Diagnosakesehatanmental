<!DOCTYPE html>
<html>

<head>
    <title>Diagnosa Kesehatan Mental</title>
</head>

<body>
    <h1>Diagnosa Kesehatan Mental</h1>

    <div id="pertanyaan-1">
        <p>Apakah Anda susah tidur, overthinking, dan susah makan?</p>
        <button id="yes-button-1" onclick="tombolClick('yes', 1)">Ya</button>
        <button id="no-button-1" onclick="tombolClick('no', 1)">Tidak</button>
    </div>

    <div id="pertanyaan-2" style="display: none;">
        <p>Apakah Anda sadar dengan itu?</p>
        <button id="sadar-button" onclick="tombolClick('sadar', 2)">Sadar</button>
        <button id="tidak-button" onclick="tombolClick('tidak', 2)">Tidak</button>
        <button id="halusinasi-button" onclick="tombolClick('halusinasi', 2)">Halusinasi</button>
    </div>

    <div id="hasil" style="display: none;">
        <p id="output"></p>
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
                    document.getElementById('hasil').style.display = 'block';
                    document.getElementById('output').innerText = 'Anda gila';
                } else if (pilihan === 'tidak') {
                    document.getElementById('pertanyaan-2').style.display = 'none';
                    document.getElementById('hasil').style.display = 'block';
                    document.getElementById('output').innerText = 'Anda tetidur';
                } else if (pilihan === 'halusinasi') {
                    document.getElementById('pertanyaan-2').style.display = 'none';
                    document.getElementById('hasil').style.display = 'block';
                    document.getElementById('output').innerText = 'Anda skizofrenia';
                }
            }
        }
    </script>
</body>

</html>


<!--                            <div id="pertanyaan-3-13" style="display: none;">
                                <p> Tidak mampu mengenali hal-hal yang baru </p>
                                <button id="yes313-button-1" onclick="tombolClick('yes3113', 4.3)">Ya</button>
                                <button id="no313-button-1" onclick="tombolClick('no3113', 4.3)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-14" style="display: none;">
                                <p> Mengalami hambatan pada pekerjaan </p>
                                <button id="yes314-button-1" onclick="tombolClick('yes314', 4.4)">Ya</button>
                                <button id="no314-button-1" onclick="tombolClick('no314', 4.4)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-121" style="display: none;">
                                <p> Percaya terhadap hal-hal yang aneh </p>
                                <button id="yes3121-button-1" onclick="tombolClick('yes3121', 3.121)">Ya</button>
                                <button id="no3121-button-1" onclick="tombolClick('no3121', 3.121)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-122" style="display: none;">
                                <p> Suka berhalusinasi </p>
                                <button id="yes3122-button-1" onclick="tombolClick('yes3122', 3.122)">Ya</button>
                                <button id="no3122-button-1" onclick="tombolClick('no3122', 3.122)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-123" style="display: none;">
                                <p> Mudah tersinggung </p>
                                <button id="yes3123-button-1" onclick="tombolClick('yes3123', 3.123)">Ya</button>
                                <button id="no3123-button-1" onclick="tombolClick('no3123', 3.123)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-131" style="display: none;">
                                <p> Lupa dengan identitas diri </p>
                                <button id="yes3131-button-1" onclick="tombolClick('yes3131', 3.131)">Ya</button>
                                <button id="no3131-button-1" onclick="tombolClick('no3131', 3.131)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-132" style="display: none;">
                                <p> Susah berkonsentrasi </p>
                                <button id="yes3132-button-1" onclick="tombolClick('yes3132', 3.132)">Ya</button>
                                <button id="no3132-button-1" onclick="tombolClick('no3132', 3.132)">Tidak</button>
                            </div>

                            <div id="pertanyaan-3-133" style="display: none;">
                                <p> Sering berilusinasi </p>
                                <button id="yes3133-button-1" onclick="tombolClick('yes3133', 3.133)">Ya</button>
                                <button id="no3133-button-1" onclick="tombolClick('no3133', 3.133)">Tidak</button>
                            </div>
 -->