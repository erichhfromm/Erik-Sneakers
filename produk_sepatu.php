<?php
include 'header.php';

include 'koneksi.php';


include 'sidebar.php';
?>

<main class="app-main"> <!--begin::App Content Header-->
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Dashboard</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Dashboard
                    </li>
                </ol>
            </div>
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div> <!--end::App Content Header--> <!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
    <h1>Form Upload Data Produk Sepatu</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_sepatu">Nama Sepatu:</label><br>
        <input type="text" id="nama_sepatu" name="nama_sepatu" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" required></textarea><br><br>

        <label for="foto">Foto:</label><br>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

        <button type="submit">Upload</button>
    </form>
</div>
</div> <!--end::Row-->
</main>

    <?php
include 'footer.php';
?>