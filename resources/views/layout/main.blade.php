<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FTTH</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 </head>
  <body>

    <!----------------- sidebar ----------------->
	<!-- <section class="navigasi"> -->
		
		<nav class="barsamping tutup">
			<header>
				<div class="image-teks">
					<span class="image">
						<img src="../image/signal-tower.png" alt="logo"><!--atur gambar disini-->
					</span>

					<div class="teks header-teks">
						<span class="name">FTTH</span>
					</div>
				</div>

				<i class='bx bx-right-arrow-alt toggle'></i>
			</header>

			<div class="daftar-bar">
				<div class="daftar">
						<li class="kotak-pencarian">
								<input type="search" placeholder="Search.." name="cari">
								<button class="tombol-pencarian" type="submit"><i class='bx bx-search-alt-2 icon'></i></button>
								
						</li>
					<ul class="daftar-link">
						<li class="nav-link">
							<a href="/">
								<i class='bx bxs-home-circle icon'></i>
								<span class="teks nav-teks">Dashboard</span>
							</a>
						</li>
					</ul>
					<ul class="daftar-link">
					@if(Session()->has('profilTeknisi'))
						<li class="nav-link">
							<a href="{{url('/profil/'.Session('profilTeknisi')->id)}}">
								<i class='bx bx-user-circle icon'></i>
								<span class="teks nav-teks">Profil</span>
							</a>
						</li>
					@endif
					</ul>
					<ul class="daftar-link">
						<li class="nav-link">
							<a href="customer">
								<i class='bx bxs-user-detail icon'></i>
								<span class="teks nav-teks">Costumer</span>
							</a>
						</li>
					</ul>
					<ul class="daftar-link">
						<li class="nav-link">
							<a href="odp">
								<i class='bx bx-up-arrow icon'></i>
								<span class="teks nav-teks">ODP</span>
							</a>
						</li>
					</ul>
                    <ul class="daftar-link">
						<li class="nav-link">
							<a href="odc">
                                <i class='bx bx-checkbox-square icon' ></i>
								<span class="teks nav-teks">ODC</span>
							</a>
						</li>
					</ul>
					<ul class="daftar-link">
						<li class="nav-link">
							<a href="logout.php">
								<i class='bx bx-question-mark icon'></i>
								<span class="teks nav-teks">Contact</span>
							</a>
						</li>
					</ul>
                    <ul class="daftar-link">
						<li class="nav-link">
							<a href="{{ url('/logout') }}">
                                <i class='bx bx-power-off icon'></i>
								<span class="teks nav-teks">Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		
	<!-- </section> -->

	<!----------------- content ----------------->
	<section class="rumah">
        <div class="bootstrap-iso">
			@yield('kontainer')
		    <!-- <div class="kontainer">
                
		    </div> -->
        </div>
	</section>
	<script src="../Js/skrip.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </body>
</html>