// function hitung() {
//     var angka1 = parseFloat(document.getElementById("angka1").value);
//     var angka2 = parseFloat(document.getElementById("angka2").value);
//     var operator = document.getElementById("operator").value;
//     var hasilElement = document.getElementById("hasil");

//     if (!isNaN(angka1) && !isNaN(angka2) && operator == 'tambah') {
//         var hasil = angka1 + angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
//         hasilElement.textContent = hasil;
//     } else if (!isNaN(angka1) && !isNaN(angka2) && operator == 'kurang') {
//         var hasil = angka1 - angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
//         hasilElement.textContent = hasil;
//     } else if (!isNaN(angka1) && !isNaN(angka2) && operator == 'bagi') {
//         var hasil = angka1 / angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
//         hasilElement.textContent = hasil;
//     } else if (!isNaN(angka1) && !isNaN(angka2) && operator == 'kali') {
//         var hasil = angka1 * angka2; // Ganti operasi ini sesuai yang diinginkan (+, -, *, /, dll.)
//         hasilElement.textContent = hasil;
//     } else {
//         hasilElement.textContent = "Masukkan angka yang valid di kedua input.";
//     }
    
// }

function hitung() {
    var angka1 = parseFloat(document.getElementById("angka1").value);
    var angka2 = parseFloat(document.getElementById("angka2").value);
    var operator = document.getElementById("operator").value;
    var hasilElement = document.getElementById("hasil");
    
    if (!isNaN(angka1) && !isNaN(angka2) && (operator in operators)) {
        var hasil = operators[operator](angka1, angka2);
        hasilElement.textContent = hasil;
    } else {
        hasilElement.textContent = "Masukkan angka yang valid di kedua input.";
    }
}

const operators = {
    'tambah': (a, b) => a + b,
    'kurang': (a, b) => a - b,
    'bagi': (a, b) => a / b,
    'kali': (a, b) => a * b
};

