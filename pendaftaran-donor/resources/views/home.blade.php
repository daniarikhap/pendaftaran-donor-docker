<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Donor Darah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        
        <h4 class="text-center mb-4">
            Pendaftaran Donor Darah Rumah Sakit X
        </h4>

        <div class="text-center mb-4">
            <button class="btn btn-secondary me-2">Pendonor Lama</button>
            <a href="/pendonor-baru" class="btn btn-primary">
    Pendonor Baru
</a>
        </div>

        <form>
        <div class="mb-3">
    <label>Pilih Jenis Identitas</label>
    <select class="form-control" id="jenis_identitas" onchange="ubahInput()">
        <option value="">-- Pilih --</option>
        <option value="ktp">KTP</option>
        <option value="pendonor">No. Pendonor</option>
    </select>
</div>

<div class="mb-3">
    <label id="label_input">Masukkan Data</label>
    <input type="text" id="input_identitas" class="form-control" placeholder="Pilih jenis dulu">
</div>

            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control">
            </div>

            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-warning me-2">Kembali</button>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
        </form>

    </div>
</div>
<script>
function ubahInput() {
    let jenis = document.getElementById("jenis_identitas").value;
    let input = document.getElementById("input_identitas");
    let label = document.getElementById("label_input");

    if (jenis === "ktp") {
        label.innerText = "Masukkan No. KTP";
        input.placeholder = "Masukkan No. KTP";
    } else if (jenis === "pendonor") {
        label.innerText = "Masukkan No. Pendonor";
        input.placeholder = "Masukkan No. Pendonor";
    } else {
        label.innerText = "Masukkan Data";
        input.placeholder = "Pilih jenis dulu";
    }
}
</script>
</body>
</html>