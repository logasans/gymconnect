document.getElementById('formPeminjaman').addEventListener('submit', function(event) {
    event.preventDefault();
    const nama = document.getElementById('nama').value;
    const tanggal = document.getElementById('tanggal').value;

    fetch('peminjaman.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ nama, tanggal }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
        // Update daftar peminjaman
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});
