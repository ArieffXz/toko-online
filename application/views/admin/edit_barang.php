<div class="container-fluid">
        <h3>Edit Data Barang</h3>

        <?php foreach($barang as $brg) : ?>

            <form action="<?php echo base_url().'admin/data_barang/update '  ?>" method="POST">

                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?php echo $brg->nama_barang ?>">
                </div>

                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $brg->keterangan ?>">
                </div>

                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="<?php echo $brg->kategori ?>">
                </div>

                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?php echo $brg->harga ?>">
                </div>

                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="text" name="stock" class="form-control" placeholder="Stock" value="<?php echo $brg->stock ?>">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <button class="btn btn-danger">Cancel</button>

            </form>

        <?php endforeach; ?>
</div>