<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-success">
                <?php
                $grand_total = 0; 
                if ($keranjang = $this->cart->contents()) 
                {
                    foreach ($keranjang as $items)
                    {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0, ',','.');
                
                ?>
            </div>
            <br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran.</h3>
            <br>
            <form  action="<?php echo base_url('dashboard/proses_pesanan'); ?> " method="post">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="telp" class="form-control" placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control" name="pilihan">
                        <option value="JNE">JNE</option>
                        <option value="GOJEK">GOJEK</option>
                        <option value="SI CEPAT EXPRESS">SI CEPAT EXPRESS</option>
                        <option value="POS INDONESIA">POS INDONESIA</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Pembayaran</label>
                    <select class="form-control">
                        <option>BCA - xxxxxx</option>
                        <option>MANDIRI - xxxxxx</option>
                        <option>DANA - xxxxxx</option>
                        <option>SHOPE PAY - xxxxxx</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Bayar</button>
            </form>
                <?php 
                }else {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong";
                }
                ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>