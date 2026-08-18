<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-book-open"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Website Bapenda</sup></div>
	</a>


	<!-- Divider garis pembatas-->
	<hr class="sidebar-divider">



	<div class="sidebar-heading">
		Profile
	</div>
	<!-- Nav Item - Charts -->
	<!-- <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#PajakDaerah"
                    aria-expanded="true" aria-controls="PajakDaerah">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Mutasi</span></a>
                    </a>
                <div id="PajakDaerah" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Components:</h6>
                        <a class="collapse-item" href="<?= site_url('user/v_pendapatandaerah') ?>">Print & Edit</a>
                    </div>
                </div>
            </li> -->
	<!-- end of data mutasi -->

	<li class="nav-item">
		<a class="nav-link" href="<?= site_url('user') ?>">
			<i class="fas fa-fw fa-user"></i>
			<span>My Profile</span></a>
	</li>

	<hr class="sidebar-divider mt-3">




	<div class="sidebar-heading">
		Menu
	</div>
	<!-- menu managament -->
	<!-- <li class="nav-item">
        
                <li class="nav-item active">
            
                    <li class="nav-item">
                <a class="nav-link" href="<?= site_url('menu') ?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu Management</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('menu/submenu') ?>">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Sub Menu Management</span></a>
            </li> -->

	<li class="nav-item">
	<li class="nav-item active">
	<li class="nav-item">
		<a class="nav-link" href="<?= site_url('MenuController/Index') ?>">
			<i class="fa fa-cog fa-fw"></i>
			<span>Tambah User</span></a>
	</li>
	<!-- 
        <li class="nav-item">
        <a class="nav-link" href="<?= site_url('menu/submenu') ?>">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Sub Menu Management</span></a>
        </li> -->

	<!-- target berjalan -->
	<!-- <li class="nav-item"> -->
	<!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#target"
                    aria-expanded="true" aria-controls="target">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Target Berjalan</span>
                </a>
                <div id="target" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Components:</h6>
                        <a class="collapse-item" href="<?= site_url('menu/target') ?>">Target perPajak</a>
                        <a class="collapse-item" href="<?= site_url('menu/targetpad') ?>">Target PAD</a>
                        <a class="collapse-item" href="<?= site_url('menu/targetpd') ?>">Target Pendapatan Daerah</a>
                        <a class="collapse-item" href="<?= site_url('menu/target_pajak_daerah') ?>">Pajak daerah</a>
                    </div>
                </div>
            </li> -->
	<!-- end target berjlan -->

	<hr class="sidebar-divider mt-3">


	<!-- Nav Item - Pages Collapse Menu -->
	<div class="sidebar-heading">
		Website
	</div>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mutasi1"
			aria-expanded="true" aria-controls="mutasi1">
			<i class="fa fa-book fa-fw"></i>
			<span>Upload</span>
		</a>
		<div id="mutasi1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Components:</h6>
				<a class="collapse-item" href="<?= site_url('UploadController/Index') ?>">Header</a>
				<a class="collapse-item" href="<?= site_url('GaleriController/Index') ?>">Galeri</a>
				<a class="collapse-item" href="<?= site_url('KegiatanController/Index') ?>">Kegiatan</a>
				<a class="collapse-item" href="<?= site_url('BeritaController/Index') ?>">Berita</a>
				<a class="collapse-item" href="<?= site_url('kritik-saran') ?>">Kritik & Saran</a>
				<a class="collapse-item" href="<?= site_url('sejarah') ?>">Media</a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#seputar"
			aria-expanded="true" aria-controls="seputar">
			<i class="fa fa-book fa-fw"></i>
			<span>Upload Seputar</span>
		</a>
		<div id="seputar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Components:</h6>
				<a class="collapse-item" href="<?= site_url('SeputarController/Index') ?>">Informasi</a>
				<a class="collapse-item" href="<?= site_url('SeputarController/IndexAlur') ?>">Alur Pembayaran</a>
				<a class="collapse-item" href="<?= site_url('SeputarController/IndexVisi') ?>">Visi</a>
				<a class="collapse-item" href="<?= site_url('SeputarController/IndexMisi') ?>">Misi</a>
				<a class="collapse-item" href="<?= site_url('SeputarController/IndexPPID') ?>">PPID</a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#TentangKami"
			aria-expanded="true" aria-controls="TentangKami">
			<i class="fa fa-book fa-fw"></i>
			<span>Tentang Kami</span>
		</a>
		<div id="TentangKami" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Components:</h6>
				<a class="collapse-item" href="<?= site_url('TentangKamiController/Index') ?>">Profil TIM</a>
				<a class="collapse-item" href="<?= site_url('ProdukHukumController/Index') ?>">Produk Hukum</a>
				<a class="collapse-item" href="<?= site_url('StrukturController/Index') ?>">Struktur</a>
				<a class="collapse-item" href="<?= site_url('FormulirController/Index') ?>">Formulir</a>
			</div>
		</div>
	</li>



	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->