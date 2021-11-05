<?php
ob_start();
require_once (WPC_RUTA. 'admin/libs/fpdf.php');
class PDF extends FPDF{
    function  Header(){
        //tipo de letra
        $this -> SetFont('Arial', 'B', 15);
        //Titulo
        $this -> Cell(200,10, utf8_decode("Registros"), 0,1,'C');
        //Salto de linea
        $this -> Ln(30);
        //Cabecera de la tabla
        $this -> Cell(50,10, 'Nombre',1,0,'C',0);
        $this -> Cell(30,10,'Fecha',1,0,'C',0);
        $this -> Cell(30,10,'Categoria',1,0,'C',0);
        $this -> Cell(30,10,'Usuario',1,1,'C',0);
    }

    function Footer(){
        //Posición a 1.5cm del final
        $this ->SetY(-15);
        //Tamaño de la paginacion
        $this -> SetFont('Arial','I',8);
        //Numero de pagina
        $this -> Cell(0,10,utf8_decode('Página' ).$this->PageNo().'/{nb}',0,0,'C');
    }
}
class ReportesC{
    public function RealizarReportesC(){
        $respuesta = ReportesM::RealizarReportesM();
        $pdf = new PDF();
        $pdf -> AliasNbPages();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial', '', 12);
        foreach($respuesta as $key => $row){
            $pdf -> Cell(50,10,utf8_decode($row['nombre']),1,0,'C',0);
            $pdf -> Cell(30,10,$row['fecha'],1,0,'C',0);
            $pdf -> Cell(30,10, utf8_decode($row['nombre_c']),1,0,'C',0);
            $pdf -> Cell(30,10,utf8_decode($row['user_nicename']),1,1,'C',0);
        }
        $pdf-> Output();
        ob_end_flush();
    }
}
?>