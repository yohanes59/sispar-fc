function appendSignature() {
    let tandaTanganElement = document.getElementById('tanda-tangan');
    let date = new Date();
    let dayOfWeek = date.toLocaleString('default', { weekday: 'long' });
    let day = date.getDate();
    let month = date.toLocaleString('default', { month: 'long' });
    let year = date.getFullYear();
    let tanggal = dayOfWeek + ' ' + day + ' ' + month + ' ' + year;
    let kopElement = document.getElementById('kop-surat');
    let garis = document.getElementById('garis');

    kopElement.innerHTML += '<div class="isi"><p class="company">KONVEKSI <span>PUTRA KARAWANG</span></p><p><b>Jl. Griya Kondang Asri No.8, Kondang Jaya, Karawang Timur, Karawang,</b></p><p><b>Jawa Barat 41317. HP. 0812-1338-2405</b></p></div>';
    garis.innerHTML = '<hr>';
    tandaTanganElement.innerHTML = '<br><br><p>Jakarta, ' + tanggal + '</p><br><br><br><br><br><br><span><pre>(\t\t\t\t\t\t\t)</pre></span>';

    window.print();
}