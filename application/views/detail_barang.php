<div class="container-fluid">
    <div class="card">
        <div class="card-header">
        <i class="bi bi-box2"></i> Detail Produk
        </div>
        <div class="card-body">
            <?php foreach($barang as $brg) : ?>
           <div class="row">
            <div class="col-md-4">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="" class="card-img-top">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>Nama Produk: </td>
                        <td><strong><?php echo $brg->nama_barang ?></strong></td>
                    </tr>
                    
                    <tr>
                        <td>Nama keterangan: </td>
                        <td><strong><?php echo $brg->keterangan ?></strong></td>
                    </tr>

                    <tr>
                        <td>Kategori: </td>
                        <td><strong><?php echo $brg->kategori ?></strong></td>
                    </tr>

                    <tr>
                        <td>Stock: </td>
                        <td><strong><?php echo $brg->stock ?></strong></td>
                    </tr>

                    <tr>
                        <td>Harga: </td>
                        <td><strong><div class="btn btn-success">Rp. <?php echo number_format($brg->harga, 0, ',','.') ?></div></strong></td>
                    </tr>
                </table>
                <?php echo anchor('dashboard/tambah_keranjang/' .$brg->id_barang, '<div class="btn btn-primary">+ Tambah Keranjang</div>') ?>
                <?php echo anchor('dashboard/index/' .$brg->id_barang, '<div class="btn btn-danger"><i class="bi bi-x-lg"></i> Kembali</div>') ?>
            </div>
           </div>
           <?php endforeach; ?>
        </div>
    </div>
</div>