<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100 img-fluid" src="<?php echo base_url('assets/img/img1.jpg'); ?>" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="<?php echo base_url('assets/img/img2.jpg'); ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="<?php echo base_url('assets/img/img3.jpg'); ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="<?php echo base_url('assets/img/img4.jpg'); ?>" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="row text-center mt-4">
        <?php foreach ($pakaian_olahraga as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="images">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $brg->nama_barang; ?></h5>
                    <small><?php echo $brg->keterangan; ?></small><br>
                    <span class="badge badge-pill badge-success disabled mb-3">Rp. <?php echo number_format($brg->harga, 0, ',','.')  ?></span>
                    <?php echo anchor('dashboard/tambah_keranjang/' .$brg->id_barang, '<div class="btn btn-primary">Tambah Keranjang</div>') ?>
                    <h1></h1>
                    <?php echo anchor('dashboard/detail/' .$brg->id_barang, '<div class="btn btn-secondary">Detail</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>