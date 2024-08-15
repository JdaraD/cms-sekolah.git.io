<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='shortcut icon' href="{{ asset('assets/icons/logo1.ico') }}">

        <title>Sekolah Mutiara Bunda</title>

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>

        {{-- Navbar --}}

        <div class="container">

            <div class="container-head">
                
                <div class="container-head-header">

                    <img src="{{ asset('assets/image/logo.png') }}" alt="">

                    <div class="container-head-header-list">
                        <ul class="list-menu">
                            <li>
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>

                            <li>
                            <a href="#">About Us</a>
                            </li>

                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">our school</a>
                                <div class="dropdown-content">
                                    <a href="#">Web Design</a>
                                    <a href="#">App Design</a>
                                    <a href="#">Graphic Design</a>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">news</a>
                                <div class="dropdown-content">
                                    <a href="#">Web Design</a>
                                    <a href="#">App Design</a>
                                    <a href="#">Graphic Design</a>
                                </div>
                            </li>

                            <li>
                                <a href="#">School Enrollment</a>
                            </li>

                            <li>
                                <a href="#">Event</a>
                            </li>

                            <li>
                                <a href="#">Contact Us</a>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>

        <div class="logo">
            <div class="container-logo">

                <img src="{{ asset('assets/image/facebook.png') }}" alt="">
                <img src="{{ asset('assets/image/youtube.png') }}" alt="">
                <img src="{{ asset('assets/image/instagram.png') }}" alt="">
            
            </div>
        </div>

        {{-- Navbar --}}

        {{-- sider --}}

        <div class="gallery">

            <div class="gallery-news">

                <div class="slides">
                    <!-- radio buttons starts -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <!-- radio buttons ends -->
    
                    <!-- images starts -->
                    <div class="slide first">
                        <img src="{{ asset('assets/image/you-could-be-here-1.jpg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('assets/image/Welcoming-School.jpg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('assets/image/Sekolah-Mutiara-Bunda-04.jpg') }}" alt="">
                    </div>
                    <!-- images ends -->
    
                    <!-- navigation starts -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                    <!-- navigation ends -->
                </div>
    
                <!-- navigation-manual start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
                <!-- navigation-manual ends -->
    
            </div>
        </div>

        {{-- sider --}}

         <!-- box menu -->

         <div class="container-menu">

            <div class="container-menu-box">
    
                <div class="menu">
    
                    <div class="box-menu1">

                        <img src="{{ asset('assets/image/icon-playschool.png') }}" alt="">

                        <div class="box-menu1-text">
                            <p>Mutiara Bunda</p>
                            <p>Playschool</p>
                            <a href=""><p><i class="btnmenu">TK/Playschool</i></P></a>
                        </div>
                        
                    </div>
    
                    <div class="box-menu2">
                        <img src="{{ asset('assets/image/icon-sd-mutiara-bunda.png') }}" alt="">

                        <div class="box-menu2-text">
                            <p>SD Mutiara Bunda</p>
                            <a href=""><p><i class="btnmenu">Primary School</i></p></a>
                        </div>
    
                    </div>
    
                    <div class="box-menu3">
                        <img src="{{ asset('assets/image/icon-smp-mutiara-bunda.png') }}" alt="">

                        <div class="box-menu3-text">
                            <p>SMP Mutiara Bunda</p>
                            <a href=""><p><i class="btnmenu">Primary School</i></P></a>
                        </div>
    
                    </div>
    
                    <div class="box-menu4">
                        <img src="{{ asset('assets/image/icon-sma-mutiara-bunda.png') }}" alt="">

                        <div class="box-menu4-text">
                            <p>SMA Mutiara Bunda</p>
                            <a href=""><p><i class="btnmenu">Primary School</i></P></a>
                        </div>
    
                    </div>
    
                </div>
                
            </div>
    
        </div>
        
        <!-- box menu -->

        <!-- Media -->

        <div class="container-media">

            <img src="{{ asset('assets/image/sekolah.jpg') }}" alt="">

            <div class="container-media-user">
                
                <div class="media-gambar">
                    <img src="{{ asset('assets/image/logo-sekolah.png') }}" alt="" class="image">
                    <p>Selamat Datang di </p>
                    <p>Sekolah Mutiara Bunda</p>

                </div>

                <div class="media-tulis">
                    <P>
                        Sekolah Inklusi Original Pertama dan Terbaik di Bandung
                    </P>

                    <P>Sekolah inklusif original pertama dan terbaik di Bandung yang terdiri atas jenjang Kelompok Bermain (Playgroup) – Taman Kanak-kanak (Kindergarten), Sekolah Dasar (SD), Sekolah Menengah Pertama (SMP), dan Sekolah Menengah Atas (SMA). Sejak berdiri pada tahun 1995 kami siap menjadi partner orang tua untuk mengembangkan seluruh potensi diri anak menjadi versi terbaik dirinya dengan landasan keimanan terhadap Allah SWT.</P>

                    <a href="#">Read More <i class="arrow right"></i></a>
                </div>

            </div>

        </div>

        <!-- Media -->

        <!-- pendaftaran -->


            <div class="pendaftaran-media">

                <div class="pendaftaran-gambar">

                    <img src="{{ asset('assets/image/SMA-Swasta-Terbaik-di-bandung.jpg') }}" alt="">

                </div>

                <div class="pendaftaran-background">

                    <img src="{{ asset('assets/image/Sekolah-Inklusi-Tebaik-di-Bandung-3.jpg') }}" alt="">

                    <div class="pendaftaran-text">

                        <p>Mengapa Pilih Mutiara Bunda?</p>

                        <p1>1. Buah hati adalah harta yang tak ternilai.</p1><br>

                        <p2>“Ya Tuhanku, berilah aku keturunan yang baik dari sisiMu. Sesungguhnya Engkau Maha Mendengar doa.” (QS. Ali Imran: 38) Sebagai harta tak ternilai yang dianugerahkan Allah SWT, setiap orang tua pasti berusaha untuk senantiasa mendoakan dan menjaga anak-anaknya dengan usaha terbaik yang bisa dilakukan.</p2><br>
                    
                        <button class="btn"><a href="#">Daftar Sekarang</a></button>
                    </div>
                    
                </div>
            </div>
        <!-- pedaftaran -->

        <!-- informasi -->
            
        <div class="containerig">

            <h1 class="main-title">DAPATKAN INFORMASI TERBARU</h1>

            <p class="subtitle">
              Ikuti kami di Instagram untuk memperoleh berbagai informasi terbaru dari
              Sekolah Mutiara Bunda
            </p>

            <div class="accounts">

              <div class="account">

                <img src="{{ asset('assets/image/logo1.png') }}" alt="Logo 1" class="logoig" />

                <p class="account-name">mutiarabundaplayschool</p>

                <div class="posts">
                  <img src="{{ asset('assets/image/post1.jpg') }}" alt="Post 1" />
                  <img src="{{ asset('assets/image/post2.jpg') }}" alt="Post 2" />
                  <img src="{{ asset('assets/image/post3.jpg') }}" alt="Post 3" />
                </div>

                <button class="follow-button">
                  <i class="fab fa-instagram"></i> Follow on Instagram
                </button>

              </div>

              <div class="account">

                <img src="{{ asset('assets/image/logo2.png') }}" alt="Logo 2" class="logoig" />
                <p class="account-name">sdmutiarabunda</p>

                <div class="posts">
                  <img src="{{ asset('assets/image/post4.jpg') }}" alt="Post 4" />
                  <img src="{{ asset('assets/image/post5.jpg') }}" alt="Post 5" />
                  <img src="{{ asset('assets/image/post6.jpg') }}" alt="Post 6" />
                </div>

                <button class="follow-button">
                  <i class="fab fa-instagram"></i> Follow on Instagram
                </button>

              </div>

              <div class="account">

                <img src="{{ asset('assets/image/logo3.png') }}" alt="Logo 3" class="logoig" />
                <p class="account-name">smpmutiarabunda</p>

                <div class="posts">
                  <img src="{{ asset('assets/image/post7.jpg') }}" alt="Post 7" />
                  <img src="{{ asset('assets/image/post8.jpg') }}" alt="Post 8" />
                  <img src="{{ asset('assets/image/post9.jpg') }}" alt="Post 9" />
                </div>

                <button class="follow-button">
                  <i class="fab fa-instagram"></i> Follow on Instagram
                </button>

              </div>

              <div class="account">
                <img src="{{ asset('assets/image/logo4.png') }}" alt="Logo 4" class="logoig" />
                <p class="account-name">smamutiarabunda</p>
                <div class="posts">
                  <img src="{{ asset('assets/image/post10.jpg') }}" alt="Post 10" />
                  <img src="{{ asset('assets/image/post11.jpg') }}" alt="Post 11" />
                  <img src="{{ asset('assets/image/post12.jpg') }}" alt="Post 12" />
                </div>

                <button class="follow-button">
                  <i class="fab fa-instagram"></i> Follow on Instagram
                </button>

              </div>

            </div>

          </div>
        <!-- informasi -->

        <!-- news -->

        <div class="news-section">

            <div class="news-header">
              <h1>Mutiara Bunda News and Events</h1>
              <a href="#" class="see-all">Lihat Semua</a>
            </div>

            <div class="news-container">

              <div class="news-card">

                <div class="news-image">

                  <img src="{{ asset('assets/image/meningkatkan-kepercayaan-diri-remaja.jpg') }}" alt="Berita 1" />
                  <div class="image-overlay">

                    <span class="overlay-text"
                      >UBSI Mengajar
                      <p>31 Januari 2024</p></span>

                  </div>

                </div>

                <div class="news-content">

                  <h2>
                    Stimulasi Minat dan Bakat untuk Meningkatkan Kepercayaan Diri
                    Remaja
                  </h2>
                  <p>Forum Silaturahmi PKLK SMP-SMA Mutiara Bunda</p>
                
                </div>

              </div>

              <div class="news-card">

                <div class="news-image">

                  <img src="{{ asset('assets/image/berbagi-kebaikan-bersama-anak-yatim-di-bulan-ramadhan.jpg') }}" alt="Berita 2" />
                  
                  <div class="image-overlay">

                    <span class="overlay-text">
                      UBSI Berbagi
                      <p>20 maret 2024</p></span>
                      
                  </div>

                </div>

                <div class="news-content">

                  <h2>Berbagi Kebaikan Bersama Anak Yatim di Bulan Ramadhan</h2>
                  <p>We Do Care Programme SMP Mutiara Bunda</p>
                
                </div>

              </div>

              <div class="news-card">

                <div class="news-image">

                  <img src="{{ asset('assets/image/Studi-Ekskursi3.jpg') }}" alt="Berita 3" />
                  <div class="image-overlay">

                    <span class="overlay-text">
                      PM UBSI Ciputat
                      <p>2 Juni 2024</p></span>

                  </div>

                </div>

                <div class="news-content">

                  <h2>
                    Studi Ekskursi, Pengalaman Menaiki Angkutan Umum Pertama Kalinya
                  </h2>
                  <p>Program Sekolah SMP Mutiara Bunda</p>

                </div>

              </div>

            </div>

            <div class="see-more-container">

              <button class="see-more-button">Lihat Lainnya</button>
            
            </div>

          </div>
        <!-- news -->

        <!-- testimoni -->

        <section class="testimonials">

            <h2>Apa Kata Mereka Tentang Mutiara Bunda?</h2>

            <div class="testimonial-container">

              <div class="testimonial">

                <img src="{{ asset('assets/image/Ayah-Bayu-Bunda-Zzahra-Ortu-Malik-Mika-Kalla-300x298.png') }}" alt="Ayah Bayu & Bunda Zahra" />
                <h3>AYAH BAYU & BUNDA ZAHRA</h3>
                <p class="role">Orang Tua Siswa SMP</p>
                <p class="comment">
                  Bersyukur sekali Malik bisa sekolah di SMP Mutiara Bunda, secara
                  adab dan agamanya semakin bagus, semakin baik. Juga kita berharap
                  Malik bisa terus berkembang dan menemukan potensinya, karena akan
                  melanjutkan di SMA Mutiara Bunda.
                </p>

              </div>

              <div class="testimonial">

                <img src="{{ asset('assets/image/Ayah-Firman-300x300.png') }}" alt="Ayah Firman Siagian" />
                <h3>AYAH FIRMAN SIAGIAN</h3>
                <p class="role">Orang Tua Siswa SD</p>
                <p class="comment">
                  Anak saya sekolah di sini dua orang, kelas 2 dan kelas 5, sepertinya
                  saya mau nyekolahin anak saya sampai SMA. Karena Komplit, buktinya
                  anak saya ngaji jago, sholatnya rajin, tapi bahasa inggrisnya juga
                  oke. Jadi, saya senang banget menyekolahkan anak saya di SD Mutiara
                  Bunda.
                </p>

              </div>

              <div class="testimonial">

                <img src="{{ asset('assets/image/Bunda-Derry-Ortu-Carissa-Playschhol-300x300.png') }}" alt="Bunda Derry" />
                <h3>BUNDA DERRY</h3>
                <p class="role">Orang Tua Siswa Playschool</p>
                <p class="comment">
                  Perkembangan Carissa sudah semakin membaik, karena Carissa dari
                  mulai PG, KA, KB, semuanya di Mutiara Bunda. Jadi, tahu banget
                  dengan perkembangannya. Alhamdulillahnya sekarang sudah jauh lebih
                  membaik, semuanya dari berbagai aspek.
                </p>

              </div>

            </div>

            <button class="testimoni-button">Testimoni Lainnya</button>

          </section>

        <!-- testimoni -->

        <!-- video -->

        <section class="video-section">

            <div class="video-wrapper">

              <video
                id="myVideo"
                src="video.mp4"
                poster="{{ asset('assets/image/background-video.jpg') }}"
                controls
                style="display: none">
                </video>
                <img
                src="{{ asset('assets/image/SMA-Swasta-Terbaik-di-Bandung-01.jpg') }}"
                alt="Background Video"
                id="videoImage"/>
              <div class="play-icon" onclick="playVideo()">&#9658;</div>
              <div class="video-title">Judul Video</div>
            </div>
          </section>

        <!-- video -->

        <!-- tabs -->

        <div class="tab-container">
            <div class="tabs">
              <button class="tab-link active" onclick="openTab(event, 'admission')">
                Online Admission
              </button>
              <button class="tab-link" onclick="openTab(event, 'contact')">
                Contact Us
              </button>
              <button class="tab-link" onclick="openTab(event, 'foto')">Foto</button>
              <button class="tab-link" onclick="openTab(event, 'video')">
                Video
              </button>
            </div>
      
            <div class="tab-content" id="admission">
              <div class="card-admission">
                <img
                  src="{{ asset('assets/image/Online-Admission.jpg') }}"
                  alt="Online Admission"
                  class="admission-image"
                />
                <div class="admission-content">
                  <p>
                    Kami tunggu Ayah Bunda dan anak-anak di Sekolah Mutiara Bunda dan
                    bergabung dalam keseruan keluarga besar kami sebagai Mutbunders!
                  </p>
                  <button class="cta-button">Daftar Sekarang</button>
                </div>
              </div>
            </div>
      
            <div class="tab-content" id="contact" style="display: none">
              <div class="card-admission">
                <img
                  src="{{ asset('assets/image/skul.png') }}"
                  alt="Online Admission"
                  class="admission-image"
                />
                <div class="admission-content">
                  <p>Hubungi Kami Di</p>
                  <button class="cta-button">whatsapp</button>
                </div>
                <p>Hubungi Kami Di</p>
              </div>
            </div>
      
            <div class="tab-content" id="foto" style="display: none">
              <div class="card-admission">
                <img
                  src="{{ asset('assets/image/Online-Admission.jpg') }}"
                  alt="Online Admission"
                  class="admission-image"
                />
                <div class="admission-content">
                  <p>
                    Kami tunggu Ayah Bunda dan anak-anak di Sekolah Mutiara Bunda dan
                    bergabung dalam keseruan keluarga besar kami sebagai Mutbunders!
                  </p>
                  <button class="cta-button">Daftar Sekarang</button>
                </div>
              </div>
            </div>
      
            <div class="tab-content" id="video" style="display: none">
              <div class="card-admission">
                <img
                  src="{{ asset('assets/image/Online-Admission.jpg') }}"
                  alt="Online Admission"
                  class="admission-image"
                />
                <div class="admission-content">
                  <p>
                    Kami tunggu Ayah Bunda dan anak-anak di Sekolah Mutiara Bunda dan
                    bergabung dalam keseruan keluarga besar kami sebagai Mutbunders!
                  </p>
                  <button class="cta-button">Daftar Sekarang</button>
                </div>
              </div>
            </div>
          </div>

        <!-- tabs -->

        <!-- pesan -->

        <div class="containers">
            <div class="logo1">
              <img src="{{ asset('assets/image/faf.png') }}" alt="Logo New Mut Bun" />
            </div>
            <div class="info">
              <h2>Grup Sekolah Mutiara Bunda</h2>
              <hr />
              <p>Kantor Pusat: Jl Padang Golf No. 11, Arcamanik, Bandung</p>
              <p>Hp/WA: +62 811-2344-828</p>
              <p>
                Email:
                <a href="mailto:humas@sekolahmutiarabunda.com"
                  >humas@sekolahmutiarabunda.com</a>
              </p>
            </div>
            <div class="newsletter">
              <h2>Newsletter</h2>
              <form>
                <input type="email" placeholder="Email" />
                <button type="submit">Submit</button>
              </form>
            </div>
          </div>
          <div class="chat-button">
            <button>Chat</button>
          </div>

        <!-- pesan -->

        <script src="{{ asset('assets/js/settings.js')}}"></script>
    </body>
</html>
