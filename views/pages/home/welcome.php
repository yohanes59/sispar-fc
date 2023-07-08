<h1 style="text-align: center;">Aplikasi Sistem Pakar Diagnosa Kerusakan Mesin Jahit Metode Forward Chaining</h1>
<br><br><br>
<div class="card-container">
    <div class="card bg-light mb-3">
        <div class="card-header">INFORMASI</div>
        <div class="card-body">
            <h5 class="card-title">Sistem Pakar</h5>
            <p style="margin-bottom: 1rem; margin-top:0;">sistem pakar adalah program komputer yang menggunakan pengetahuan yang telah dikumpulkan dari seorang pakar manusia dalam bidang tertentu untuk memberikan solusi, rekomendasi, atau diagnosis dalam suatu domain spesifik.</p>
            <h5 class="card-title">Forward Chaining</h5>
            <p style="margin-bottom: 1rem; margin-top:0;">metode forward chaining adalah pencarian maju yang di mulai dari beberapa fakta-fakta dengan mencari pedoman yang sesuai dengan dugaan/hipotesis yang muncul menuju suatu hasil / kesimpulan.</p>
        </div>
    </div>
    <div class="card bg-light mb-3">
        <div class="card-header">PETUNJUK</div>
        <div class="card-body">
            <h5 class="card-title">Cara Penggunaan Sistem Pakar ini</h5>
            <p style="margin-bottom: 1rem; margin-top:0;">1. Untuk melakukan diagnosa kerusakan, anda dapat masuk ke halaman diagnosa</p>
            <p style="margin-bottom: 1rem; margin-top:0;">2. pilih gejala kerusakan (maks 4)</p>
            <p style="margin-bottom: 1rem; margin-top:0;">3. tekan tombol diagnosa dan tunggu hasil diagnosa</p>
            <p style="margin-bottom: 1rem; margin-top:0;">4. tekan tombol cetak pada halaman hasil diagnosa untuk mencetak hasil diagnosa</p>
        </div>
    </div>
</div>

<style>
    /* Extra Large devices (Laptops and Desktops) */
    @media only screen and (min-width: 1201px) and (max-width: 1600px) {
        .card-container {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        .card {
            width: 30rem;
            margin: 0;
        }
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .bg-light {
        background-color: #f8f9fa !important;
    }

    .card {
        max-width: 40rem;
        margin: 0 auto;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-title {
        margin-bottom: 0.75rem;
    }

    h5 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
        margin-top: 0;
        font-size: 1.25rem;
    }
</style>