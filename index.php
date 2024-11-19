<?php
include 'koneksi.php'; // Menghubungkan ke database

$file = "Healthcare-Diabetes.csv"; // Nama file CSV

// Cek apakah file bisa dibuka
if (($handle = fopen($file, "r")) !== FALSE) {
    $isHeader = true; // Menandai baris header
    
    while (($Healthcare-Diabetes = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // Lewati header
        if ($isHeader) {
            $isHeader = false;
            continue;
        }

        // Ambil data dari CSV
        $id = $Healthcare-Diabetes[0];
        $Pregnancies = $Healthcare-Diabetes[1];
        $Glucose = $Healthcare-Diabetes[2];

        // Query untuk memasukkan data ke MySQL
        $sql = "INSERT INTO users (id, Kehamilan, Guladarah) VALUES ('$id', '$Pregnancies', '$Glucose')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil dimasukkan: $Kehamilan<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    fclose($handle); // Tutup file CSV
} else {
    echo "Gagal membuka file CSV.";
}

$conn->close(); // Tutup koneksi database
?>
