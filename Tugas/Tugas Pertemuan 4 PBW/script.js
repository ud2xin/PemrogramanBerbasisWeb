document.getElementById("cekButton").addEventListener("click", function () {
    const nim = document.getElementById("inputNim").value.trim();
    const nilai = parseInt(document.getElementById("inputNilai").value);
    const hasil = document.getElementById("hasil");
    let grade = "";

    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasil.innerHTML = "Input nilai tidak valid!";
        hasil.style.color = "red";
        return;
    }

    if (nilai >= 80) {
        grade = "A";
    } else if (nilai >= 70) {
        grade = "B";
    } else if (nilai >= 60) {
        grade = "C";
    } else if (nilai >= 50) {
        grade = "D";
    } else {
        grade = "E";
    }

    hasil.style.color = "black";
    hasil.innerHTML = `
        NIM: <strong>${nim}</strong><br>
        Nilai: <strong>${nilai}</strong><br>
        Huruf Mutu: <span style="color: blue;">${grade}</span>
    `;
});
