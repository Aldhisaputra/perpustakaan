<?php 
include "header.html";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Data Kategori
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <a href="" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="col">
                            <form action="" class="form-inline d-flex justify-content-end">
                                <input type="text" class="form-control mr-2" style="width: 200px;" placeholder="Cari Data">
                                <input type="submit" class="btn btn-primary" value="Cari">
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>K-0001</td>
                                    <td>Komputer</td>
                                </tr>
                            </table>
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
