<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- title -->
	<title>Cart</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
								<li><a href="index.html">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php">Cart</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="container mt-5 mb-5" id="cart-section">
	<div class="row">
		<!-- Keranjang -->
		<div class="col-lg-8 col-md-12">
			<div class="card p-4">
				<h4 class="mb-3">Produk</h4>
				<table class="table">
					<thead>
						<tr>
							<th>Gambar</th>
							<th>Nama Produk</th>
							<th>Harga / Kg</th>
							<th>Jumlah (Kg) <span id="jumlah" style="display: none;">0</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="assets/img/products/product-img-1.jpg" width="80" alt="Telur Ayam"></td>
							<td>Telur Ayam Negeri</td>
							<td>Rp <span id="hargaSatuan">31.000</span></td>
							<td><input type="number" id="jumlahInput" value="0" min="0" class="form-control w-50"></td>
						</tr>
					</tbody>
				</table>

				<hr>

				<h5 class="mt-3">Informasi Pembeli:</h5>
				<div class="form-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
				</div>
				<div class="form-group">
					<label for="telepon">Nomor Telepon</label>
					<input type="tel" id="telepon" class="form-control" placeholder="Masukkan Nomor Telepon">
				</div>

				<hr>

				<h5 class="mt-3">Metode Pengambilan:</h5>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="pengambilan" id="ambilSendiri" value="ambil" checked>
					<label class="form-check-label" for="ambilSendiri">Ambil Sendiri (Gratis Ongkir)</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="pengambilan" id="diantar" value="diantar">
					<label class="form-check-label" for="diantar">Diantar (Ongkir Rp 10.000)</label>
				</div>

				<div id="alamatContainer" class="mt-3" style="display: none;">
					<label for="alamat">Alamat Pengiriman:</label>
					<textarea id="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap..."></textarea>
				</div>
					<div class="cart-buttons">
						<a href="cart.php" class="boxed-btn">Perbarui Keranjang </a>
					</div>	
			</div>
		</div>

		<div class="col-lg-4">
			<div class="card p-4">
				<h4>Total Pembayaran</h4>
				<table class="table">
					<tr>
						<td>Subtotal</td>
						<td>Rp <span id="subtotal">0</span></td>
					</tr>
					<tr>
						<td>Ongkir</td>
						<td>Rp <span id="ongkir">0</span></td>
					</tr>
					<tr>
						<th>Total</th>
						<th>Rp <span id="total">0</span></th>
					</tr>
				</table>
				<div class="cart-buttons">
					<a href="checkout.php" class="boxed-btn black">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Tentang Kami</h2>
						<p>Kami adalah supplier telur ayam negeri Aceh terpercaya di Bandung, menyediakan 
							telur segar berkualitas tinggi dengan harga terbaik.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Kontak</h2>
						<ul>
							<li>Bandung, Jawa Barat</li>
							<li>supplier@teluraceh.com</li>
							<li>+62 812-3456-7890</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2025 - Supplier Telur Ayam Negeri Aceh</a>,  All Rights Reserved.<br> </p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://www.facebook.com/telur.aceh/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://x.com/teluraceh" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/teluraceh/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

	<script>
	document.addEventListener('DOMContentLoaded', function() {
    // Mendapatkan referensi ke elemen radio button metode pengambilan
    const ambilSendiriRadio = document.querySelector('input[value="ambil"]');
    const diantarRadio = document.querySelector('input[value="diantar"]');
    
    // Mendapatkan referensi ke container alamat pengiriman
    const alamatContainer = document.getElementById('alamatContainer');
    
    // Fungsi untuk menampilkan atau menyembunyikan alamat pengiriman
    function toggleAlamatPengiriman() {
        if (diantarRadio.checked) {
            // Jika opsi Diantar dipilih, tampilkan alamat pengiriman
            alamatContainer.style.display = 'block';
            // Ubah warna tombol menjadi biru jika ada
            const updateButton = document.querySelector('.perbarui-keranjang');
            if (updateButton) {
                updateButton.classList.remove('btn-warning', 'btn-orange');
                updateButton.classList.add('btn-primary', 'btn-blue');
            }
        } else {
            // Jika opsi Ambil Sendiri dipilih, sembunyikan alamat pengiriman
            alamatContainer.style.display = 'none';
            // Ubah warna tombol menjadi oranye jika ada
            const updateButton = document.querySelector('.perbarui-keranjang');
            if (updateButton) {
                updateButton.classList.remove('btn-primary', 'btn-blue');
                updateButton.classList.add('btn-warning', 'btn-orange');
            }
        }
    }
    
    // Menambahkan event listener untuk radio button
    if (ambilSendiriRadio) {
        ambilSendiriRadio.addEventListener('change', toggleAlamatPengiriman);
    }
    
    if (diantarRadio) {
        diantarRadio.addEventListener('change', toggleAlamatPengiriman);
    }
    
    // Jalankan fungsi saat halaman dimuat untuk mengatur tampilan awal
    toggleAlamatPengiriman();
});


// Fungsi untuk notifikasi dan tombol Perbarui Keranjang

document.addEventListener('DOMContentLoaded', function() {
    // Radio button event listeners untuk alamat pengiriman
    const ambilSendiriRadio = document.getElementById('ambilSendiri');
    const diantarRadio = document.getElementById('diantar');
    const alamatContainer = document.getElementById('alamatContainer');
    
    // Toggle alamat pengiriman saat radio button diubah
    if (ambilSendiriRadio && diantarRadio) {
        ambilSendiriRadio.addEventListener('change', function() {
            alamatContainer.style.display = 'none';
        });
        
        diantarRadio.addEventListener('change', function() {
            alamatContainer.style.display = 'block';
        });
    }
    
    // Mendapatkan referensi ke tombol Perbarui Keranjang
    const perbaruiButton = document.querySelector('.cart-buttons .boxed-btn:not(.black)');
    
    if (perbaruiButton) {
        perbaruiButton.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah navigasi ke cart.php
            
            // Hitung total, subtotal, dan ongkir saat tombol diklik
            const jumlahInput = document.getElementById('jumlahInput');
            const hargaSatuan = document.getElementById('hargaSatuan');
            const subtotalElement = document.getElementById('subtotal');
            const ongkirElement = document.getElementById('ongkir');
            const totalElement = document.getElementById('total');
            const jumlahElement = document.getElementById('jumlah'); // Element untuk menyimpan jumlah
            
            const harga = parseInt(hargaSatuan.textContent.replace(/\D/g, ''));
            const jumlah = parseInt(jumlahInput.value) || 0;
            const subtotal = harga * jumlah;
            
            // Update subtotal
            subtotalElement.textContent = subtotal.toLocaleString('id-ID');
            
            // Update ongkir
            const ongkir = diantarRadio.checked ? 10000 : 0;
            ongkirElement.textContent = ongkir.toLocaleString('id-ID');
            
            // Update total
            const total = subtotal + ongkir;
            totalElement.textContent = total.toLocaleString('id-ID');
            
            // Update elemen jumlah yang tersembunyi
            jumlahElement.textContent = jumlah;
            
            // Buat overlay gelap di belakang notifikasi
            const overlay = document.createElement('div');
            overlay.style.position = 'fixed';
            overlay.style.top = '0';
            overlay.style.left = '0';
            overlay.style.width = '100%';
            overlay.style.height = '100%';
            overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            overlay.style.zIndex = '999';
            
            // Buat elemen notifikasi
            const notifikasi = document.createElement('div');
            notifikasi.style.position = 'fixed';
            notifikasi.style.top = '50%';
            notifikasi.style.left = '50%';
            notifikasi.style.transform = 'translate(-50%, -50%)';
            notifikasi.style.backgroundColor = '#1E1E1E';
            notifikasi.style.color = 'white';
            notifikasi.style.padding = '20px';
            notifikasi.style.borderRadius = '10px';
            notifikasi.style.zIndex = '1000';
            notifikasi.style.width = '300px';
            notifikasi.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
            
            // Isi notifikasi
            notifikasi.innerHTML = `
                <div style="margin-bottom: 15px;">
                    <div style="font-size: 18px; color: #ccc;">localhost says</div>
                    <div style="font-size: 16px; margin-top: 10px;">Keranjang berhasil diperbarui!</div>
                </div>
                <div style="text-align: right;">
                    <button class="ok-button" style="background-color: #64D2FF; color: black; border: none; padding: 8px 25px; border-radius: 20px; cursor: pointer;">OK</button>
                </div>
            `;
            
            // Tambahkan overlay dan notifikasi ke body
            document.body.appendChild(overlay);
            document.body.appendChild(notifikasi);
            
            // Event listener untuk tombol OK
            const okButton = notifikasi.querySelector('.ok-button');
            okButton.addEventListener('click', function() {
                notifikasi.remove();
                overlay.remove();
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const checkoutButton = document.querySelector('.cart-buttons .boxed-btn.black');

    if (checkoutButton) {
        checkoutButton.addEventListener('click', function (e) {
            // Pastikan jumlah diambil dari input langsung, bukan dari span
            const jumlahInput = document.getElementById('jumlahInput');
            const jumlah = jumlahInput ? jumlahInput.value : "0";
            
            // Perbarui span jumlah untuk memastikan nilai terbaru tersimpan
            const jumlahElement = document.getElementById('jumlah');
            if (jumlahElement) {
                jumlahElement.textContent = jumlah;
            }
            
            // Ambil nilai dari elemen lain
            const subtotal = document.getElementById('subtotal').textContent.replace(/\./g, '').replace(/,/g, '');
            const ongkir = document.getElementById('ongkir').textContent.replace(/\./g, '').replace(/,/g, '');
            const total = document.getElementById('total').textContent.replace(/\./g, '').replace(/,/g, '');

            // Simpan ke localStorage
            localStorage.setItem('subtotal', subtotal);
            localStorage.setItem('ongkir', ongkir);
            localStorage.setItem('total', total);
            localStorage.setItem('jumlah', jumlah);

            // Tidak perlu redirect jika tombol adalah link (<a href>)
            // window.location.href = "checkout.php";
        });
    }
});
</script>

</body>
</html>