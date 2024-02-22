<?php
require('TCPDF/tcpdf.php');
class create_pdf extends controller
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function pdf()
    {
        $this->db->query('SELECT * FROM transaksi INNER JOIN item on transaksi.id_item = item.id_item');
        $transaksi = $this->db->resultSet();

        // Create new PDF instance
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

        // Set document information
        $pdf->SetCreator('Your Name');
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Table to PDF');
        $pdf->SetSubject('Converting Table to PDF');

        // Add a page
        $pdf->AddPage();

        // Generate the table heading
        $pdf->SetFont('helvetica', 'B', 16); // Set font for the heading
        $pdf->Cell(100, 7, 'LIST TRANSAKSI', 0, 1); // Create cell for the heading with centered alignment
        $pdf->Ln(10); // Add some vertical spacing

        // Generate the table header
        $pdf->SetFont('helvetica', 'B', 6); // Set font for the header
        $pdf->Cell(5, 5, 'No', 1, 0, 'C'); // No
        $pdf->Cell(15, 5, 'ID Transaksi', 1, 0, 'C'); // NIP
        $pdf->Cell(18, 5, 'NAMA BUKU', 1, 0, 'C'); // ID UNIT KERJA
        $pdf->Cell(15, 5, 'TANGGAL', 1, 0, 'C'); // ID JABATAN
        $pdf->Cell(17, 5, 'JUMLAH', 1, 0, 'C'); // ID PENGGUNA
        $pdf->Cell(17, 5, 'HARGA', 1, 0, 'C'); // ID PENGGUNA
        $pdf->Cell(20, 5, 'TOTAL', 1, 0, 'C'); // Nama Pegawai
        $pdf->Ln(); // Move to the next line
        if (isset($transaksi)) {
            $no = 1;
            foreach ($transaksi as $row) {
                $pdf->Cell(5, 5, $no++, 1, 0); // No
                $pdf->Cell(15, 5, $row['id_transaksi'], 1, 0); // NIP
                $pdf->Cell(18, 5, $row['nama_buku'], 1, 0); // ID UNIT KERJA
                $pdf->Cell(15, 5, $row['Tanggal'], 1, 0); // ID JABATAN
                $pdf->Cell(17, 5, $row['jumlah'], 1, 0); // ID PENGGUNA
                $pdf->Cell(17, 5, $row['harga'], 1, 0); // ID PENGGUNA
                $pdf->Cell(20, 5, $row['jumlah'] * $row['harga'], 1, 0); // Nama pegawai
                $pdf->Ln(); // Move to the next line
            }
        } else {
            $pdf->Cell(0, 10, 'Tidak ada data pegawai.', 1, 0, 'C');
        }

        // Close and output PDF document
        $pdf->Output('table.pdf', 'D');

    }
}

// Query untuk mengambil data dengan limit, offset, dan pencarian
