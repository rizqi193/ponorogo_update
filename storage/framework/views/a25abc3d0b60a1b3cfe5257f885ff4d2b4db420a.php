<?php $__env->startSection('title', 'Tentang Kami'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Logo Section -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 text-center">
            <img src="<?php echo e(asset('Lambang_Kabupaten_Ponorogo.png')); ?>" alt="Logo Perusahaan" class="img-fluid" style="max-width: 400px;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="padding-top: 50px;">
            <h2>Tentang Kami</h2>
            <p>Selamat datang di situs kami! Kami adalah tim profesional yang berdedikasi...</p>

            <h3>Misi Kami</h3>
            <p>Di inti dari kami, kami bertujuan untuk:</p>
            <ul>
                <li>Memberikan solusi yang handal dan skalabel untuk tantangan yang dihadapi klien kami.</li>
                <li>Terus berinovasi untuk tetap unggul di industri yang terus berubah.</li>
                <li>Memprioritaskan pendekatan yang berfokus pada pelanggan, memastikan setiap solusi disesuaikan dengan kebutuhan unik klien kami.</li>
            </ul>

            <h3>Visi Kami</h3>
            <p>Kami membayangkan sebuah dunia di mana bisnis dan individu dapat mengandalkan teknologi untuk menyederhanakan hidup mereka dan meningkatkan produktivitas. Tujuan kami adalah menjadi mitra terpercaya dalam transformasi ini.</p>

            <h3>Nilai-Nilai Kami</h3>
            <p>Pekerjaan kami didorong oleh nilai-nilai inti yang mendefinisikan siapa kami dan bagaimana kami berinteraksi dengan dunia:</p>
            <ul>
                <li><strong>Integritas:</strong> Kami melakukan hal yang benar, meskipun tidak ada yang melihat.</li>
                <li><strong>Inovasi:</strong> Kami menerima perubahan dan secara aktif mengejar cara-cara baru untuk memperbaiki diri.</li>
                <li><strong>Kolaborasi:</strong> Kami bekerja bersama untuk mencapai kesuksesan yang lebih besar.</li>
                <li><strong>Kepuasan Pelanggan:</strong> Kami mengutamakan kebutuhan dan tujuan klien kami.</li>
                <li><strong>Keunggulan:</strong> Kami memberikan hasil kerja berkualitas tinggi yang melebihi harapan.</li>
            </ul>

            <h3>Tim Kami</h3>
            <p>Tim kami terdiri dari profesional yang penuh semangat, terampil, dan berpengalaman...</p>

            <h3>Apa yang Kami Lakukan</h3>
            <p>Kami mengkhususkan diri dalam memberikan berbagai layanan...</p>

            <h3>Sejarah Kami</h3>
            <p>Didirikan pada tahun 2010, kami memulai sebagai startup kecil dengan visi untuk berinovasi...</p>

            <h3>Prestasi Kami</h3>
            <ul>
                <li>Dinobatkan sebagai "Startup Teknologi Terbaik" pada tahun 2015 oleh Majalah XYZ.</li>
                <li>Berhasil membantu lebih dari 500 perusahaan dalam mentransformasi kehadiran digital mereka.</li>
                <li>Meluncurkan lebih dari 100 aplikasi mobile yang diunduh lebih dari 10 juta kali di seluruh dunia.</li>
                <li>Diakui sebagai salah satu dari 100 perusahaan inovatif terbaik di industri teknologi pada tahun 2020.</li>
            </ul>

            <h3>Hubungi Kami</h3>
            <p>Jika Anda ingin mengetahui lebih lanjut tentang layanan kami atau ingin mendiskusikan sebuah proyek, silakan hubungi kami:</p>
            <ul>
                <li><strong>Email:</strong> info@ponorogo_update.com</li>
                <li><strong>Telepon:</strong> +1 (555) 123-4567</li>
                <li><strong>Alamat:</strong> Jl. Inovasi No. 1234, Suite 500, Kota ponorogo, Indonesia</li>
            </ul>

            <p>Terima kasih telah mengunjungi situs kami. Kami berharap dapat bekerja sama dengan Anda dan meraih kesuksesan bersama!</p>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 Perusahaan Kami. Semua hak dilindungi undang-undang.</p>
</footer>

<style>
h2, h3 {
    color: #333;
    margin-top: 30px;
    font-size: 28px;
}

p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}

ul {
    list-style-type: disc;
    margin-left: 20px;
}

ul li {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}

strong {
    font-weight: bold;
}

.col-md-12 {
    padding-top: 50px;
}

h2 {
    font-size: 36px;
    color: #333;
    text-align: center;
}

h3 {
    font-size: 24px;
    color: #444;
}

p, ul {
    margin-bottom: 20px;
}

ul li {
    margin-bottom: 10px;
}

/* Styling untuk daftar kontak */
ul li strong {
    color: #333;
}

ul li {
    padding-left: 20px;
}

.container ul {
    padding-left: 0;
}

/* Styling Footer */
footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
    margin-top: 40px;
}

footer p {
    margin: 0;
}

/* Responsiveness for smaller screens */
@media (max-width: 768px) {
    h2 {
        font-size: 30px;
    }

    h3 {
        font-size: 22px;
    }

    p, ul li {
        font-size: 14px;
    }

    footer p {
        font-size: 14px;
    }
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AXIO RPL 26\Documents\aplikasi_web1\resources\views/about.blade.php ENDPATH**/ ?>