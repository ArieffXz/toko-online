<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-success"><i class="bi bi-receipt"></i> No. Invoice: <?php echo $invoice->id ?></div> </a></h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <td>ID BARANG</td>
            <td>NAMA PRODUK</td>
            <td>JUMLAH PESANAN</td>
            <td>HARGA TOTAL</td>
            <td>SUB-TOTAL</td>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>

        <tr>
            <td><?php echo $psn->id_barang ?></td>
            <td><?php echo $psn->nama_barang ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga, 0,',','.') ?></td>
            <td><?php echo number_format($subtotal, 0,',','.') ?></td>
        </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total, 0,',','.') ?></td>
        </tr>
    </table>
    <a href="<?php echo base_url('invoice/') ?>"><div class="btn btn-primary">Kembali</div></a>
</div>