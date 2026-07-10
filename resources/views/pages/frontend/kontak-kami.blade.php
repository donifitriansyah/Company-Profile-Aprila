@extends('layouts.frontend')
@section('title')
    Kontak Kami
@endsection
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top"
        style="background-image: url('{{ asset('frontend/assets/img/bg-2.png') }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Kontak Kami</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Kontak</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <style>
        /* Base card style */
        .single_address {
            padding: 30px 20px;
            border-radius: 12px;
            color: #fff;
            transition: 0.3s ease;
        }

        /* LOCATION */
        .sa_one {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        /* WHATSAPP */
        .sa_two {
            background: linear-gradient(135deg, #25D366, #128C7E);
        }

        /* EMAIL */
        .sa_three {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
        }

        /* Icon style */
        .single_address i {
            font-size: 30px;
            margin-bottom: 10px;
            display: inline-block;
        }

        /* Hover effect */
        .single_address:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Link color */
        .single_address a {
            color: #fff;
            text-decoration: none;
        }

        .single_address a:hover {
            text-decoration: underline;
        }

        .branch-item {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            cursor: pointer;
            transition: .3s;
            border: 1px solid #eee;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .06);
        }

        .branch-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, .12);
        }

        .branch-item.active {
            background: #525fe1;
            color: #fff;
        }

        .branch-item.active a {
            color: #fff;
        }

        .branch-item h5 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .branch-item p {
            margin-bottom: 8px;
        }

        .contact-card {
            background: #fff;
            border-radius: 18px;
            padding: 35px 30px;
            height: 100%;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
            transition: .3s;
            text-align: center;
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
        }

        .contact-icon {
            width: 75px;
            height: 75px;
            margin: auto;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 20px;
            color: #fff;
        }

        .whatsapp .contact-icon {
            background: #25D366;
        }

        .email .contact-icon {
            background: #ff6b35;
        }

        .office .contact-icon {
            background: #525fe1;
        }

        .contact-card h4 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-list li {
            margin-bottom: 15px;
            line-height: 1.7;
        }

        .contact-list a {
            color: #333;
            text-decoration: none;
            transition: .3s;
        }

        .contact-list a:hover {
            color: #25D366;
        }
    </style>

    <section class="contact-info section-padding">
        <div class="container">

            <div class="section-title text-center mb-5">
                <h2>Hubungi Kami</h2>
                <p>Kami siap membantu Anda mendapatkan informasi mengenai layanan pendidikan, pelatihan, dan konsultasi.</p>
            </div>

            <div class="row g-4">

                <!-- WhatsApp -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card whatsapp">

                        <div class="contact-icon">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>

                        <h4>WhatsApp</h4>

                        <ul class="contact-list">
                            <li>
                                <strong>Yayasan Aprila</strong><br>
                                <a href="https://wa.me/628996567234" target="_blank">
                                    +62 899 6567 234
                                </a>
                            </li>

                            <li>
                                <strong>Klinik Bisnis Aprila</strong><br>
                                <a href="https://wa.me/628999636234" target="_blank">
                                    +62 899 9636 234
                                </a>
                            </li>

                            <li>
                                <strong>Aprila Production</strong><br>
                                <a href="https://wa.me/628999567234" target="_blank">
                                    +62 899 9567 234
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- Email -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card email">

                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <h4>Email</h4>

                        <ul class="contact-list">
                            <li>
                                <a href="mailto:aprilaindonesia@gmail.com">
                                    aprilaindonesia@gmail.com
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>

                <!-- Jam Operasional -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card office">

                        <div class="contact-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>

                        <h4>Jam Operasional</h4>

                        <ul class="contact-list">
                            <li>Senin - Sabtu</li>
                            <li>08.00 - 17.00 WIB</li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- START ADDRESS -->
    <section class="address_area section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">

                    <div class="branch-list">

                        <div class="branch-item active"
                            data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8149970890236!2d109.30180999999999!3d-0.0739508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5b358c0f9b5f%3A0xbc8f8a8a84e1edef!2sAprila%20Indonesia!5e0!3m2!1sid!2sid!4v1783504706169!5m2!1sid!2sid">

                            <h5>📍Aprila Kubu Raya</h5>
                            <p>Jalan Perdamaian, Gg. Soja Lestari Ruko Nomor 9, Pal Sembilan, Kec. Sungai Kakap, Kabupaten
                                Kubu Raya, Kalimantan Barat 78381</p>

                        </div>

                        <div class="branch-item"
                            data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816678429246!2d109.33791699999999!3d-0.05198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59eda3da791d%3A0xe3dd0ac06373fca0!2sLembaga%20Pendidikan%20%26%20Kursus%20Aprila%20Cabang%20Kota%20Pontianak!5e0!3m2!1sid!2sid!4v1783504175350!5m2!1sid!2sid">

                            <h5>📍 Aprila Pontianak</h5>
                            <p>Jl. Karya Baru Gg. Karya Baru Tengah No.7, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak,
                                Kalimantan Barat 78121</p>

                        </div>

                        <div class="branch-item" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6706.5791394426415!2d109.97289495866576!3d-1.8423719982006612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e051842cf6007cf%3A0xcba454a39d4024e8!2sJl.%20RM%20Sudiono%20No.3%2C%20Tengah%2C%20Kec.%20Delta%20Pawan%2C%20Kabupaten%20Ketapang%2C%20Kalimantan%20Barat%2078811!5e0!3m2!1sid!2sid!4v1783504954890!5m2!1sid!2sid">

                            <h5>📍 Aprila Ketapang</h5>
                            <p>Jl. RM Sudiono No.3, Tengah, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78811</p>

                        </div>

                        <div class="branch-item" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.7379927190395!2d109.9935588!3d-1.8503156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e051820c25d1aad%3A0xcf500f23c82701e5!2sJl.%20Pangeran%20Kusuma%20Jaya%2C%20Mulia%20Kerta%2C%20Kec.%20Benua%20Kayong%2C%20Kabupaten%20Ketapang%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1783505051848!5m2!1sid!2sid">

                            <h5>📍 Aprila Ketapang</h5>
                            <p>Jl. Pangeran Kusuma Jaya, Mulia Kerta, Kec. Benua Kayong, Kabupaten Ketapang, Kalimantan Barat</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-8">

                    <iframe id="branchMap"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8149970890236!2d109.30180999999999!3d-0.0739508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5b358c0f9b5f%3A0xbc8f8a8a84e1edef!2sAprila%20Indonesia!5e0!3m2!1sid!2sid!4v1783504706169!5m2!1sid!2sid"
                        width="100%" height="550" style="border:0;border-radius:15px" loading="lazy">
                    </iframe>

                </div>

            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END ADDRESS -->


    <!-- END CONTACT -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const items = document.querySelectorAll('.branch-item');
            const map = document.getElementById('branchMap');

            items.forEach(function(item) {

                item.addEventListener('click', function() {

                    items.forEach(i => i.classList.remove('active'));

                    this.classList.add('active');

                    map.src = this.dataset.map;

                });

            });

        });
    </script>
@endsection
