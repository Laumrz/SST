<?php
require('fpdf/fpdf.php');

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furat_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Capturar los datos del formulario
$nombre_trabajador = $_POST['nombre_trabajador'];
$documento_trabajador = $_POST['documento_trabajador'];
$tipo_identificacion = $_POST['tipo_identificacion'];
$fecha_accidente = $_POST['fecha_accidente'];
$hora_accidente = $_POST['hora_accidente'];
$cargo_trabajador = $_POST['cargo_trabajador'];
$eps_trabajador = $_POST['eps_trabajador'];
$arl_trabajador = $_POST['arl_trabajador'];
$tipo_vinculo_laboral = $_POST['tipo_vinculo_laboral'];
$empresa_nombre = $_POST['empresa_nombre'];
$empresa_nit = $_POST['empresa_nit'];
$lugar_accidente = $_POST['lugar_accidente'];
$tipo_lesion = $_POST['tipo_lesion'];
$parte_cuerpo_afectada = $_POST['parte_cuerpo_afectada'];
$descripcion_accidente = $_POST['descripcion_accidente'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO accidentes (nombre_trabajador, documento_trabajador, tipo_identificacion, fecha_accidente, hora_accidente, cargo_trabajador, eps_trabajador, arl_trabajador, tipo_vinculo_laboral, empresa_nombre, empresa_nit, lugar_accidente, tipo_lesion, parte_cuerpo_afectada, descripcion_accidente)
        VALUES ('$nombre_trabajador', '$documento_trabajador', '$tipo_identificacion', '$fecha_accidente', '$hora_accidente', '$cargo_trabajador', '$eps_trabajador', '$arl_trabajador', '$tipo_vinculo_laboral', '$empresa_nombre', '$empresa_nit', '$lugar_accidente', '$tipo_lesion', '$parte_cuerpo_afectada', '$descripcion_accidente')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Crear el PDF usando FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Título del PDF
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'FURAT - Formato Unico de Reporte de Accidente de Trabajo', 0, 1, 'C');

// Información en formato de tabla
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);

// Cabecera de la tabla
$pdf->Cell(0, 10, 'Datos del Accidente', 0, 1, 'C');
$pdf->Ln(5);

// Tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Campo', 1);
$pdf->Cell(0, 10, 'Valor', 1);
$pdf->Ln();

// Filas de la tabla
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Empresa', 1);
$pdf->Cell(0, 10, $empresa_nombre . ' (NIT: ' . $empresa_nit . ')', 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'Trabajador', 1);
$pdf->Cell(0, 10, $nombre_trabajador . ' (ID: ' . $documento_trabajador . ', Tipo: ' . $tipo_identificacion . ')', 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'Cargo', 1);
$pdf->Cell(0, 10, $cargo_trabajador, 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'EPS', 1);
$pdf->Cell(0, 10, $eps_trabajador, 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'ARL', 1);
$pdf->Cell(0, 10, $arl_trabajador, 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'Fecha Accidente', 1);
$pdf->Cell(0, 10, $fecha_accidente, 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'Hora Accidente', 1);
$pdf->Cell(0, 10, $hora_accidente, 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'Lugar Accidente', 1);
$pdf->Cell(0, 10, $lugar_accidente, 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'Tipo Lesion', 1);
$pdf->Cell(0, 10, $tipo_lesion, 1);
$pdf->Ln();

$pdf->Cell(50, 10, 'Parte Afectada', 1);
$pdf->Cell(0, 10, $parte_cuerpo_afectada, 1);
$pdf->Ln();

// Descripción del accidente
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Descripcion del Accidente:', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, $descripcion_accidente);

// Generar el PDF
$pdf->Output('D', 'furat_' . $last_id . '.pdf');
?>
