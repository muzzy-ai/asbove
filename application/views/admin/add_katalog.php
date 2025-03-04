<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Manajemen Katalog</h3>
                    <h6 class="font-weight-normal mb-0">HIMTI Official Merchandise</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manajemen Katalog</h4>
                    <form action="<?= base_url('admin/Katalog/addData'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="exampleInputName1">Nama Barang</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="nama_paket" placeholder="Nama_paket" value="" required>
                                </div>
                                <div class="form-group">
                                    <div class="editor-container">
                                        <label for="exampleInputName1">Deskripsi</label>
                                        <textarea class="form-control" id="editor" name="deskripsi" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Harga (Rp)</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="harga" placeholder="Harga Paket" value="" required>
                                </div>
                            </div>
                            <div class="col-lg-12 text-right">
                                <a href="<?= base_url('admin/Katalog'); ?>" class="btn btn-secondary mr-2">Kembali</a>
                                <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>