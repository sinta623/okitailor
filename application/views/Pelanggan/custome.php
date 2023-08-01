<!-- Page Header Start -->
<img style="height: 400px ; width:1340px ;" src="<?= base_url('asset/pesanan_custom.png') ?>" class="container-fluid bg-secondary mb-5">

<!-- Page Header End -->
<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Custom Here</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <?php echo form_open_multipart('pelanggan/custome'); ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="control-group">
                            <label>Nama Bahan</label>
                            <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan Nama Bahan" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="control-group">
                            <label>Upload Contoh Model</label>
                            <input type="file" name="gambar" class="form-control" id="email" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="control-group">
                            <label>Panjang Baju</label>
                            <input type="text" name="pjng_baju" class="form-control" id="subject" placeholder="Masukkan Panjang Baju dalam cm" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="control-group">
                            <label>Panjang Lengan</label>
                            <input type="text" name="pjng_lengan" class="form-control" id="subject" placeholder="Masukkan Panjang Lengan dalam cm" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="control-group">
                            <label>Bahu</label>
                            <input type="text" name="bahu" class="form-control" id="subject" placeholder="Masukkan Ukuran Bahu dalam cm" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="control-group">
                            <label>Pundak</label>
                            <input type="text" name="pundak" class="form-control" id="subject" placeholder="Masukkan Ukuran Pundak dalam cm" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Pengiriman</span></h2>
            </div>
            <input type="hidden" name="ongkir">
            <input type="hidden" name="estimasi">
            <input name="subtotal" value="<?= $this->cart->total() ?>" hidden>
            <?php $id_transaksi = date('Ymd') . strtoupper(random_string('alnum', 8));
            ?>
            <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Provinsi</label>
                    <select name="provinsi" class="custom-select">

                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label>Kota/Kabupaten</label>
                    <select name="kota" class="custom-select">

                    </select>
                </div>
            </div>

            <div class="col-md-12 form-group">
                <label>Alamat</label>
                <textarea rows="3" class="form-control" name="alamat" type="text" placeholder="Masukkan Alamat Lengkap"></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Expedisi</label>
                    <select name="expedisi" class="custom-select">
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label>Estimasi</label>
                    <select name="paket" class="custom-select">
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Custom</button>
            </div>

            </form>
        </div>
        <div class="col-lg-5 mb-5">
            <h5 class="font-weight-semi-bold mb-3">Pilihan Custom</h5>
            <p>Admin akan melakukan update harga custom sesuai model yang telah diajukan. </p>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jakarta Barat</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            
        </div>
    </div>
</div>
<!-- Contact End -->
<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-dark">
                &copy; <a class="text-dark font-weight-semi-bold" href="#">Oki Tailor</a>. All Rights Reserved.
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('asset/eshopper/') ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url('asset/eshopper/') ?>lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="<?= base_url('asset/eshopper/') ?>mail/jqBootstrapValidation.min.js"></script>
<script src="<?= base_url('asset/eshopper/') ?>mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url('asset/eshopper/') ?>js/main.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "http://localhost/oki_tailor/pelanggan/ongkir/provinsi",
            success: function(hasil_provinsi) {
                console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });

        $("select[name=provinsi]").on("change", function() {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            $.ajax({
                type: "POST",
                url: "http://localhost/oki_tailor/pelanggan/ongkir/kota",
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota) {
                    $("select[name=kota]").html(hasil_kota);
                }
            });
        });
        $("select[name=kota]").on("change", function() {
            $.ajax({
                type: "POST",
                url: "http://localhost/oki_tailor/pelanggan/ongkir/expedisi",
                success: function(hasil_expedisi) {
                    $("select[name=expedisi]").html(hasil_expedisi);
                }
            });
        });
        $("select[name=expedisi]").on("change", function() {
            //mendapatkan expedisi terpilih
            var expedisi_terpilih = $("select[name=expedisi]").val()

            //mendapatkan id kota tujuan terpilih
            var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
            //mengambil data ongkos kirim

            //alert(total_berat);
            $.ajax({
                type: "POST",
                url: "http://localhost/oki_tailor/pelanggan/ongkir/paket",
                data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=200',
                success: function(hasil_paket) {
                    $("select[name=paket]").html(hasil_paket);
                }
            });
        });

        $("select[name=paket]").on("change", function() {
            //menampilkan ongkir
            var dataongkir = $("option:selected", this).attr('ongkir');
            var reverse = dataongkir.toString().split('').reverse().join(''),
                ribuan_ongkir = reverse.match(/\d{1,3}/g);
            ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
            //alert(dataongkir);
            $("#ongkir").html("Rp. " + ribuan_ongkir)
            //menghitung total bayar
            var ongkir = $("option:selected", this).attr('ongkir');

            //estimasi dan ongkir
            var estimasi = $("option:selected", this).attr('estimasi');
            $("input[name=estimasi]").val(estimasi);
            $("input[name=ongkir]").val(dataongkir);
        });
    });
</script>
</body>

</html>