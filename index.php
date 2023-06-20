<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/72aa72871d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="style.css"/>

</head>

<body id="bg">

    <div id="lockScreen" class="container-fluid vh-100 m-0 position-fixed">
        <h2 class="position-fixed top-0 start-50 text-center translate-middle-x mt-3">Undangan Pernikahan</h2>
        <div class="position-fixed top-50 start-50 text-center translate-middle">
            <img id="model" class="border border-warning border-2" src="model.jpg">
            <h1 class="text-warning text-center display-5 font m-0">Saslkdklsda Aasldkm</h1>
            <h1 class="text-warning text-center display-5 font m-0">&</h1>
            <h1 class="text-warning text-center display-5 font m-0">Jsadjkhkjasd Lsdjkahkjdashk</h1>
        </div>
        <button id="myButton" class="btn btn-warning position-fixed bottom-0 start-50 text-center translate-middle-x mb-3" onclick="openScreen()">
            Buka Undangan
        </button>
    </div>

    <script async>
        function openScreen() {
            document.getElementById("lockScreen").style.animation = "flyup 2s ease-out forwards";
            document.body.classList.remove("disabled");
            document.getElementById("playButton").click();
            AOS.init({
                duration: 3000,
                mirror: true,
                anchorPlacement: 'top-bottom',
            });
        }
        document.body.classList.add("disabled");
    </script>

    <style>
        #lockScreen {
            position: absolute;
            top: 0;
            left: 0;
        }

        @keyframes flyup {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-100%);
            }
        }
    </style>

    <div id="nav" class="position-fixed mb-5 bottom-0 start-50 translate-middle-x btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-warning" href="#bg"><i class="fas fa-home"></i></a>
        <a class="btn btn-warning" href="#isi"><i class="fas fa-book-open"></i></a>
        <a class="btn btn-warning" href="#lokasi"><i class="fas fa-map-marker-alt"></i></a>
        <a class="btn btn-warning" href="#kisah"><i class="fas fa-heart"></i></a>
        <a class="btn btn-warning" href="#galeri"><i class="fas fa-images"></i></a>
        <a class="btn btn-warning" href="#komentar"><i class="fas fa-comment"></i></a>

    </div>

    <button id="playButton" class="btn btn-warning position-fixed mb-5 bottom-0 end-0">
        <i class="fa fa-play"></i>
    </button>

    <table id="home" class="container-fluid bg" style="height: 100vh;">
        <tbody>
            <tr>
                <td class="align-middle">
                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div data-aos="fade-up" class="text-center col-9 ">
                            <img id="model" class="border border-warning border-2" src="model.jpg">
                            <h1 class="text-warning display-1">Askld Alksadlk & Kjsdahk Lkjsdahkj</h1>
                            <h3>2 Januari 2026</h3>
                            <h3>19:00 - 21:00</h3>
                        </div>
                        <div class="text-center col">

                        </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table id="isi" class="container-fluid bg text-break" style="height: 100vh;">
        <tbody>
            <tr>
                <td class="align-middle">
                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div data-aos="fade-up" class="p-3 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg text-center col-6">
                            <h3 class="text-warning border-bottom">Pernikahan</h3>
                            <h3>2 Januari 2026
                            </h3>
                        </div>
                        <div class="text-center col">

                        </div>
                    </div>

                </td>
            </tr>
        </tbody>
    </table>

    <table id="lokasi" class="container-fluid bg text-break" style="height: 100vh;">
        <tbody>
            <tr>
                <td class="align-middle">
                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div data-aos="fade-up" class="p-3 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg text-center col-6">
                            <h3 class="text-warning     border-bottom">Lokasi</h3>
                            <h3 class="border-bottom">001, Graha Pradipta Jogja Expo Center
                                Jl. Raya Janti Jl. Wonocatur, Wonocatur, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198
                            </h3>
                            <a href="https://goo.gl/maps/tgcZuyfXGM5tBRgQ9">
                                <h3>Map</h3>
                            </a>
                        </div>
                        <div class="text-center col">

                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table id="kisah" class="container-fluid bg text-break" style="height: 100vh;">
        <tbody>
            <tr>
                <td class="align-top">
                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div class="mt-3 p-1 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg text-center
                            col-8">
                            <h3 class="text-warning">Kisah</h3>
                        </div>
                        <div class="text-center col">

                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="align-top">
                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div data-aos="fade-up" class="p-1 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg text-center text-break col-8">
                            <h4 class="text-warning border-bottom">Awal Bertemu</h4>
                            <img id="imgkisah" src="https://awsimages.detik.net.id/community/media/visual/2020/10/12/ilustrasi-pernikahan.jpeg?w=700&q=90">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat rem fugiat molestias assumenda debitis, repellendus cumque est blanditiis animi eveniet recusandae alias, iure modi ab ullam explicabo consequatur omnis hic!</h5>
                        </div>
                        <div class="text-center col">

                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table id="galeri" class="container-fluid bg text-break" style="height: 100vh;">
        <tbody>
            <tr>
                <td class="align-top">
                    <div class="row m-0">
                        <div class="col"></div>
                        <div class="mt-3 p-1 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg text-center col-8">
                            <h3 class="font">Galeri</h3>
                        </div>
                        <div class="col"></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="align-top">

                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div class="p-3 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg text-center col-8">

                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active text-center" data-bs-interval="2000">
                                        <img class="d-block galeri" src="model.jpg" class="d-block" alt="">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img class="d-block galeri" src="model.jpg" class="d-block" alt="">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img class="d-block galeri" src="model.jpg" class="d-block" alt="">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img class="d-block galeri" src="model.jpg" class="d-block" alt="">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img class="d-block galeri" src="model.jpg" class="d-block" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="text-center col">

                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table id="komentar" class="container-fluid bg text-break" style="height: 100vh;">
        <tbody>
            <tr>
                <td class="align-top">
                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div class="mt-3 mb-0 p-1 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg text-center col-8">
                            <h3 class="text-warning">Komentar</h3>
                        </div>
                        <div class="text-center col">

                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="align-top">
                    <div class="row justify-content-md-center m-0">
                        <div class="text-center col">

                        </div>
                        <div class="m-0 p-3 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg col-8">
                            <form method="POST" action="incinputkomentar.php">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Tulis namamu di sini!" pattern="[A-Za-z0-9!.,?@ ]+">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="komentar" name="komentar" rows="3" placeholder="Tulis komentarmu di sini!" pattern="[A-Za-z0-9!.,?@ ]+"></textarea>
                                </div>
                                <input type="submit" value="Kirim" class="btn btn-warning">
                            </form>
                        </div>
                        <div class="text-center col">

                        </div>
                    </div>
                </td>
            </tr>

            <!-- </tbody>
    </table>

    <table id="komentar" class="container-fluid text-break" style="height: 100vh;">
        <tbody> -->

            <?php
            date_default_timezone_set('Asia/Jakarta');
            include("incselectkomentar.php");
            $result = selectKomentar();
            while ($row = $result->fetch_assoc()) {
                include("incselisihwaktu.php");
                echo '
                    
                        <tr>
                            <td class="align-top">
                                <div class="row justify-content-md-center m-0">
                                    <div  class="text-center col">
                                        
                                    </div>
                                    <div class="m-0 p-3 bg-light bg-opacity-75 border border-warning rounded-3 shadow-lg col-8">
                                        <h6 class="fw-bold"> ' . ucwords($row["nama"]) . '</h6>
                                        <h6> ' . addslashes($row["komentar"]) . '</h6>
                                        <h7 class="text-secondary"> ' . $selisih . '</h7>
                                    </div>
                                    <div class="text-center col">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    
                    ';
            }
            ?>

        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        const playButton = document.getElementById("playButton");
        let isPlaying = false;

        playButton.addEventListener("click", function() {
            if (!isPlaying) {
                playButton.innerHTML = '<i class="fa fa-pause"></i>';
                audioPlayer.play();
                isPlaying = true;
            } else {
                playButton.innerHTML = '<i class="fa fa-play"></i>';
                audioPlayer.pause();
                isPlaying = false;
            }
        });
    </script>

    <audio id="audioPlayer" src="bgm.mp3" type="audio/mpeg"></audio>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const x = urlParams.get('pesan');

        document.getElementById("home").scrollIntoView();

        if (x == "sukses") {
            document.getElementById("myButton").click();
            document.getElementById("komentar").scrollIntoView();
        }
    </script>
</body>

</html>