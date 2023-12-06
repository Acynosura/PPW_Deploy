@extends('layouts.master')

@section('container')

<section class="main py-3">
    <div class="containerr py-5">
        <div class="row py-5">
            <div class="col-lg-6 py-5 offset-lg-1">
                <h3><small>Hello, I'm</small><br>
                Andromedha Cynosura
                </h3>
                <h6>
                    Project Manager
                </h6>
                <input type="button" value="My Work" class="bt1 mt-5">
                <input type="button" value="Hore Me" class="bt1 mt-5">
            </div>
        </div>
    </div>
</section>
<section class="about py-5">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-5 py-5 offeset-lg-1">
                <img style="width: 500px; height:auto;" src="image/dok.png" alt="">
            </div>
            <div class="col-lg-7 pt-3">
                <h1>About Me</h1>
                <p>Project Management</p>
                <p class="py-5">I am <span class="font-weight-bold">Andromedha Cynosura</span> Seorang profesional proaktif dengan pengalaman luas dalam manajemen proyek, yang memadukan keahlian kepemimpinan yang kuat dengan penampilan yang profesional dan menarik. Memiliki reputasi yang solid dalam mengelola proyek-proyek kompleks dan memimpin tim multidisiplin untuk mencapai tujuan dalam tenggat waktu yang ketat.</p>
                <div class="progress">
                    <div class="pro-value">
                        <p>Project Management <span class="text-white float-right">70%</span></p>
                    </div>
                </div>
                <input type="button" class="btn1 mt-4" value="Download C.V">
                <input type="button" class="btn1 mt-4" value="Contact Us">
            </div>
        </div>
    </div>
</section>
<section class="services py-5 bg-light">
    <div class="container py-5">
        <h1 class="text-center pb-5">Services</h1>
        <div class="row pb-3">
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Project Management</h4>
                        <p>Sebagai seorang Project Manager yang handal, saya menyusun rencana proyek komprehensif, memimpin tim menuju pencapaian target tenggat waktu, dan mengimplementasikan solusi inovatif dalam penyelesaian masalah kompleks. Saya membangun kemitraan strategis dengan klien dan pihak terkait, menerapkan manajemen risiko yang efektif, serta mencapai kinerja tinggi dalam proyek-proyek kunci, sambil mengembangkan proses perbaikan berkelanjutan dan mendorong inovasi melalui kepemimpinan yang memotivasi. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Event Organizer</h4>
                        <p>Sebagai seorang Event Organizer yang berpengalaman, saya memiliki kemampuan dalam merencanakan, mengkoordinasikan, dan melaksanakan acara-acara yang berkesan. Saya memulai dengan pemahaman yang mendalam terhadap kebutuhan klien, mengidentifikasi konsep kreatif, serta mengelola semua aspek logistik dan teknis agar acara berjalan lancar.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Public Speaker</h4>
                        <p>Sebagai seorang Public Speaker yang berpengalaman, saya memiliki kemampuan untuk menginspirasi, mengedukasi, dan menghibur audiens dengan cara yang menarik dan informatif. Saya menguasai seni berbicara di depan umum dengan percaya diri, kejelasan, dan energi yang memikat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection