<div class="container-fluid">
   <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_barang">
    + Tambah Barang
    </button>
    <h1></h1>
    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>NAMA BARANG</td>
            <td>KETERANGAN</td>
            <td>KATEGORI</td>
            <td>HARGA</td>
            <td>STOCK</td>
            <td colspan="3" class="text-center">AKSI</td>
        </tr>

        <?php
        $no=1;
        foreach($barang as $brg) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_barang ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stock ?></td>
                <td><div class="btn btn-primary"><i class="fas fa-search-plus"></i></div></td>
                <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-secondary"><i class="fas fa-edit"></i></div>'); ?></td>
                <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_barang, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>'); ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</div>

    <!-- Modal -->
    <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('admin/data_barang/tambah'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Barang :</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang">
                </div>
                <div class="form-group">
                    <label>Keterangan :</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">-- PILIH KATEGORI --</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                        <option value="electronic">Electronic</option>
                        <option value="pakaian_pria">Pakaian Pria</option>
                        <option value="pakaian_wanita">Pakaian Wanita</option>
                        <option value="pakaian_anak">Pakaian Anak - Anak</option>
                        <option value="pakaian_olahraga">Pakaian Olahraga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga :</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga">
                </div>
                <div class="form-group">
                    <label>Stock :</label>
                    <input type="text" class="form-control" name="stock" placeholder="Stock">
                </div>
                <div class="form-group">
                    <label>Gamabar Produk :</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
            
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
    </div>