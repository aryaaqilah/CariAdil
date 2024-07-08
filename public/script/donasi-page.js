document.addEventListener('DOMContentLoaded', function() {
    // Dapatkan semua radio button dengan name 'radio'
    const radioButtons = document.querySelectorAll('input[name="radio"]');
    const nominalTF = document.getElementById('nominalTF');
    const totalBayar = document.getElementById('totalBayar');

    // Fungsi untuk memperbarui totalBayar
    function updateTotalBayar() {
        const nominalValue = nominalTF.value.replace(/\D/g, ''); // Hanya angka
        const formattedValue = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(nominalValue);
        totalBayar.textContent = `Total : ${formattedValue}`;
    }

    // Tambahkan event listener untuk setiap radio button
    radioButtons.forEach(function(radio) {
        radio.addEventListener('change', function() {
            // Ambil nilai dari label yang terkait dengan radio button yang dipilih
            const label = this.nextElementSibling.textContent.trim();
            // Isi text field nominalTF dengan nilai tersebut
            nominalTF.value = label.replace(/\./g, '').replace(',', '');
            updateTotalBayar();
        });
    });

    // Tambahkan event listener untuk perubahan di nominalTF
    nominalTF.addEventListener('input', updateTotalBayar);
});
