<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura_Controller extends CI_Controller {



   public function __construct(){
      parent::__construct();

      if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
		$this->load->model('Factura_Model', 'factura');
		$this->load->model('Cliente_Model', 'cliente');
		$this->load->model('Producto_Model', 'producto');
		require'assets/fpdf181/fpdf.php';
	}



    public function index()
	{   $data = $this->factura->get_facturas();
		
		$this->load->view('Dashboard/factura/factura_View', compact('data'));
	}

	public function show_factura()
	{   
          
        $facturaId = $this->uri->segment(2);
		$data = $this->factura->get_factura($facturaId);
		$detalle = $this->factura->detalle($facturaId);

         $varTotal = 0;
         $varCantidad =0;
		 for ($i=0; $i <count($detalle) ; $i++) { 
		 	$varTotal += $detalle[$i]['precioD'];
		 	$varCantidad += $detalle[$i]['cantidad'];
		 }

		$this->load->view('Dashboard/factura/facturaShow_View', compact('facturaId', 'data', 'detalle', 'varTotal', 'varCantidad'));



		//no
	}


	public function pdf_download(){
			$facturaId = $this->uri->segment(2);	
		    $data = $this->factura->get_factura($facturaId);
		    $detalle = $this->factura->detalle($facturaId);

             $varTotal = 0;
            $varCantidad =0;
		    for ($i=0; $i <count($detalle) ; $i++) { 
		 	$varTotal += $detalle[$i]['precioD'];
		 	$varCantidad += $detalle[$i]['cantidad'];
		     }


              $pdf = new FPDF();
			   $pdf->AddPage();


               $pdf->SetFont('Arial', 'I', 12);
                 $pdf->Ln(17);
               $pdf->Cell(700,85,$pdf->Image( base_url().'assets/images/icon/logo.png',10,20,40),0,0,'C');
		       $pdf->Cell(25, 10, '# de factura:', 0);
			   $pdf->Cell(160, 10, $facturaId, 0);
               $pdf->Ln(7);

               $pdf->SetFont('Arial', 'I', 12);
               $pdf->Cell(15, 10, 'Ciente:', 0);
			   $pdf->Cell(173, 10, $data[0]['nombre'], 0);
               $pdf->Ln(10);

               $pdf->SetFont('Arial', 'I', 10);
               $pdf->Cell(29, 10, 'Fecha de factura:', 0);
			   $pdf->Cell(35, 10, $data[0]['fecha'], 0);

			   $pdf->Cell(23, 10, 'Tipo de pago:', 0);
			   $pdf->Cell(32, 10, $data[0]['nombreE'], 0);

			   $pdf->Cell(30, 10, 'Fecha nacimiento:', 0);
			   $pdf->Cell(30, 10, $data[0]['fecha_nacimiento'], 0);
               $pdf->Ln(5);


               $pdf->Cell(14, 10, 'Correo:', 0);
			   $pdf->Cell(49, 10, $data[0]['email'], 0);

			   $pdf->Cell(20, 10, 'Residencia:', 0);
			   $pdf->Cell(100, 10, $data[0]['direccion'], 0);

               $pdf->Ln(15);



               $pdf->Cell(130, 10, 'Productos', 0);
               $pdf->Ln(10);



			    $pdf->SetFont('Arial', 'B', 9);
			    $pdf->Cell(12, 10, '#', 1);
				$pdf->Cell(90, 10, 'Producto', 1);
				$pdf->Cell(25, 10, 'cantidad', 1);
				$pdf->Cell(25, 10, 'Precio unidad' , 1);
				$pdf->Cell(25, 10, 'Precio total', 1);
				$pdf->Ln(10);

		      for($i=0; $i < count($detalle); $i++){
	            $pdf->Cell(12, 10, ($i+1) , 1);
				$pdf->Cell(90, 10, $detalle[$i]['nombreP'], 1);
				$pdf->Cell(25, 10, $detalle[$i]['cantidad'], 1);
				$pdf->Cell(25, 10, $detalle[$i]['precio'] . ' $ ', 1);
				$pdf->Cell(25, 10, $detalle[$i]['precioD'] . ' $ ', 1);
				 $pdf->Ln(10);
		       }
		        $pdf->Cell(74, 10, '', 0);
				$pdf->Cell(28, 10, 'Total productos:', 0);
				$pdf->Cell(25, 10, $varCantidad, 1);
				$pdf->Cell(25, 10, 'Total a pagar:' , 0);
				$pdf->Cell(25, 10, $varTotal . " $ ", 1);
			   $pdf->Output($facturaId."-".$data[0]['nombre'].'.pdf', "D");
	}

	public function pdf(){
		    $facturaId = $this->uri->segment(2);	
		    $data = $this->factura->get_factura($facturaId);
		    $detalle = $this->factura->detalle($facturaId);

             $varTotal = 0;
            $varCantidad =0;
		    for ($i=0; $i <count($detalle) ; $i++) { 
		 	$varTotal += $detalle[$i]['precioD'];
		 	$varCantidad += $detalle[$i]['cantidad'];
		     }


              $pdf = new FPDF();
			   $pdf->AddPage();


               $pdf->SetFont('Arial', 'I', 12);
               $pdf->Ln(17);
               $pdf->Cell(700,85,$pdf->Image( base_url().'assets/images/icon/logo.png',10,20,40),0,0,'C');
		       $pdf->Cell(25, 10, '# de factura:', 0);
			   $pdf->Cell(160, 10, $facturaId, 0);
               $pdf->Ln(7);

               $pdf->SetFont('Arial', 'I', 12);
               $pdf->Cell(15, 10, 'Ciente:', 0);
			   $pdf->Cell(173, 10, $data[0]['nombre'], 0);
               $pdf->Ln(10);

               $pdf->SetFont('Arial', 'I', 10);
               $pdf->Cell(29, 10, 'Fecha de factura:', 0);
			   $pdf->Cell(35, 10, $data[0]['fecha'], 0);

			   $pdf->Cell(23, 10, 'Tipo de pago:', 0);
			   $pdf->Cell(32, 10, $data[0]['nombreE'], 0);

			   $pdf->Cell(30, 10, 'Fecha nacimiento:', 0);
			   $pdf->Cell(30, 10, $data[0]['fecha_nacimiento'], 0);
               $pdf->Ln(5);


               $pdf->Cell(14, 10, 'Correo:', 0);
			   $pdf->Cell(49, 10, $data[0]['email'], 0);

			   $pdf->Cell(20, 10, 'Residencia:', 0);
			   $pdf->Cell(100, 10, $data[0]['direccion'], 0);

               $pdf->Ln(15);



               $pdf->Cell(130, 10, 'Productos', 0);
               $pdf->Ln(10);



			    $pdf->SetFont('Arial', 'B', 9);
			    $pdf->Cell(12, 10, '#', 1);
				$pdf->Cell(90, 10, 'Producto', 1);
				$pdf->Cell(25, 10, 'cantidad', 1);
				$pdf->Cell(25, 10, 'Precio unidad' , 1);
				$pdf->Cell(25, 10, 'Precio total', 1);
				$pdf->Ln(10);

		      for($i=0; $i < count($detalle); $i++){
	            $pdf->Cell(12, 10, ($i+1) , 1);
				$pdf->Cell(90, 10, $detalle[$i]['nombreP'], 1);
				$pdf->Cell(25, 10, $detalle[$i]['cantidad'], 1);
				$pdf->Cell(25, 10, $detalle[$i]['precio'] . ' $ ', 1);
				$pdf->Cell(25, 10, $detalle[$i]['precioD'] . ' $ ', 1);
				 $pdf->Ln(10);
		       }
		        $pdf->Cell(74, 10, '', 0);
				$pdf->Cell(28, 10, 'Total productos:', 0);
				$pdf->Cell(25, 10, $varCantidad, 1);
				$pdf->Cell(25, 10, 'Total a pagar:' , 0);
				$pdf->Cell(25, 10, $varTotal . " $ ", 1);
			   $pdf->Output();
	}

	
	

	public function add_view(){
		$code = $this->generate_code();
		$factura = $this->generate_factura();
		$this->load->view('Dashboard/factura/facturaAdd_View' , compact('code' , 'factura'));
	}

	public function search_cliente(){
       $varNombre = filter_input(INPUT_POST,'dato');
       $data = $this->cliente->search_($varNombre);
        echo json_encode($data);
	}

	public function get_cliente(){
       $varNombre = filter_input(INPUT_POST,'dato');
       $data = $this->cliente->get_cliente($varNombre);
        echo json_encode($data);
	}

	public function get_products(){
        $data = $this->producto->get_products_simple();
        echo json_encode($data);
	}


    public function get_tipoPago(){
    	$data = $this->factura->get_tipo();
    	echo json_encode($data);
    }

    public function search_factura(){
       $varNombre = filter_input(INPUT_POST,'dato');
       $data = $this->factura->get_factura($varNombre);
        echo json_encode($data);
	}

	
	function generate_code() { //generamos ID para la compra FISICA
    $uno = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
		$number = rand(1000000, 9999999). "-" . rand(1000, 9999);
		$variable = "cliente-". $uno . "-" . $number;
		return $variable;

    }

    function generate_factura() { //generamos ID para la compra FISICA
    $uno = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
		$number = rand(10000, 99999). "-" . rand(1000, 9999);
		$variable = "factura-". $uno . "-" . $number;
		return $variable;

    }


	  public function add(){

	  	$numeroProductos =  $this->input->post('softwareCONT');

	  	
        $clienteIF =  $this->input->post('si_no'); //determina si es cliente nuevo o ya esta registrado


        if($clienteIF == 0 ){
          //nuevo
             $cliente = array(
             	'id_cliente' => $this->input->post('CodeCliente'),
             	'nombre' => $this->input->post('nombreClienteNuevo'),
             	'direccion' => $this->input->post('direccionClienteNuevo'),
             	'fecha_nacimiento' => $this->input->post('fechaClienteNuevo'),
             	'telefono' => $this->input->post('numeroClienteNuevo'),
             	'email' => $this->input->post('correoClienteNuevo'),
             );
             $this->factura->add('cliente', $cliente); 
        }


          $factura = array(
             'num_factura' => $this->input->post('facturaClienteNuevo'),
             'fecha' => $this->input->post('fechafactura'),
             'cliente_id' => $this->input->post('CodeCliente'),
             'num_pago_id' =>  $this->input->post('tipopago')
            );
            $this->factura->add('factura', $factura);



          for ($i=11; $i <$numeroProductos+11 ; $i++) { 
	  		$detalle = array(
               'factura_id' => $this->input->post('facturaClienteNuevo') ,
               'producto_id' => $this->input->post($i.'-producto'),
               'cantidad' => $this->input->post($i.'-cantidad'),
               'precioD' => $this->input->post($i.'-precio'),
	  		);

	  		print_r($detalle);
	  		 $this->factura->add('detalle', $detalle);

	  		 $pro = $this->producto->get_product_where($this->input->post($i.'-producto'));

	  		 $up = array(
	  		 	'stock' => $pro[0]['stock'] -$this->input->post($i.'-cantidad'),
	  		 );

	  		$this->producto->edit_($up,$this->input->post($i.'-producto') );
	 
	      }

		$this->session->set_flashdata('facturaSuccess', 'Factura agregada correctamente');
		redirect(base_url().'show-factura/'.$this->input->post('facturaClienteNuevo'));
	}

	


}
