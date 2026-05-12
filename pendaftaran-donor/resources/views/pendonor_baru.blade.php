<!DOCTYPE html>
<html>
<head>
    <title>Pendonor Baru</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card-box {
            border: 1px solid #ccc;
            padding: 20px;
        }
        .tab {
            display: inline-block;
            padding: 8px 15px;
            border: 1px solid #ccc;
            margin-right: 5px;
            background: #eee;
            cursor: pointer;
        }
        .tab.active {
            background: white;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <!-- Judul -->
        <h4 class="text-center mb-4">
            Pendaftaran Donor Darah Rumah Sakit X
        </h4>

        <!-- Tombol atas -->
        <div class="mb-3">
            <button class="btn btn-primary">Pendonor Lama</button>
            <button class="btn btn-secondary">Pendonor Baru</button>
        </div>

        <!-- Kategori -->
        <div class="mb-3">
            <button class="btn btn-outline-secondary btn-sm">Pegawai</button>
            <button class="btn btn-primary btn-sm">Umum</button>
        </div>

        <!-- Tab -->
        <div class="mb-3">
            <span id="tab1" class="tab active">Data Pribadi</span>
            <span id="tab2" class="tab">Alamat dan Kontak</span>
        </div>

        <!-- FORM -->
        <div class="card-box">
            <form>

                <!-- ================= STEP 1 ================= -->
                <div id="step1">

                    <!-- No Identitas -->
                    <div class="mb-3">
                        <label>No. Identitas *</label>
                        <select class="form-control mb-2">
                            <option>-- Pilih --</option>
                            <option>KTP</option>
                            <option>No Pendonor</option>
                        </select>

                        <input type="text" class="form-control" placeholder="No. Identitas">
                    </div>

                    <!-- Nama -->
                    <div class="mb-3">
                        <label>Nama Lengkap *</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>

                    <!-- Tempat lahir -->
                    <div class="mb-3">
                        <label>Tempat Lahir *</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kota Lahir">
                    </div>

                    <!-- Tanggal lahir -->
                    <div class="mb-3">
                        <label>Tanggal Lahir *</label>
                        <input type="date" class="form-control">
                    </div>

                    <!-- Jenis kelamin -->
                    <div class="mb-3">
                        <label>Jenis Kelamin *</label><br>
                        <input type="radio" name="jk"> Laki-laki
                        <input type="radio" name="jk" class="ms-3"> Perempuan
                    </div>

                    <!-- Pekerjaan -->
                    <div class="mb-3">
                        <label>Pekerjaan *</label>
                        <input type="text" class="form-control" placeholder="Ketikkan Pekerjaan Pendonor">
                    </div>

                    <!-- Agama -->
                    <div class="mb-3">
                        <label>Agama *</label>
                        <select class="form-control">
                            <option>-- Pilih Agama --</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label>Status Perkawinan *</label>
                        <select class="form-control">
                            <option>-- Pilih --</option>
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                        </select>
                    </div>

                    <button type="button" onclick="nextStep()" class="btn btn-primary">
                        Lanjut →
                    </button>

                </div>

                <!-- ================= STEP 2 ================= -->
                <div id="step2" style="display:none;">

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label>Alamat Lengkap *</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

<div class="mb-3">
    <label>Provinsi *</label>
    <select name="provinsi_id" id="provinsi" class="form-control">
        <option value="">-- Pilih Provinsi --</option>
        @foreach($provinsi as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Kabupaten *</label>
    <select name="kabupaten_id" id="kabupaten" class="form-control" disabled>
        <option value="">-- Pilih Kabupaten --</option>
    </select>
</div>

<div class="mb-3">
    <label>Kecamatan *</label>
    <select name="kecamatan_id" id="kecamatan" class="form-control" disabled>
        <option value="">-- Pilih Kecamatan --</option>
    </select>
</div>

<div class="mb-3">
    <label>Kelurahan *</label>
    <select name="kelurahan_id" id="kelurahan" class="form-control" disabled>
        <option value="">-- Pilih Kelurahan --</option>
    </select>
</div>

<div class="row mb-3">
    <div class="col-md-6">
    <label>No. Mobile Aktif *</label>
    <input type="text" class="form-control" placeholder="08xxxxxxxxxx">
</div>

<div class="col-md-6">
    <label>No. HP (Opsional)</label>
    <input type="text" class="form-control" placeholder="Nomor lain jika ada">
</div>
</div>

                    <div class="d-flex justify-content-between">
                        <button type="button" onclick="prevStep()" class="btn btn-secondary">
                            ← Kembali
                        </button>

                        <button type="submit" class="btn btn-success">
                            Simpan ✔
                        </button>
                    </div>

                </div>

            </form>
        </div>

    </div>

</div>

<!-- JS -->
<script>
function nextStep() {
    document.getElementById("step1").style.display = "none";
    document.getElementById("step2").style.display = "block";

    document.getElementById("tab1").classList.remove("active");
    document.getElementById("tab2").classList.add("active");
}

function prevStep() {
    document.getElementById("step1").style.display = "block";
    document.getElementById("step2").style.display = "none";

    document.getElementById("tab1").classList.add("active");
    document.getElementById("tab2").classList.remove("active");
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

    // ================= PROVINSI -> KABUPATEN =================
    $('#provinsi').on('change', function () {
        let id = $(this).val();

        $('#kabupaten').html('<option>Loading...</option>').prop('disabled', true);
        $('#kecamatan').html('<option>-- Pilih Kecamatan --</option>').prop('disabled', true);
        $('#kelurahan').html('<option>-- Pilih Kelurahan --</option>').prop('disabled', true);

        if (id) {
            $.ajax({
                url: '/kabupaten/' + id,
                type: 'GET',
                success: function (data) {
                    $('#kabupaten').prop('disabled', false);
                    $('#kabupaten').html('<option value="">-- Pilih Kabupaten --</option>');

                    $.each(data, function (i, item) {
                        $('#kabupaten').append(
                            `<option value="${item.id}">${item.nama}</option>`
                        );
                    });
                }
            });
        }
    });

    // ================= KABUPATEN -> KECAMATAN =================
    $('#kabupaten').on('change', function () {
        let id = $(this).val();

        $('#kecamatan').html('<option>Loading...</option>').prop('disabled', true);
        $('#kelurahan').html('<option>-- Pilih Kelurahan --</option>').prop('disabled', true);

        if (id) {
            $.ajax({
                url: '/kecamatan/' + id,
                type: 'GET',
                success: function (data) {
                    $('#kecamatan').prop('disabled', false);
                    $('#kecamatan').html('<option value="">-- Pilih Kecamatan --</option>');

                    $.each(data, function (i, item) {
                        $('#kecamatan').append(
                            `<option value="${item.id}">${item.nama}</option>`
                        );
                    });
                }
            });
        }
    });

    // ================= KECAMATAN -> KELURAHAN =================
    $('#kecamatan').on('change', function () {
        let id = $(this).val();

        $('#kelurahan').html('<option>Loading...</option>').prop('disabled', true);

        if (id) {
            $.ajax({
                url: '/kelurahan/' + id,
                type: 'GET',
                success: function (data) {
                    $('#kelurahan').prop('disabled', false);
                    $('#kelurahan').html('<option value="">-- Pilih Kelurahan --</option>');

                    $.each(data, function (i, item) {
                        $('#kelurahan').append(
                            `<option value="${item.id}">${item.nama}</option>`
                        );
                    });
                }
            });
        }
    });

});
</script>
</body>
</html>