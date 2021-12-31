<!-- Begin Page Content -->
<div class="container-fluid">

	<?= $this->session->flashdata('pesan'); ?>
	<div class="row">
		<div class="col-lg-6">
			<?php if(validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <form action="<?= base_url('buku/editkategori'); ?>" method="post">
            	<?php
            	foreach ($kategori as $k) : ?>
                    <div class="form-group">
                        <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo $k['id_kategori']; ?>">
                            <input type="text" class="form-control form-control-user" id="nama_kategori" name="nama_kategori" placeholder="Masukan Kategori Buku" value="<?= $k['nama_kategori']; ?>">
                    </div>
                <?php

                endforeach; ?>

                <div class="form-group">
                    <button type="resset" class="btn btn-secondary"><i class="fas fa-ban"></i> kembali</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->