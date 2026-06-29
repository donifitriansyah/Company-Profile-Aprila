@extends('layouts.frontend')
@section('title')
    Tentang Kami
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
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* Link color */
.single_address a {
    color: #fff;
    text-decoration: none;
}

.single_address a:hover {
    text-decoration: underline;
}
    </style>

    <!-- START ADDRESS -->
    <section class="address_area section-padding">
        <div class="container">
            <div class="row text-center">

                <!-- LOCATION -->
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="single_address sa_one">
                        <i class="ti-map"></i>
                        <h4>Lokasi</h4>
                        <p>Jl. Karya Baru Gg. Karya Baru Tengah No.7, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak,
                            Kalimantan Barat 78121</p>
                    </div>
                </div>

                <!-- WHATSAPP -->
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="single_address sa_two">
                        <i class="ti-comments"></i>
                        <h4>WhatsApp</h4>
                        <p>
                            <a href="https://wa.me/628999636234?text=Halo%20Klinik%20Bisnis%20Aprila%2C%20saya%20ingin%20bertanya"
                                target="_blank">
                                +62 899 9636 234 (Klinik Bisnis Aprila)
                            </a>

                        </p>
                        <p>
                            <a href="https://wa.me/628996567234?text=Halo%20Yayasan%20Aprila%2C%20saya%20ingin%20bertanya"
                                target="_blank">
                                +62 899 6567 234 (Yayasan Aprila - PKBM - LKP - LPK)
                            </a>

                        </p>
                        <p>
                            <a href="https://wa.me/628999636234?text=Halo%20Klinik%20Bisnis%20Aprila%2C%20saya%20ingin%20bertanya"
                                target="_blank">
                                +62 899 9636 234 (Klinik Bisnis Aprila)
                            </a>
                        </p>
                        <p>
                            <a href="https://wa.me/628999567234?text=Halo%20Aprila%20Production%2C%20saya%20ingin%20bertanya"
                                target="_blank">
                                +62 899 9567 234 (Aprila Production)
                            </a>

                        </p>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s" data-wow-offset="0">
                    <div class="single_address sa_three">
                        <i class="ti-email"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:aprilaindonesia@gmail.com">aprilaindonesia@gmail.com</a></p>
                    </div>
                </div>

            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END ADDRESS -->

    <!-- CONTACT -->
    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="contact">
                        <form class="form" name="enq" method="post" action="contact.php"
                            onsubmit="return validation();">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Subjek</label>
                                    <input type="text" name="subject" class="form-control" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Pesan</label>
                                    <textarea rows="6" name="message" class="form-control" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" value="Send message" name="submit" id="submitButton"
                                        class="btn_one" title="Submit Your Message!">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- END COL  -->
                <div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.9083384658309!2d109.33785759999999!3d-0.0520037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59eda3da791d%3A0xe3dd0ac06373fca0!2sLembaga%20Pendidikan%20%26%20Kursus%20Aprila%20Cabang%20Kota%20Pontianak!5e0!3m2!1sid!2sid!4v1782283545282!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div><!-- END COL  -->
            </div><!-- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END CONTACT -->
@endsection
