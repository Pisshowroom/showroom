@extends('clients.buyer.master')
@section('title', 'Syarat dan Ketentuan')
@section('more', 'actived')
@section('term', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.term') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Syarat dan Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto page-content">
                        <h2 class="text-center mb-20">Syarat dan Ketentuan</h2><img class="mb-30"
                            src="{{ asset('ecom/imgs/page/about/team.jpg') }}" alt="Ecom">
                        <p>Terima kasih telah mendukung Eco. Untuk melindungi data pribadi Anda saat Anda menikmati
                            penggunaan layanan di Ecom, kami menyusun kebijakan privasi ini.</p>
                        <h5>1. Pengumpulan Data Pribadi.</h5>
                        <p><strong>1.1 Definisi data pribadi</strong></p>
                        <p>Data pribadi berarti segala informasi yang berkaitan dengan
                            (&lsquo;subjek data&rsquo;) perorangan yang teridentifikasi atau dapat diidentifikasi ; orang
                            perseorangan yang dapat diidentifikasi adalah orang yang dapat diidentifikasi,
                            secara langsung atau tidak langsung, khususnya dengan mengacu pada suatu pengidentifikasi
                            seperti nama, nomor identifikasi, data lokasi. Data pribadi tidak mencakup data yang telah
                            dianonimkan atau dikumpulkan secara permanen sehingga tidak dapat lagi memungkinkan kami, baik
                            digabungkan dengan data lain informasi atau lainnya, untuk mengidentifikasi Anda..</p>
                        <p>Here is a description of the types of personal data we may collect and how we may use it:.</p>
                        <p><strong>1.2 Data Pribadi Apa yang Kami Kumpulkan</strong></p>
                        <p>Tergantung pada produk dan layanan yang Anda pilih, kami mengumpulkan berbagai jenis data pribadi
                            dari atau tentang Anda..</p>
                        <p><strong>(a) Data yang Anda berikan.</strong><span>Kami mengumpulkan data pribadi yang Anda
                                berikan saat Anda membuat akun untuk menggunakan produk dan layanan kami atau berinteraksi
                                dengan kami, seperti saat Anda mengisi informasi akun, berpartisipasi dalam survei online
                                atau operasi promosi kami, tinggalkan komentar tentang produk, dan gunakan bantuan online
                                atau alat obrolan online atau kirim email kepada kami.</span></p>
                        <p><strong>(b) Data dari peralatan terminal Anda.</strong></p>
                        <p><strong><span>Foto/Media/File.</span></strong></p>
                        <p><span></span>Setelah mendapatkan izin Anda, akses Foto/Media/File dapat mencakup kemampuan untuk:
                        </p><span><span>&#x2460; Baca konten penyimpanan USB Anda (seperti kartu
                                SD).</span></span><span><span>&#x2461; Tambahkan konten ke penyimpanan USB
                                Anda</span></span><span><span>&#x2462; Format penyimpanan
                                eksternal</span></span><span><span>&#x2463; Memasang atau melepas penyimpanan
                                eksternal</span></span>
                        <p><strong><span>Penyimpanan lokal.</span></strong></p>
                        <p><span></span>Kami dapat mengumpulkan dan menyimpan informasi (termasuk data pribadi) secara lokal
                            di perangkat Anda menggunakan mekanisme seperti penyimpanan web pemilik (termasuk HTML 5) dan
                            cache data aplikasi.</p>
                        <p><strong></strong><span>Kamera.</span>Anda dapat mengupload foto saat memberi komentar melalui
                            layanan online.
                            Dalam hal ini, kami perlu mengumpulkan gambar dan informasi lainnya dari perangkat Anda.</p>
                        <p>Nomor aplikasi unik. Layanan tertentu menyertakan nomor aplikasi unik. Nomor-nomor ini dan
                            informasi terkait tentang instalasi Anda (misalnya, jenis sistem operasi dan nomor versi
                            aplikasi) dapat dikirim ke situs web ketika Anda menginstal atau menghapus instalasi layanan
                            tersebut atau ketika layanan tersebut secara berkala menghubungi server kami (misalnya untuk
                            tujuan otomatis pembaruan).</p><strong> (c) Data tentang pembelian.</strong>
                        <p></p>Jika Anda melakukan pembelian, kami mengumpulkan data pribadi terkait pembelian tersebut
                        termasuk produk apa yang Anda beli, nomor transaksi, nama pengguna, alamat pengiriman, dan informasi
                        autentikasi lainnya, serta detail penagihan dan kontak .
                        <p>
                            (d) Data tentang peningkatan layanan dan produk kami.
                            Saat Anda mengunjungi situs web kami, kami dapat mengumpulkan data tentang jenis perangkat yang
                            Anda gunakan, pengidentifikasi unik perangkat Anda, alamat IP perangkat Anda, sistem operasi
                            Anda, jenis pemilik Internet yang Anda gunakan, informasi penggunaan, informasi diagnostik , dan
                            informasi lokasi dari atau tentang komputer, telepon, atau perangkat lain tempat Anda menginstal
                            atau mengakses produk atau layanan kami. Jika tersedia, layanan kami dapat menggunakan GPS,
                            alamat IP Anda, dan teknologi lainnya untuk menentukan perkiraan lokasi perangkat agar kami
                            dapat meningkatkan produk dan layanan kami.
                        </p>
                        <p><strong>1.3 Apa Sumber Data Pribadi Anda</strong></p>
                        <p>Dengan persetujuan tegas Anda sebelumnya, kami mengumpulkan data pribadi Anda:</p>
                        <p>(a) Dari Anda secara langsung diberikan sebagaimana dijelaskan di atas, termasuk informasi yang
                            dihasilkan saat Anda menggunakan layanan dan produk kami;</p>
                        <p>(b) Dari peralatan terminal Anda seperti dijelaskan di atas</p>
                        <p>(c) Dari mitra kami. Mereka adalah pihak ketiga seperti Google, Facebook, Twitter, VK, dll.
                            Ketika Anda masuk ke situs web kami melalui akun ini, kami dapat memperoleh informasi masuk Anda
                            secara otomatis karena pihak ketiga ini pihak sebelumnya telah memberi wewenang kepada kami
                            untuk mengumpulkan informasi Anda untuk membantu Anda masuk dengan nyaman.</p>
                        <p>(d) Dari Cookie dan Teknologi Serupa. Saat Anda mengunjungi situs web kami, kami secara otomatis
                            mengumpulkan informasi teknis seperti alamat IP Anda melalui cookie.</p>
                        <h5>2. Cara Kami Menggunakan Cookie dan Teknologi Serupa.</h5>
                        <p>Kami menggunakan cookie dan teknologi serupa untuk menyediakan, melindungi, dan meningkatkan
                            produk dan layanan kami, seperti dengan mempersonalisasi konten, menawarkan dan mengukur iklan,
                            memahami perilaku pengguna, dan memberikan pengalaman yang lebih aman. Anda dapat menghapus atau
                            menolak cookie menggunakan setelan pemilik atau perangkat, namun dalam beberapa kasus, hal
                            tersebut dapat memengaruhi kemampuan Anda untuk menggunakan produk dan layanan kami.</p>
                        <p><strong>2.1 Definisi &quot;Cookie&quot;</strong></p>
                        <p>Cookie adalah file teks kecil yang ditempatkan pada perangkat Anda oleh situs web yang Anda
                            miliki.
                            Cookie melakukan sejumlah tugas berbeda seperti mengingat preferensi dan item yang Anda pilih,
                            membantu Anda meningkatkan pengalaman situs Anda serta mencoba memastikan bahwa iklan atau
                            penawaran yang Anda lihat online lebih relevan bagi Anda. Cookies tidak berbahaya dan memiliki
                            fungsi penting untuk situs web. &ldquo;kue&rdquo; dapat dibedakan menjadi 4 jenis yang
                            masing-masing diuraikan di bawah ini..</p>
                        <p><strong>2.2 Jenis Cookie</strong></p>
                        <p> (a) Cookie yang Sangat Diperlukan.</p>
                        <p>Cookie ini penting bagi Anda untuk memiliki situs web kami dan menggunakan layanan mendasarnya,
                            seperti mengunjungi situs web kami atau melakukan pembelian.</p>
                        <p>Cookie ini tidak memerlukan persetujuan Anda. Jika Anda menonaktifkan cookie ini, kami tidak akan
                            dapat memenuhi permintaan dasar Anda.</p>
                        <p>
                            (b) Cookie Statistik.
                            Cookies ini mengumpulkan informasi anonim tentang cara orang menggunakan situs dan data tersebut
                            digabungkan dengan pengguna lain untuk memungkinkan kami meningkatkan cara situs beroperasi. Ini
                            termasuk cookie dari layanan analisis pihak ketiga yang ditujukan untuk penggunaan eksklusif
                            oleh pemilik dari pemilik. dari situs web yang dikunjungi. Misalnya, kami menggunakan cookie
                            Google Analytics untuk membantu kami memahami bagaimana pelanggan tiba di situs kami, memiliki
                            atau menggunakan situs kami, dan menyoroti area di mana kami dapat meningkatkan area seperti
                            navigasi, pengalaman berbelanja, dan kampanye pemasaran.
                        </p>
                        <p>Data yang disimpan oleh cookie ini tidak pernah menunjukkan detail pribadi yang dapat digunakan
                            untuk mengetahui identitas awal Anda. Jika Anda menonaktifkan atau memilih keluar dari cookie
                            ini, Anda mungkin tidak dapat menggunakan fitur tertentu dari situs web dan layanan kami, dan
                            mungkin mengurangi dukungan atau informasi yang dapat kami berikan kepada Anda.</p>
                        <p>
                            (c) Cookie Preferensi.
                            Cookies ini memungkinkan situs kami mengingat pilihan yang telah Anda buat mengenai preferensi
                            Anda, seperti bahasa apa yang Anda sukai, atau apa nama pengguna dan kata sandi Anda sehingga
                            Anda dapat masuk secara otomatis dan kami dapat memberi Anda layanan yang lebih baik dan
                            meningkatkan belanja kami pengalaman. Jika Anda menolak cookie ini, Anda mungkin merasa bahwa
                            efisiensi penggunaan web telah menurun.
                        </p>
                        <p>
                            (d) Cookie Pemasaran.
                            Cookie ini melacak informasi tentang kebiasaan Anda untuk merekomendasikan iklan yang lebih
                            dipersonalisasi untuk Anda. Cookies ini mungkin mengingat aktivitas online Anda dan/atau di
                            seluruh situs atau layanan online pihak ketiga, dan membaginya dengan pihak ketiga seperti
                            pengiklan.
                            Misalnya, dengan menempatkan cookie ini, Anda dapat berbagi halaman dan konten di situs web dan
                            layanan kami melalui jejaring sosial pihak ketiga dan situs web lainnya. Namun kami hanya akan
                            mengizinkan cookie pihak ketiga ditempatkan di situs web kami dengan izin tertulis dari Anda.
                            Untuk memahami cara pihak ketiga menggunakan cookie, harap tinjau kebijakan privasi mereka. Jika
                            Anda menolak cookie ini, Anda juga akan melihat iklan yang tidak terlalu relevan bagi Anda, yang
                            mungkin memengaruhi pengalaman berbelanja Anda.
                        </p>
                        <p><strong>2.3 Cara mengontrol setelan cookie Anda</strong></p>
                        <p>Saat Anda pertama kali memasuki situs web, kami akan meminta persetujuan Anda terhadap cookie
                            melalui spanduk cookie.
                            Anda dapat memilih jenis cookie yang sesuai dengan Anda. Harap diperhatikan bahwa jika Anda
                            memilih untuk menolak cookie, akses Anda ke fitur tertentu mungkin dibatasi.</p>
                        <p>Anda dapat menghapus atau menolak cookie menggunakan pengaturan pemilik atau perangkat Anda.
                            Sebagian besar pemilik web secara otomatis menerima cookie, namun Anda dapat mengubah pengaturan
                            pemilik dengan mengunjungi bagian Bantuan pada toolbar pemilik. Perangkat seluler Anda juga
                            memungkinkan Anda mengontrol cookie melalui pengaturannya. Untuk detail selengkapnya, lihat
                            petunjuk produsen perangkat.</p>
                        <p>Perlu disebutkan bahwa Anda mungkin perlu memilih ulang cookie di situs web kami setelah
                            membersihkan cache cookie.</p>
                        <p><strong>2.4 Teknologi serupa lainnya</strong></p>
                        <p>DPAPI (Antarmuka Pemrograman Aplikasi Perlindungan Data) adalah antarmuka pemrograman aplikasi
                            kriptografi sederhana yang tersedia sebagai komponen bawaan di Windows 2000 dan versi sistem
                            operasi Microsoft Windows yang lebih baru. Secara teori, API Perlindungan Data dapat
                            mengaktifkan enkripsi simetris untuk segala jenis data; dalam praktiknya, penggunaan utamanya
                            dalam sistem operasi Windows adalah untuk melakukan enkripsi simetris dari kunci pribadi
                            asimetris, menggunakan rahasia pengguna atau sistem sebagai kontribusi entropi yang signifikan.
                            DPAPI dapat membantu mencatat dan menyimpan data pengguna. data pribadi.Data Cube adalah
                            aplikasi sederhana untuk mencatat dan menganalisis data pribadi. Jika Anda memilih untuk menolak
                            cookie, seperti disebutkan di atas, Anda mungkin tidak dapat menggunakan fitur tertentu dari
                            situs web dan layanan kami..</p>
                        <p>
                            <kuat>3. Cara Kami Memproses Data Pribadi Anda</strong>
                        </p>
                        <p>Kecuali ditentukan lain oleh hukum, kami akan menggunakan data pribadi Anda dengan persetujuan
                            tegas Anda untuk tujuan yang ditentukan dalam kebijakan privasi ini sebagaimana dijelaskan di
                            bawah.</p>
                        <p>Jika Anda tidak ingin lagi menyetujui layanan yang kami sediakan di atas, silakan hubungi kami
                            untuk memilih tidak ikut serta atau mengatur hak Anda di Pusat Privasi Saya (jalur masuk
                            ditempatkan secara seragam di bagian bawah Kebijakan Privasi ini).</ hal>
                        <p><strong>3.1 Menyediakan, meningkatkan, dan mengembangkan produk dan layanan kami</strong></p>
                        <p>Kami dapat menggunakan data pribadi Anda untuk membantu kami menyediakan, meningkatkan, dan
                            mengembangkan produk dan layanan kami.
                            Hal ini mencakup penggunaan data pribadi untuk tujuan seperti membantu Anda melakukan registrasi
                            cepat di situs web kami, menyelesaikan proses belanja dengan fungsi pencarian dan kepemilikan
                            produk yang memuaskan, menggunakan fungsi pembayaran yang mudah digunakan, serta analisis data,
                            penelitian, dan audit. Pemrosesan tersebut adalah berdasarkan persetujuan tertulis Anda
                            sebelumnya atau kepentingan sah kami dalam menawarkan produk dan layanan kepada Anda.</p>
                        <p><strong>3.2 Berkomunikasi dengan Anda</strong></p>
                        <p>Saat Anda menghubungi kami, kami dapat menggunakan data pribadi Anda untuk berkomunikasi dengan
                            Anda tentang akun atau transaksi Anda, dan menanggapi permintaan Anda. Selain itu, kami dapat
                            segera memberi tahu Anda tentang kebijakan dan persyaratan kami jika ada perubahan.</p>
                        <p><strong>3.3 Menawarkan dan mengukur iklan dan layanan bertarget</strong></p>
                        <p>Tunduk pada persetujuan tegas Anda sebelumnya, kami akan menggunakan data pribadi Anda, termasuk
                            namun tidak terbatas pada perilaku seperti menelusuri, mengklik, memfavoritkan, atau menambahkan
                            ke keranjang belanja untuk memberi Anda produk dan layanan personalisasi berkualitas tinggi.
                            Khususnya, Anda dapat dengan cepat menemukan produk yang Anda butuhkan. Selain itu, Anda dapat
                            secara otomatis diberitahu tentang promosi dan pengurangan harga produk favorit Anda melalui
                            email, surat di tempat, atau cara wajar lainnya. Selain itu, kami dapat mentransfer data pribadi
                            Anda setelah dienkripsi ke pihak ketiga untuk periklanan dan pemasaran. Sebagai untuk rincian
                            pengolahan data pihak ketiga yang mungkin sampai ke data pribadi Anda, silakan baca pengenalan
                            Pihak Ketiga berikut ini. Anda bebas memilih apakah menerima informasi promosi atau tidak. Jika
                            Anda tidak ingin lagi menyetujui layanan di atas yang kami sediakan, Anda dapat memilih
                            &ldquo;berhenti berlangganan&rdquo; untuk memilih tidak ikut email tersebut atau hubungi kami
                            untuk membantu Anda..</p>
                        <p><strong>3.4 Pihak Ketiga yang mungkin memproses informasi Anda</strong></p>
                        <p><strong></strong>(a) Pihak ketiga yang terkait dengan Periklanan &amp;
                            Pemasaran&mdash;&mdash;Google, Facebook, Twitter, Amazon, Pinterest, Pelacak Perdagangan,
                            WhatsApp, Messenger, dll.</p>
                        <p>
                            Informasi tentang perilaku Anda di situs web kami, misalnya, produk apa yang ingin Anda miliki,
                            dapat ditransfer ke pihak ketiga ini dengan persetujuan tegas Anda. Anda mungkin menerima
                            informasi tentang periklanan dan pemasaran yang dikirimkan oleh kami dan/atau pihak ketiga
                            terpilih.
                            Kami dengan tulus menyarankan Anda untuk mempelajari kebijakan privasi pihak ketiga ini.
                            Anda mempunyai pilihan untuk tidak menerima informasi pemasaran dari kami dan/atau pihak ketiga
                            terpilih. Bila Anda tidak ingin lagi menerima iklan dari kami dan/atau pihak ketiga terpilih,
                            Anda dapat memilih untuk tidak ikut serta dengan mengklik tombol &quot;berhenti
                            berlangganan&quot; tautan dalam komunikasi email apa pun yang Anda terima selain menghubungi
                            kami atau mengatur hak Anda di Pusat Privasi Saya.
                        </p>
                        <p>(b)Pihak ketiga yang terkait dengan Pembayaran&amp; Pengiriman&mdash;&mdash;Paypal, Cybersource,
                            Adyen, Dlocal, Stripe, Safecharge, OceanPayment, dll.</p>
                        <p>Jika Anda melakukan pembelian dari kami, informasi pembayaran dan pengiriman Anda akan
                            diperlukan. Seperti
                            informasi akan ditransfer ke pihak ketiga di atas dan diproses oleh mereka. Misalnya, jika
                            Anda memilih untuk membayar secara online melalui &ldquo; Periksa dengan Paypal&rdquo;, harap
                            perhatikan
                            fakta bahwa setelah Anda mengeklik &ldquo;Lakukan Pemesanan&rdquo; , Anda akan ditautkan ke
                            situs web
                            Paypal.Data pribadi yang diminta untuk Anda berikan, termasuk nomor kartu Anda, tagihan Anda
                            alamat dan informasi kontak Anda, akan dikumpulkan dan diproses oleh Paypal
                            Ecom, meskipun merek/logo kami masih dapat dilihat di pojok kiri atas website tersebut.
                            lingkungan
                            tidak bertanggung jawab atas pemrosesan data Anda oleh Paypal ketika Anda mengklik tombol
                            &ldquo;Periksa
                            keluar dengan Paypal&rdquo;. Kami dengan tulus menyarankan Anda untuk mempelajari kebijakan
                            privasi ini
                            pihak ketiga dan tentukan pilihan Anda di antara berbagai pembayaran dengan hati-hati..</p>
                        <p>(c) Pihak ketiga lainnya yang mungkin memproses informasi Anda</p>
                        <p>Situs web kami mungkin berisi tautan ke dan dari situs web jaringan mitra kami, pengiklan, dan
                            pihak ketiga lainnya. Mereka mungkin mengumpulkan dan memproses data pribadi Anda jika Anda
                            mengikuti tautan ke
                            salah satu situs web ini. Harap dicatat bahwa mereka memiliki kebijakan privasi mereka sendiri
                            dan kami tidak membagikannya
                            informasi Anda dengan mereka kecuali izin Anda atau dasar hukum lainnya memberi wewenang kepada
                            kami untuk melakukannya.
                            Silakan periksa kebijakan ini sebelum Anda mengirimkan data pribadi apa pun ke situs web ini.
                            Kita seharusnya tidak melakukannya
                            bertanggung jawab atas data pribadi yang masing-masing disebabkan oleh situs web pihak ketiga
                            ini..</p>
                        <p><strong>3.5 Mempromosikan keselamatan dan keamanan</strong></p>
                        <p>Tunduk pada persetujuan tertulis Anda sebelumnya, kami mungkin menggunakan beberapa tindakan
                            teknologi untuk melindungi Anda
                            data pribadi untuk membantu memverifikasi akun dan aktivitas normal pengguna, serta untuk
                            mempromosikan data
                            keselamatan dan keamanan, seperti dengan memantau penipuan dan menyelidiki hal-hal yang
                            mencurigakan atau berpotensi terjadi
                            aktivitas ilegal atau pelanggaran terhadap ketentuan atau kebijakan kami. Pemrosesan tersebut
                            didasarkan pada kami
                            kepentingan sah dalam membantu memastikan keamanan produk dan layanan kami..</p>
                        <p><strong>3.6 Data Diproses Secara Global</strong></p>
                        <p>Kami menyediakan produk dan layanan kepada pelanggan di seluruh dunia dan mungkin data pribadi
                            Anda
                            ditransfer ke, dan disimpan di, tujuan di luar Wilayah Ekonomi Eropa
                            (“EEA”). Undang-undang perlindungan data berbeda-beda di setiap negara, dan beberapa negara
                            memberikan lebih banyak undang-undang
                            perlindungan dibandingkan yang lain. Di mana pun informasi Anda diproses, kami menerapkan hal
                            yang sama
                            perlindungan yang dijelaskan dalam kebijakan ini. Kita juga cukup mempertimbangkan tentang hukum
                            tertentu
                            kerangka kerja yang berkaitan dengan pemrosesan data..</p>
                        <p>Saat kami menyediakan produk dan layanan kepada pelanggan di bawah bantuan afiliasi, bisnis kami
                            mitra dan penyedia layanan…data pribadi Anda mungkin diproses di luar EEA. Sedemikian
                            dalam keadaan tertentu, kami akan memasukkan klausul kontrak model, atau mengandalkan dasar
                            hukum alternatif
                            seperti Perlindungan Privasi, jika berlaku, atau peraturan perusahaan yang mengikat yang telah
                            diadopsi oleh
                            mitra atau penyedia layanan kami. Perlindungan yang sesuai atau sesuai, misalnya enkripsi
                            teknologi, akan disediakan untuk menjamin keamanan informasi Anda. Anda berhak mendapatkannya
                            salinan data yang ditransfer ke negara ketiga. Jika Anda perlu menyadari hak-hak Anda, silakan
                            hubungi kami..</p>
                        <h5>4. Pengungkapan Data Pribadi.</h5>
                        <p>Kami menyediakan data pribadi tertentu kepada mitra strategis yang bekerja sama dengan kami untuk
                            menyediakan data pribadi kami
                            produk dan layanan atau membantu kami memasarkan kepada pelanggan. Data pribadi hanya akan kami
                            bagikan
                            dengan perusahaan-perusahaan ini untuk menyediakan atau meningkatkan produk, layanan, dan
                            periklanan kami; dia
                            tidak akan dibagikan kepada pihak ketiga untuk tujuan pemasaran mereka sendiri tanpa Anda
                            sebelumnya
                            persetujuan tegas.</p>
                        <p><strong>4.1 Penyedia Layanan</strong></p>
                        <p>Kami membagikan data pribadi dengan perusahaan yang menyediakan layanan atas nama kami, seperti
                            situs web
                            hosting, layanan pesan, verifikasi akun, pemasaran, mensponsori undian,
                            kontes, dan promosi lainnya, audit, pemenuhan pesanan pelanggan, analisis data, penyediaan
                            layanan pelanggan, dan melakukan riset pelanggan dan survei kepuasan. Perusahaan-perusahaan ini
                            adalah
                            berkewajiban untuk melindungi data Anda dan dapat berlokasi di mana pun kami beroperasi.</p>
                        <p><strong>4.2 Afiliasi Korporasi dan Transaksi Bisnis Korporasi</strong></p>
                        <p>Kami dapat membagikan data pribadi dengan perusahaan afiliasi dan mitra bisnis. Dalam hal a
                            merger, reorganisasi, akuisisi, usaha patungan, penugasan, pemisahan, pengalihan, atau penjualan
                            atau
                            disposisi seluruh atau sebagian bisnis kami, termasuk sehubungan dengan kebangkrutan
                            atau proses serupa, kami dapat mentransfer setiap dan seluruh data pribadi ke pihak ketiga
                            terkait.
                        </p>
                        <p><strong>4.3 Kepatuhan dan Keamanan Hukum</strong></p>
                        <p>Mungkin diperlukan&mdash;oleh hukum, proses hukum, litigasi, dan/atau permintaan dari masyarakat
                            dan
                            otoritas pemerintah di dalam atau di luar negara tempat tinggal Anda&mdash;untuk kami ungkapkan
                            data pribadi. Kami mungkin</p>
                        <p>juga mengungkapkan data pribadi jika kami menentukannya untuk tujuan keamanan nasional, hukum
                            penegakan hukum, atau masalah lain yang penting bagi publik, pengungkapan diperlukan atau
                            sesuai.</p>
                        <p>Kami juga dapat mengungkapkan data pribadi jika kami menentukan dengan itikad baik bahwa
                            pengungkapan tersebut wajar
                            diperlukan untuk melindungi hak-hak kami dan mengupayakan penyelesaian yang tersedia, menegakkan
                            syarat dan ketentuan kami,
                            menyelidiki penipuan, atau melindungi operasi atau pengguna kami.</p>
                        <p><strong>4.4 Dasar Hukum Pemrosesan Data Pribadi Penduduk EEA</strong></p>
                        <p>mungkin diperlukan&mdash;oleh hukum, proses hukum, litigasi, dan/atau permintaan dari otoritas
                            publik dan pemerintah di dalam atau di luar negara tempat tinggal Anda&mdash;agar kami dapat
                            mengungkapkan data pribadi. Kami juga dapat mengungkapkan data pribadi jika kami memutuskan
                            bahwa untuk tujuan keamanan nasional, penegakan hukum, atau masalah kepentingan publik lainnya,
                            pengungkapan tersebut diperlukan atau sesuai.</p>
                        <p>Jika Anda tinggal di Wilayah Ekonomi Eropa (EEA), pemrosesan data pribadi Anda oleh kami akan
                            dibenarkan jika salah satu ketentuan berikut dipenuhi:</p>
                        <p>(a) Kapan pun kami mendapatkan persetujuan Anda;</p>
                        <p>(b) Kapan pun pemrosesan data pribadi Anda diperlukan untuk pelaksanaan kontrak antara Anda dan
                            kami atau untuk mengambil langkah pra-kontrak apa pun atas permintaan Anda;</p>
                        <p>(c)Jika pemrosesan diperlukan bagi kami untuk mematuhi kewajiban hukum;</p>
                        <p>(d) Apabila pemrosesan diperlukan untuk tujuan kepentingan sah kami;</p>
                        <p>(e)Jika pemrosesan diperlukan karena alasan hukum dan wajar (dalam situasi ini kami akan
                            menjelaskan detailnya secara khusus).</p>
                        <h5>5. Bagaimana Kami Menyimpan Data Pribadi Anda.</h5>
                        <p>Kami mengambil langkah-langkah teknologi untuk memastikan catatan data pribadi Anda lengkap dan
                            akurat
                            seperti cookie dan teknologi serupa. Secara umum, berdasarkan persetujuan tegas Anda sebelumnya,
                            kami dapat melakukannya
                            simpan catatan pemrosesan data pribadi Anda oleh kami selama sepuluh tahun.</p>
                        <p>Jika Anda meminta agar data pribadi Anda tidak lagi disimpan, Anda dapat menghapus data pribadi
                            tertentu
                            melalui Pusat Privasi Saya atau hubungi kami untuk menghapusnya untuk Anda.</p>
                        <h5>6. Hak Anda</h5>
                        <p><strong>6.1Apa hak Anda</strong></p>
                        <p>Kami mengambil langkah-langkah yang wajar untuk memastikan bahwa data pribadi Anda akurat,
                            lengkap, dan
                            aman.Berdasarkan perlindungan data pribadi Anda&#xFF0C;Anda mempunyai hak berikut untuk
                            memperolehnya
                            dari kami:</p>
                        <p>(a) konfirmasi apakah data pribadi Anda sedang diproses atau tidak, dan di mana lokasinya
                            dalam hal ini, akses terhadap data dan informasi pribadi, termasuk namun tidak terbatas pada
                            tujuannya
                            pemrosesan dan kategori data pribadi terkait.</p>
                        <p>(b) memperbarui dan memperbaiki data pribadi Anda yang tidak akurat terkait. Dengan
                            mempertimbangkan
                            tujuan pemrosesan, Anda juga bebas untuk melengkapi data pribadi yang tidak lengkap,
                            termasuk dengan cara memberikan pernyataan tambahan.</p>
                        <p>(c) penghapusan data pribadi Anda yang berkaitan dengan situasi khusus Anda. Perlu dicatat bahwa
                            data yang dibagikan dengan pengguna lain (seperti publikasi ulasan) akan tetap terlihat oleh
                            publik di Platform, bahkan setelah Akun Pribadi Anda dihapus.</p>
                        <p>(d) pembatasan pemrosesan, yang membatasi otoritas pemrosesan kami.</p>
                        <p>(e) penerimaan data pribadi yang Anda berikan secara terstruktur, umum digunakan dan
                            format yang dapat dibaca mesin dan untuk mengirimkan data tersebut ke pihak ketiga.</p>
                        <p>(f) keluhan atas pemrosesan data pribadi jika Anda menganggap bahwa hak Anda belum dipenuhi
                            dihormati.</p>
                        <p>Anda berhak mengajukan keberatan atas dasar pemrosesan data pribadi. Anda juga bisa
                            kapan saja:</p>
                        <p>(a) menarik persetujuan Anda terhadap pengumpulan atau pemrosesan data Anda yang dilakukan oleh
                            kami untuk
                            tujuan periklanan perilaku, analisis utang, dan pengukuran audiens dengan menetapkan
                            cookie atau hak.</p>
                        <p>(b) menolak pemrosesan data Anda untuk tujuan pencarian calon pembeli dengan mengklik
                            &ldquo;berhenti berlangganan&rdquo; tautan di email promosi atau buletin kami.</p>
                        <p>(c) menolak keputusan yang hanya didasarkan pada pemrosesan otomatis, termasuk pembuatan profil,
                            yang mana
                            menimbulkan dampak hukum terhadap Anda atau berdampak signifikan terhadap Anda.</p>
                        <p>Jenis data pribadi ini sangat penting untuk aktivitas pembelian Anda sehingga kami sangat
                            menyarankannya
                            Anda harus berpikir dua kali ketika ingin menghapus atau menolak pemrosesan data tersebut.</p>
                        <p><strong>6.2 Cara menggunakan hak Anda</strong></p>
                        <p>Kami memberi Anda jalur berikut untuk menetapkan hak Anda. Anda dapat melakukannya kapan saja:
                        </p>
                        <p>(a) tetapkan persetujuan Anda terhadap cookie di spanduk cookie di halaman situs web, atau tarik
                            persetujuan Anda
                            menggunakan pengaturan pemilik atau perangkat Anda. Untuk detailnya, lihat klausul 2.3.</p>
                        <p>
                            (b) buka sendiri pengaturan hak Anda. Jalur pengaturannya adalah: Privasi Saya
                            Pusat,<br>khususnya Hak penghapusan akun Anda dapat dilaksanakan di Pengaturan akun kapan
                            menggunakan versi IOS.<br>Anda dapat mengubah pilihan di sana jika ingin mengaktifkan kembali
                            atau menonaktifkan a
                            izin tertentu.</p>
                        <p>(c)hubungi kami untuk mengajukan permintaan Anda. Kami akan menanggapi permintaan Anda dalam
                            waktu 30 hari untuk menanganinya
                            permintaan wajar Anda. Kecuali jika terdapat hukum atau peraturan yang berlaku
                            persyaratan mengizinkan atau mengharuskan kami untuk menolak memberikan atau menghapus sebagian
                            atau seluruh data pribadi
                            yang kami pertahankan, kami akan melakukan yang terbaik untuk menetapkan hak Anda sesuai dengan
                            kebutuhan Anda.In
                            Selain itu, harap diperhatikan bahwa penarikan persetujuan Anda tidak akan memengaruhi
                            pemrosesan
                            data pribadi mengandalkan persetujuan Anda sebelumnya.</p>
                        <p><strong>6.3 Pengaruh beberapa setelan hak</strong></p>
                        <p>Akan ada beberapa pengaruh jika Anda menghapus beberapa jenis data pribadi atau menolak
                            pemrosesan tertentu
                            data pribadi:</p>
                        <p>(a )Data pribadi untuk menyediakan, meningkatkan, dan mengembangkan produk dan layanan kami. Jika
                            ini
                            Jika jenis data terhapus atau keberatan untuk diolah, maka akan lebih sulit bagi kita untuk
                            melakukannya
                            mengoptimalkan produk atau layanan situs web, yang pastinya tidak kondusif untuk meningkatkan
                            kinerja Anda
                            pengalaman menggunakan situs web kami.</p>
                        <p>(b)Data pribadi yang kami gunakan untuk berkomunikasi dengan Anda. Jika data jenis ini dihapus
                            atau keberatan
                            untuk diproses, kami tidak dapat menghubungi Anda. Harap buat keputusan Anda dengan hati-hati.
                        </p>
                        <p>(c)Data pribadi untuk menawarkan dan mengukur iklan dan layanan yang ditargetkan. Jika jenis data
                            ini
                            dihapusatau keberatan untuk diproses, Anda tidak akan menerima berita pemasaran terbaru dan
                            layanan belanja yang dipersonalisasi. Iklan yang Anda terima tidak akan dikurangi
                            merekomendasikan secara acak kepada Anda, yang dapat memengaruhi pengalaman berbelanja Anda.</p>
                        <p>(d)Data pribadi yang berkaitan dengan peningkatan keselamatan dan keamanan. Jika jenis data ini
                            dihapus atau
                            keberatan untuk diproses, akun Anda akan diancam keras sehingga Anda tidak boleh menggunakan
                            akun Anda
                            akun secara normal.</p>
                        <p>Jika Anda menghapus data Anda, kami tidak berkewajiban untuk menyimpan data Anda, dan kami dapat
                            menghapus salah satu atau seluruhnya
                            data Anda tanpa tanggung jawab sejak saat itu. Namun, kami dapat menyimpan data yang terkait
                            dengan Anda jika kami
                            yakin bahwa hal ini mungkin diperlukan untuk mencegah penipuan atau penyalahgunaan di masa
                            depan, jika diwajibkan oleh hukum, atau untuk tujuan tersebut
                            tujuan yang sah, seperti analisis data non-pribadi, pemulihan akun, audit kami
                            catatan, dan menegakkan hak dan kewajiban kami berdasarkan perjanjian kami.</p>
                        <p></p>
                        <h5>Terima kasih.</h5>
                    </div>
                </div>
            </div>
        </section>

        @include('clients.buyer.layouts.benefit')
    </main>
@endsection
@push('importjs')
@endpush
