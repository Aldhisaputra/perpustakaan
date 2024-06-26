<?php 
include "header.html";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <div class="form-group mb-3">
                                    <label for="kodeKategori">Kode Kategori</label>
                                    <input type="text" class="form-control" id="kodeKategori" placeholder="Kode Kategori">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="namaKategori">Nama Kategori</label>
                                    <input type="text" class="form-control" id="namaKategori" placeholder="Nama Kategori">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include "footer.html";
?>
