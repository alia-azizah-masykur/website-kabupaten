<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kabupaten Subang</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('storage')}}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{asset('storage')}}/assets/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('storage')}}/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('storage')}}/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('storage')}}/assets/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="/" : active="request()->routeIs('index')">
                            <img src="{{ asset('storage') }}/assets/images/logo.svg" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="index.page"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li><a href="about": active="request()->routeIs('about')">Struktur</a></li>
                        <li><a href="service" : active="request()->routeIs('service')">Kecamatan</a></li>
                        <li><a href="journal" : active="request()->routeIs('journal')">Wisata</a></li>
                        <li><a href="contact" : active="request()->routeIs('contact')">Tentang</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <div class="s-header__contact">
                        <a href="contact.html" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro">

                <div class="row s-intro__content width-sixteen-col">

                    <div class="column lg-12 s-intro__content-inner grid-block">
                        
                        <div class="s-intro__content-text">
                            <div class="s-intro__content-pretitle text-pretitle">SELAMAT DATANG</div>
                            <h1 class="s-intro__content-title">
                            Di Website Resmi <br>
                            Pemerintah Daerah <br>
                            Kabupaten Subang <br>
                            </h1>
                        </div> <!-- s-intro__content-text -->

                        <div class="s-intro__content-media"> 
                            <div class="s-intro__content-media-inner">                               
                                <img src="{{ asset('storage') }}/assets/images/intro-bg@2x.jpg">
                                <!-- <div class="lines">                               
                                    <span></span>                                  
                                </div> -->
                            </div>
                        </div> <!-- s-intro__content-media -->                      

                        <div class="s-intro__scroll-down">
                            <a href="#about" class="smoothscroll">
                                <div class="scroll-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                                </div>
                                <span>Jelajahi </span>
                            </a>
                        </div> <!-- s-intro__scroll-down -->
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

            </section> <!-- end s-intro -->

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">

                        <img src="{{asset('storage')}}/assets/images/geometric_shape.svg" alt="" class="s-about__content-imgbg">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Informasi</div>                           
                            <h2 class="text-display-title">
                           Pengumuman
                            </h2>                           
                        </div> <!-- end section-header -->
                        <br>
                        <div class="s-about__content-main grid-section-split__primary">
                            <p class="attention-getter">
                            1. Indek Kepuasan Masyarakat Rumah Sakit Umum Daerah Subang  
                            </p>

                            <p class="attention-getter">
                           2. Maklumat Pelayanan Rumah Sakit Umum Daerah Subang
                            </p>

                            <p class="attention-getter">
                           3. Informasi Layanan Poliklinik Rumah Sakit Umum Daerah Subang
                            </p>

                            <p class="attention-getter">
                           4. Standar Pelayanan Rumah Sakit Umum Daerah Subang
                            </p>

                        </div> <!-- end s-about__content-main -->

                        <div class="s-about__content-btn grid-section-split__bottom">
                            <!-- <a href="about.html" class="btn btn--stroke u-fullwidth">More About Me</a> -->

                            <ul class="s-about__social social-list">
                                <li>
                                    <!-- <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                        <span class="u-screen-reader-text">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                        <span class="u-screen-reader-text">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                        <span class="u-screen-reader-text">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                        <span class="u-screen-reader-text">Dribbble</span>
                                    </a> -->
                                </li>
                            </ul> <!-- end s-footer__social -->
                        </div> <!-- end s-about__content-btn -->
                    
                    </div> <!-- content-inner -->
                </div>
                
            </section> 
            <br><!-- end s-about -->

            <!-- expertise
            ----------------------------------------------- -->
           
            <div class="row width-narrower pagemain">
                        <div class="column xl-12"> 

                            <h2>SEJARAH</h2>
                            <p>
                            Prasejarah
                            </p>
                            <p>
                            Bukti adanya kelompok masyarakat pada masa prasejarah di wilayah Kabupaten Subang adalah ditemukannya kapak batu di daerah Bojongkeding (Binong), Pagaden, Kalijati dan Dayeuhkolot (Sagalaherang). Temuan benda-benda prasejarah bercorak neolitikum ini menandakan bahwa saat itu di wilayah Kabupaten Subang sekarang sudah ada kelompok masyarakat yang hidup dari sektor pertanian dengan pola sangat sederhana.
                            Selain itu, dalam periode prasejarah juga berkembang pula pola kebudayaan perunggu yang ditandai dengan penemuan situs di Kampung Engkel, Sagalaherang.
                            </p>
                            
                            <p>
                            Hindu
                            </p>
                            <p>
                            Pada saat berkembangnya corak kebudayaan Hindu, wilayah Kabupaten Subang menjadi bagian dari 3 kerajaan, yakni Tarumanagara, Galuh, dan Pajajaran. Selama berkuasanya 3 kerajaan tersebut, dari wilayah Kabupaten Subang diperkirakan sudah ada kontak-kontek dengan beberapa kerajaan maritim hingga di luar kawasan Nusantara. Peninggalan berupa pecahan-pecahan keramik asal Cina di Patenggeng (Kalijati) membuktikan bahwa selama abad ke-7 hingga abad ke-15 sudah terjalin kontak perdagangan dengan wilayah yang jauh. Sumber lain menyebutkan bahwa pada masa tersebut, wilayah Subang berada di bawah kekuasaan Kerajaan Sunda. Kesaksian Tome’ Pires seorang Portugis yang mengadakan perjalanan keliling Nusantara menyebutkan bahwa saat menelusuri pantai utara Jawa, kawasan sebelah timur Sungai Cimanuk hingga Banten adalah wilayah kerajaan Sunda.
                            </p>
                           
                            <p>
                            Islam
                            </p>
                            <p>Masa datangnya pengaruh kebudayaan Islam di wilayah Subang tidak terlepas dari peran seorang tokoh ulama, Wangsa Goparana yang berasal dari Talaga, Majalengka. Sekitar tahun 1530, Wangsa Goparana membuka permukiman baru di Sagalaherang dan menyebarkan agama Islam ke berbagai pelosok Subang.
                            </p>
                           
                            <p>
                            Kolonialisme
                            </p>
                            <p>
                                Pasca runtuhnya kerajaan Pajajaran, wilayah Subang seperti halnya wilayah lain di P. Jawa, menjadi rebutan berbagai kekuatan. Tercatat kerajaan Banten, Mataram, Sumedanglarang, VOC, Inggris, dan Kerajaan Belanda berupaya menanamkan pengaruh di daerah yang cocok untuk dijadikan kawasan perkebunan serta strategis untuk menjangkau Batavia. Pada saat konflik Mataram-VOC, wilayah Kabupaten Subang, terutama di kawasan utara, dijadikan jalur logistik bagi pasukan Sultan Agung yang akan menyerang Batavia. Saat itulah terjadi percampuran budaya antara Jawa dengan Sunda, karena banyak tentara Sultan Agung yang urung kembali ke Mataram dan menetap di wilayah Subang. Tahun 1771, saat berada di bawah kekuasaan Kerajaan Sumedanglarang, di Subang, tepatnya di Pagaden, Pamanukan, dan Ciasem tercatat seorang bupati yang memerintah secara turun-temurun. Saat pemerintahan Sir Thomas Stamford Raffles (1811-1816) konsesi penguasaan lahan wilayah Subang diberikan kepada swasta Eropa. Tahun 1812 tercatat sebagai awal kepemilikan lahan oleh tuan-tuan tanah yang selanjutnya membentuk perusahaan perkebunan Pamanoekan en Tjiasemlanden (P & T Lands). Penguasaan lahan yang luas ini bertahan sekalipun kekuasaan sudah beralih ke tangan pemerintah Kerajaan Belanda. Lahan yang dikuasai penguasa perkebunan saat itu mencapai 212.900 ha. dengan hak eigendom. Untuk melaksanakan pemerintahan di daerah ini, pemerintah Belanda membentuk distrik-distrik yang membawahi onderdistrik. Saat itu, wilayah Subang berada di bawah pimpinan seorang kontrilor BB (bienenlandsch bestuur) yang berkedudukan di Subang.
                            </p>
                           
                            <p>
                            Nasionalisme
                            </p>
                            <p>
                            Tidak banyak catatan sejarah pergerakan pada awal abad ke-20 di Kabupaten Subang. Namun demikian, Setelah Kongres Sarekat Islam di bandung tahun 1916 di Subang berdiri cabang organisasi Sarekat Islam di Desa Pringkasap (Pabuaran) dan di Sukamandi (Ciasem). Selanjutnya, pada tahun 1928 berdiri Paguyuban Pasundan yang diketuai Darmodiharjo (karyawan kantor pos), dengan sekretarisnya Odeng Jayawisastra (karyawan P & T Lands). Tahun 1930, Odeng Jayawisastra dan rekan-rekannya mengadakan pemogokan di percetakan P & T Lands yang mengakibatkan aktivitas percetakan tersebut lumpuh untuk beberapa saat. Akibatnya Odeng Jayawisastra dipecat sebagai karyawan P & T Lands. Selanjutnya Odeng Jayawisastra dan Tohari mendirikan cabang Partai Nasional Indonesia yang berkedudukan di Subang. Sementara itu, Darmodiharjo tahun 1935 mendirikan cabang Nahdlatul Ulama yang diikuti oleh cabang Parindra dan Partindo di Subang. Saat Gabungan Politik Indonesia (GAPI) di Jakarta menuntut Indonesia berparlemen, di Bioskop Sukamandi digelar rapat akbar GAPI Cabang Subang untuk mengenukakan tuntutan serupa dengan GAPI Pusat.
                            </p>
                            
                            <p>
                            Jepang
                            </p>
                            <p>
                            Pendaratan tentara angkatan laut Jepang di pantai Eretan Timur tanggal 1 Maret 1942 berlanjut dengan direbutnya pangkalan udara Kalijati. Direbutnya pangkalan ini menjadi catatan tersendiri bagi sejarah pemerintahan Hindia Belanda, karena tak lama kemudian terjadi kapitulasi dari tentara Hindia Belanda kepada tentara Jepang. Dengan demikian, Hindia Belanda di Nusantara serta merta jatuh ke tangan tentara pendudukan Jepang. Para pejuang pada masa pendudukan Belanda melanjutkan perjuangan melalui gerakan bawah tanah. Pada masa pendudukan Jepang ini Sukandi (guru Landschbouw), R. Kartawiguna, dan Sasmita ditangkap dan dibunuh tentara Jepang.
                            </p>
                            
                            <p>
                            Merdeka
                            </p>
                            <p>
                            Proklamasi Kemerdekaan RI di Jakarta berimbas pada didirikannya berbagai badan perjuangan di Subang, antara lain Badan Keamanan Rakyat (BKR), API, Pesindo, Lasykar Uruh, dan lain-lain, banyak di antara anggota badan perjuangan ini yang kemudian menjadi anggota TNI. Saat tentara KNIL kembali menduduki Bandung, para pejuang di Subang menghadapinya melalui dua front, yakni front selatan (Lembang) dan front barat (Gunung Putri dan Bekasi). Tahun 1946, Karesidenan Jakarta berkedudukan di Subang. Pemilihan wilayah ini tentunya didasarkan atas pertimbangan strategi perjuangan. Residen pertama adalah Sewaka yang kemudian menjadi Gubernur Jawa Barat. Kemudian Kusnaeni menggantikannya. Bulan Desember 1946 diangkat Kosasih Purwanegara, tanpa pencabutan Kusnaeni dari jabatannya. Tak lama kemudian diangkat pula Mukmin sebagai wakil residen. Pada masa gerilya selama Agresi Militer Belanda I, residen tak pernah jauh meninggalkan Subang, sesuai dengan garis komando pusat. Bersama para pejuang, saat itu residen bermukim di daerah Songgom, Surian, dan Cimenteng. Tanggal 26 Oktober 1947 Residen Kosasih Purwanagara meninggalkan Subang dan pejabat Residen Mukmin yang meninggalkan Purwakarta tanggal 6 Februari 1948 tidak pernah mengirim berita ke wilayah perjuangannya. Hal ini mendorong diadakannya rapat pada tanggal 5 April 1948 di Cimanggu, Desa Cimenteng. Di bawah pimpinan Karlan, rapat memutuskan : 1.Wakil Residen Mukmin ditunjuk menjadi Residen yang berkedudukan di daerah gerilya Purwakarta. 2.Wilayah Karawang Timur menjadi Kabupaten Karawang Timur dengan bupati pertamanya Danta Gandawikarma. 3.Wilayah Karawang Barat menjadi Kabupaten Karawang Barat dengan bupati pertamanya Syafei. Wilayah Kabupaten Karawang Timur adalah wilayah Kabupaten Subang dan Kabupaten Purwakarta sekarang. Saat itu, kedua wilayah tersebut bernama Kabupaten Purwakarta dengan ibukotanya Subang. Penetapan nama Kabupaten Karawang Timur pada tanggal 5 April 1948 dijadikan momentum untuk kelahiran Kabupaten Subang yang kemudian ditetapkan melalui Keputusan DPRD No. : 01/SK/DPRD/1977.
                            </p>
                            
                            

                        </div> <!-- end grid-block-->
                    </div> <!-- end pagemain -->

            <!-- clients
            ----------------------------------------------- -->
            <section id="clients" class="s-clients">          
                                
                <div class="row s-clients__content-block width-sixteen-col">
                    <div class="column xl-12 testimonials">
                    
                        <div class="swiper-container testimonials__slider home-slider">

                            <div class="swiper-wrapper">
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                    
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{asset('storage')}}/assets/images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Alia Azizah Masykur</strong>
                                            <span>231351016</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                    
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{asset('storage')}}/assets/images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Andrew Carnegie</strong>
                                            <span>Carnegie Steel Co.</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                   
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{asset('storage')}}/assets/images/avatars/user-06.jpg" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>Henry Ford</strong>
                                            <span>Ford Motor Co.</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonials__slide swiper-slide">
                                    <p>
                                    
                                    </p>
                                    <div class="testimonials__author">
                                        <img src="{{asset('storage')}}/assets/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                                        <cite clas="testimonials__cite">
                                            <strong>John Morgan</strong>
                                            <span>JP Morgan & Co.</span>
                                        </cite>
                                    </div>
                                </div> 
                            </div> <!-- end swiper-wrapper --> 

                            <div class="swiper-pagination"></div>

                        </div> <!--end testimonials__slider -->                    
                    
                    </div> <!-- end column -->
                </div> <!-- end row -->


            </section>          

        </section> <!-- s-content-->

        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">

            <div class="row row-x-center text-center">
                <div class="column xl-8 lg-12">

                    <div class="s-cta__content">
                        <h2 class="text-display-title">
                        Motivasi Hari Ini
                        </h2>
                        <p class="lead">
                           " Ketika kamu memiliki keinginan atau tujuan di masa depan dan kamu tidak pernah berani untuk mengambil resiko, jangan pernah berharap apa yang kamu inginkan akan tercapai. "
                        </p>
                        <!-- <a href="contact.html" class="btn btn--primary">Let's Work Together</a> -->
                    </div>

                </div>
            </div>

        </section> <!-- end s-cta -->

        <!-- # journal
        ================================================== -->
    


        <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="row s-footer__content">
                <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">                    
                    <h3>About Monica</h3>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas illum quasi facere libero, 
                    fugiat laboriosam possimus reprehenderit eveniet vero voluptatum fugit ad quis veritatis suscipit beatae 
                    incidunt perferendis tempore earum hic repellendus quisquam recusandae ipsa id esse. Nobis, aut deleniti.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere ratione dignissimos.
                    </p>               
                </div>                
                <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
                    <h3>Site Links</h3>
                    <ul class="link-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Journal</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="https://www.dreamhost.com/r.cgi?287326">DreamHost</a></li>
                    </ul>
                </div>
                <div class="column xl-3 lg-6 md-12 tab-12 s-footer__block s-footer__newsletter">
                    <h3>Newsletter</h3>

                    <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere ratione dignissimos.
                    </p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Your Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                            <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary btn--small u-fullwidth">
                            <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                            <div class="mc-status"></div>
                        </form>
                    </div>
                </div>
            </div>    
            
            <div class="row s-footer__bottom">
                <div class="column xl-6 lg-12">
                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul> <!-- end s-footer__social -->
                </div>
                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright Monica 2022</span> 
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">ThemeWagon</a></span>
                    </p>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                    </a>
                </div> <!-- end ss-go-top -->
            </div>
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="{{asset('storage')}}/assets/js/plugins.js"></script>
    <script src="{{asset('storage')}}/assets/js/main.js"></script>

</body>
</html>