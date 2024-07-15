<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Struktur - Kabupaten</title>

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
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="/" : active="request()->routeIs('index')">
                            <img src="{{asset('storage')}}/assets/images/logo.svg" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
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

               <section class="s-pageheader pageheader">
                    <div class="row">
                        <div class="column xl-12">
                            <h2 class="page-title">
                                Struktur<br>
                                Pemerintahan
                            </h2>
                            
                        </div>
                    </div>
               </section> <!-- end pageheader --> 

               <section class="s-testimonials">

<div class="s-testimonials__header row row-x-center text-center">
    <div class="column xl-8 lg-12">

        <p class="text-pretitle">
        Testimonials
        </p>
        <h3>
        Pemimpin Daerah
        </h3>                        

    </div>
</div> <!--end s-testimonials__header -->

<div class="row s-testimonials__content">
    <div class="column xl-12 testimonials">

        <div class="swiper-container testimonials__slider page-slider">

            <div class="swiper-wrapper">
                <div class="testimonials__slide swiper-slide">
                    <div class="testimonials__author">
                        <img src="{{asset('storage')}}/assets/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <cite class="testimonials__cite">
                            <strong>Dr. Drs. Imran, M.Si.,MA.Cd</strong>
                            <span>Pj. Bupati Subang</span>
                        </cite>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container testimonials__slider page-slider">

            <div class="swiper-wrapper">
                <div class="testimonials__slide swiper-slide">
                    <div class="testimonials__author">
                        <img src="{{asset('storage')}}/assets/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <cite class="testimonials__cite">
                            <strong>H. Asep Nuroni, S.Sos.,M.Si</strong>
                            <span>Sekertaris Daerah</span>
                        </cite>
                    </div>
                </div>
            </div>
        </div> <!-- end swiper-wrapper --> 
        <div class="swiper-container testimonials__slider page-slider">

            <div class="swiper-wrapper">
                <div class="testimonials__slide swiper-slide">
                    <div class="testimonials__author">
                        <img src="{{asset('storage')}}/assets/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <cite class="testimonials__cite">
                            <strong>Plt. H. Enang Supriatna</strong>
                            <span>Sekretaris Dewan Perwakilan Rakyat</span>
                        </cite>
                    </div>
                </div>
            </div>
        </div> <!-- end swiper-wrapper --> 

            <div class="swiper-pagination"></div>

        </div> <!--end testimonials__slider --> 

    </div> <!-- testimonials -->
</div> <!--end s-testimonials__content -->

</section> <!-- end s-testimonials -->


               <section class="s-pagecontent pagecontent">

                    <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                            <h2 class="text-display-title">Visi dan Misi</h2>
                        </div>
                        <div class="column xl-6 lg-12 u-flexitem-x-right">
                        <p class="attention-getter">
                            Visi<br>
                            “Kabupaten Subang Yang Bersih, Maju, Sejahtera  dan Berkarakter”    
                            </p>

                            <p class="attention-getter">
                            Misi<br>
                            1.    Mewujudkan pemerintahan yang bersih dari korupsi, kolusi dan nepotisme, terbuka, serta pelayanan masyarakat;<br>
                            2.    Meningkatkan Pembangunan Infrastruktur, penataan ruang berkarakter kebudayaan lokal dan pemerataan pembangunan perdesaan;<br>
                            3.    Meningkatkan kualitas pendidikan untuk menciptakan sumber daya manusia yang handal dan berdaya saing serta perluasan lapangan kerja;<br>
                            4.    Meningkatnya kesejahteraan masyarakat melalui pembangunan bidang pertanian, ekonomi kerakyatan, industri kreatif, perikanan dan kelautan, serta pengalian potensi berbasis budaya dan kearifan lokal;<br>
                            5.    Meningkatkan kualitas layanan kesehatan masyarakat dan lingkungan hidup.
                            </p>
                        </div>                       
                    </div> <!-- end pageintro -->   
                    
                    <div class="row pagemedia">
                        <d class="column xl-12">
                            <figure class="page-media">                                
                                <img src="{{asset('storage')}}/assets/images/thumbs/about/about-1200.jpg" 
                                     srcset="images/thumbs/about/about-2400.jpg 2400w, 
                                             images/thumbs/about/about-1200.jpg 1200w, 
                                             images/thumbs/about/about-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                            </figure>
                        </d>
                    </div> <!-- end pagemedia -->

                    <div class="row width-narrower pagemain">
                        <div class="column xl-12"> 

                            <h2>DASAR HUKUM</h2>
                            <p>
                            1. Undang-Undang Nomor 14 Tahun 1950 tentang Pembentukan Daerah-Daerah Kabupaten Dalam Lingkungan Propinsi Djawa Barat (Berita Negara Republik Indonesia Tahun 1950),
                             sebagaimana telah diubah dengan Undang-Undang Nomor 4 Tahun 1968, tentang Pembentukan Kabupaten Purwakarta dan Kabupaten Subang, dengan Mengubah Undang[1]Undang
                              Nomor 14 Tahun 1950 tentang Pembentukan Daerah-Daerah Dalam Lingkungan Propinsi Djawa Barat (Lembaran Negara Republik Indonesia Tahun 1968 Nomor 31, Tambahan Lembaran
                               Negara Republik Indonesia Nomor 2851);
                            </p>
                            <p>
                            2.  Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara ( Lembaran Negara Republik Indonesia Tahun 2014 Nomor 6, Tambahan Lembaran Negara Republik Indonesia Nomor 5494);
                            </p>
                            <p>
                            3.  Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 244, Tambahan Lembaran Negara Republik Indonesia Nomor 5587), 
                            sebagaimana telah diubah beberapa kali, terakhir dengan Undang-Undang Nomor 9 Tahun 2015 tentang Perubahan Kedua Atas Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah 
                            (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 58, Tambahan Lembaran Negara Republik Indonesia Tahun 2015 Nomor 5679);
                            </p>
                            <p>
                            4.  Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah (Lembaran Negara Republik Indonesia Tahun 2016 Nomor 114, Tambahan Lembaran Negara Republik Indonesia Nomor 5887),
                             sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 72 Tahun 2019 tentang Perubahan Atas Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah (Lembaran Negara Republik
                              Indonesia Tahun 2019 Nomor 187, Tambahan Lembaran Negara Republik Indonesia Nomor 6402);
                            </p>
                            <p>
                            5.  Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2017 Nomor 63, Tambahan Lembaran Negara Republik Indonesia Nomor 6037), 
                            sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 17 Tahun 2020 tentang Perubahan Atas Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik
                             Indonesia Tahun 2020 Nomor 68, Tambahan Lembaran Negara Republik Indonesia Nomor 6477);
                            </p>
                            <p>
                            6.  Peraturan Menteri Dalam Negeri Nomor 56 Tahun 2019 tentang Pedoman Nomenklatur dan Unit Kerja Sekretariat Daerah Provinsi dan Kabupaten/Kota;
                            </p>
                            <p>
                            7.  Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 17 Tahun 2021 tentang Penyetaraan Jabatan Administrasi ke Dalam 
                            Jabatan Fungsional (Berita Negara Republik Indonesia Tahun 2021 Nomor 525);
                            </p>
                            <p>
                            8.  Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 25 Tahun 2021 tentang Penyederhanaan Struktur Organisasi Pada Instansi
                             Pemerintah untuk Penyederhanaan Birokrasi (Berita Negara Republik Indonesia Tahun 2021 Nomor 546);
                            </p>
                            <p>
                            9.  Peraturan Daerah Kabupaten Subang Nomor 7 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Subang (Lembaran Daerah Kabupaten Subang
                             Tahun 2016 Nomor 7), sebagaimana telah diubah beberapa kali terakhir dengan Peraturan Daerah Kabupaten Subang Nomor 1 Tahun 2021 tentang Perubahan Ketiga Atas 
                             Peraturan Daerah Kabupaten Subang Nomor 7 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Subang (Lembaran Daerah Kabupaten Subang Tahun 2021 Nomor 1);
                            </p>
                            <p>
                            10.  Peraturan Bupati Subang Nomor 98 Tahun 2021 tentang Susunan Organisasi Perangkat Daerah Sekretariat Daerah (Berita Daerah Kabupaten Subang Tahun 2021 Nomor 98);
                            </p>

                            <h2 class="u-add-bottom">TUGAS POKOK</h2>

                            <div class="grid-list-items list-items">
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">FUNGSI</h6>
                                    </div>
                                    <p> 1.   Penyusunan kebijakan pemerintahan daerah;</p><br>
                                    <p> 2.   Pengkoordinasian pelaksanaan tugas perangkat daerah;</p><br>
                                    <p>3.   Pemantauan dan evaluasi pelaksanaan kebijakan pemerintahan daerah;</p><br>
                                    <p> 4.   Pembinaan administrasi dan aparatur pemerintahan daerah;</p><br>
                                    <p> 5.   Pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya;</p><br>
                                    <p> 6.   Penyampaian telaahan staf sebagai bahan pertimbangan pengambilan kebijakan Kepala Daerah.</p><br>
                                </div>
                            </div> <!--grid-list-items -->

                            

                        </div> <!-- end grid-block-->
                    </div> <!-- end pagemain -->

               </section> <!-- pagecontent -->

               <section class="s-testimonials">

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
        
                            <p class="text-pretitle">
                            Kelompok
                            </p>
                            <h3>
                            WebSite Kabupaten
                            </h3>                        
        
                        </div>
                    </div> <!--end s-testimonials__header -->

                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        
                                        <div class="testimonials__author">
                                            <img src="{{asset('storage')}}/assets/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>John Rockefeller</strong>
                                                <span>Standard Oil Co.</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                        
                                        <div class="testimonials__author">
                                            <img src="{{asset('storage')}}/assets/images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Andrew Carnegie</strong>
                                                <span>Carnegie Steel Co.</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                        
                                        <div class="testimonials__author">
                                            <img src="{{asset('storage')}}/assets/images/avatars/user-06.jpg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Henry Ford</strong>
                                                <span>Ford Motor Co.</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                       
                                        <div class="testimonials__author">
                                            <img src="{{asset('storage')}}/assets/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>John Morgan</strong>
                                                <span>JP Morgan & Co.</span>
                                            </cite>
                                        </div>
                                    </div> 
                                </div> <!-- end swiper-wrapper --> 

                                <div class="swiper-pagination"></div>

                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

               </section> <!-- end s-testimonials -->

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