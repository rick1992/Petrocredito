<?php
$strPageTitle = QApplication::Translate('Ventas') . ' - ' . QApplication::Translate('Nueva Venta');
require(__CONFIGURATION__ . '/header.inc.php');
?>

<script>
function printContent(el){
	/*var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;*/
        
        var myWindow=window.open('','','');
        myWindow.document.title = 'Imprimir';
        myWindow.document.write(document.getElementById(el).innerHTML);    
        myWindow.document.close();
        myWindow.focus();
        myWindow.print();
        myWindow.close();

}
</script>


 <link rel="stylesheet" href="<?php _p(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__); ?>/template/assets/vendor/asspinner/asSpinner.min.css">
<?php $this->RenderBegin(); ?>
<?php $this->objDefaultWaitIcon->Render(); ?>

<div style="display:none;">
<?php $this->lblTextImprimir->Render(); ?>  
</div>
 

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title"> <i class="site-menu-icon fa-shopping-cart" aria-hidden="true"></i> Ventas</h1>
    </div>
    <div class="page-content container-fluid">
        <!-- Panel Table Add Row -->
        <div class="panel">
           <!-- <header class="panel-heading">
                <h3 class="panel-title">Nueva Venta</h3>
            </header> -->
           

           
            <div class="panel-body" style="min-height:260px;">
                <div class="row">
                    <style>
                        .csscliente:after {
                            content: "Cliente";
                        }

                        .cssinfo:after {
                            content: "Informacion";
                        }
                        .cssprecio:after {
                            content: "Precio Total";
                        }
                        .cssdetalle:after {
                            content: "Detalle";
                        }
                        .cssproducto:after {
                            content: "Producto";
                        }
                    </style>

                    <div   class="example-wrap" style="margin-bottom: 0px;">

                        <div class="row">

                            <div class="col-sm-4 form-group " >
                                <div class="example-box cssproducto"> 
                                    <div style="background-color: #f3f7f9;padding: 10px;">
                                        <p style="font-size:12px;">POR CODIGO : </p>  
                                        <?php $this->txtCodigoProducto->Render(); ?>
                                    </div>
                                    <br>
                                    <div style="background-color: #f3f7f9;padding: 10px;">
                                        <p style="font-size:12px;">POR SCANER : </p>  
                                        <?php $this->btnScaner->Render(); ?>

                                    </div>

                                    <br>
                                    <div style="background-color: #f3f7f9;padding: 10px;">
                                        <p style="font-size:12px;">POR NOMBRE : </p>  
                                        <p><?php $this->txtColegio->Render(); ?></p>

                                        <p><?php $this->txtProducto->Render(); ?></p>

                                    </div>

                                    <br>
                                    <div style="background-color: #f3f7f9;padding: 10px;">
                                        <center>
                                            <?php $this->lblEncontrado->Render(); ?>
                                           <p> <?php $this->txtCantidad->Render(); ?> </p>
                                            
                                            <p><?php $this->btnAdd->Render(); ?></p>
                                        </center>


                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-5 form-group " >
                                <div class="example-box csscliente"> 
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon fa-text-width" aria-hidden="true" ></i>
                                                </span>
                                                <?php $this->txtDniRuc->RenderWithError(); ?>
                                            </div>                     
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon fa-newspaper-o" aria-hidden="true" ></i>
                                                </span>
                                                <?php $this->lstTipoVenta->RenderWithError(); ?>
                                            </div>                     
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon fa-font" aria-hidden="true"></i>
                                                </span>
                                                <?php $this->txtNombreCliente->RenderWithError(); ?>
                                            </div>                     
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-3 form-group " >
                                <div class="example-box cssinfo"> 

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <b> V </b>
                                                </span>
                                                <?php $this->txtNombreVendedor->RenderWithError(); ?>
                                            </div>                     
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="icon fa-bank" aria-hidden="true"></i>
                                                </span>
                                                <?php $this->txtTienda->RenderWithError(); ?>
                                            </div>                     
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-8 form-group " >
                                <div class="example-box cssdetalle">    
                                    <div style="width: 100%;"><div style="float: right;"><?php $this->lblTotal->Render(); ?></div> </div>
                                    <div style="width: 100%;overflow: auto;height: 250px;border-bottom:0px solid #CCCCCC"><?php $this->dtgVenta->Render(); ?></div>
                                    <div style="width: 100%;height: 45px;">
                                        <div style="float: left"><?php $this->btnVenderCajaDespacho->Render(); ?> </div>
                                        <div style="float: right;"> <?php $this->btnVender->Render(); ?>  </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

                <!-- End Example Basic Sort -->
            </div>
            <!-- End Panel Body -->
        </div>
        <!-- End Panel -->
    </div>
    <!-- End Container -->
</div>
<!-- End Page -->
<!-- es necesario para mostrar el dialog-->

<!-- Modal -->
<!--

<a href="javascript: void(0);" data-target="#ventaModal" data-toggle="modal">
<span class="icon wb-power" aria-hidden="true"></span>
</a>

-->
<div class="modal fade modal-3d-slit in" id="ventaModal" aria-hidden="true" aria-labelledby="examplePositionCenter"
     role="dialog" tabindex="-1"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  aria-label="Close" > <!--data-dismiss="modal"-->
                    <span aria-hidden="true">??</span>
                </button>
                <h4 class="modal-title"><?php _p("Venta Creada"); ?></h4>
            </div>
            <div class="modal-body">
                <h5><?php _p("Usted puede finalizar para empezar una nueva venta."); ?></h5>

                 
                
                
            </div>
            <div class="modal-footer">
                <?php $this->btnImprimir->Render(); ?>  
                <?php $this->btnFinalizar->Render(); ?>  
                
                <!--<button type="button" class="btn btn-raised btn-primary" ><i class="icon fa-check" aria-hidden="true"></i> Si</button>
                <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal"><i class="icon fa-close" aria-hidden="true"></i> No</button>
                -->
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->




<?php $this->RenderEnd(); ?>

<!--
                         
                                       
<div class="calculadora"  action="#" name="calculadora" id="calculadora">
<p id="textoPantalla" class="form-control"  >0</p>
<p>
<input type="button" class="largo btn btn-default "  value="Retr" onclick="retro()">
<input type="button" class="largo btn btn-default "  value="CE" onclick="borradoParcial()">
<input type="button" class="largo btn btn-default "  value="C" onclick="borradoTotal()">
</p>
<p>
<input type="button" value="7" class="corto btn btn-default" onclick="numero(7)">
<input type="button" value="8" class="corto btn btn-default" onclick="numero('8')">
<input type="button" value="9" class="corto btn btn-default" onclick="numero('9')">
<input type="button" value="/" class="corto btn btn-default" onclick="operar('/')">
<input type="button" value="Raiz" class="corto btn btn-default" onclick="raizc()">
</p>
<p>
<input type="button" value="4" class="corto btn btn-default" onclick="numero('4')">
<input type="button" value="5" class="corto btn btn-default" onclick="numero('5')">
<input type="button" value="6" class="corto btn btn-default" onclick="numero('6')">
<input type="button" value="*" class="corto btn btn-default" onclick="operar('*')">
<input type="button" value="%" class="corto btn btn-default" onclick="porcent()">
</p>
<p>
<input type="button" value="1" class="corto btn btn-default" onclick="numero('1')">
<input type="button" value="2" class="corto btn btn-default" onclick="numero('2')">
<input type="button" value="3" class="corto btn btn-default" onclick="numero('3')">
<input type="button" value="-" class="corto btn btn-default" onclick="operar('-')">
<input type="button" value="1/x" class="corto btn btn-default" onclick="inve()">
</p>
<p>
<input type="button" value="0" class="corto btn btn-default" onclick="numero('0')">
<input type="button" value="+/-" class="corto btn btn-default" onclick="opuest()">
<input type="button" value="." class="corto btn btn-default" onclick="numero('.')">
<input type="button" value="+" class="corto btn btn-default" onclick="operar('+')">
<input type="button" value="=" class="corto btn btn-default" onclick="igualar()">
</p>

</div>
                             
-->


<script>/*
 window.onload = function(){ //Acciones tras cargar la p??gina
 pantalla=document.getElementById("textoPantalla"); //elemento pantalla de salida
 }
 x="0"; //n??mero en pantalla
 xi=1; //iniciar n??mero en pantalla: 1=si; 0=no;
 coma=0; //estado coma decimal 0=no, 1=si;
 ni=0; //n??mero oculto o en espera.
 op="no"; //operaci??n en curso; "no" =  sin operaci??n.
 
 //mostrar n??mero en pantalla seg??n se va escribiendo:
 function numero(xx) { //recoge el n??mero pulsado en el argumento.
 if (x=="0" || xi==1  ) {	// inicializar un n??mero, 
 pantalla.innerHTML=xx; //mostrar en pantalla
 x=xx; //guardar n??mero
 if (xx==".") { //si escribimos una coma al principio del n??mero
 pantalla.innerHTML="0."; //escribimos 0.
 x=xx; //guardar n??mero
 coma=1; //cambiar estado de la coma
 }
 }
 else { //continuar escribiendo un n??mero
 if (xx=="." && coma==0) { //si escribimos una coma decimal p??r primera vez
 pantalla.innerHTML+=xx;
 x+=xx;
 coma=1; //cambiar el estado de la coma  
 }
 //si intentamos escribir una segunda coma decimal no realiza ninguna acci??n.
 else if (xx=="." && coma==1) {} 
 //Resto de casos: escribir un n??mero del 0 al 9: 	 
 else {
 pantalla.innerHTML+=xx;
 x+=xx
 }
 }
 xi=0 //el n??mero est?? iniciado y podemos ampliarlo.
 }
 function operar(s) {
 igualar() //si hay operaciones pendientes se realizan primero
 ni=x //ponemos el 1?? n??mero en "numero en espera" para poder escribir el segundo.
 op=s; //guardamos tipo de operaci??n.
 xi=1; //inicializar pantalla.
 }	
 function igualar() {
 if (op=="no") { //no hay ninguna operaci??n pendiente.
 pantalla.innerHTML=x;	//mostramos el mismo n??mero	
 }
 else { //con operaci??n pendiente resolvemos
 sl=ni+op+x; // escribimos la operaci??n en una cadena
 sol=eval(sl) //convertimos la cadena a c??digo y resolvemos
 pantalla.innerHTML=sol //mostramos la soludi??n
 x=sol; //guardamos la soluci??n
 op="no"; //ya no hayn operaciones pendientes
 xi=1; //se puede reiniciar la pantalla.
 }
 }
 function raizc() {
 x=Math.sqrt(x) //resolver ra??z cuadrada.
 pantalla.innerHTML=x; //mostrar en pantalla resultado
 op="no"; //quitar operaciones pendientes.
 xi=1; //se puede reiniciar la pantalla 
 }
 function porcent() { 
 x=x/100 //dividir por 100 el n??mero
 pantalla.innerHTML=x; //mostrar en pantalla
 igualar() //resolver y mostrar operaciones pendientes
 xi=1 //reiniciar la pantalla
 }
 function opuest() { 
 nx=Number(x); //convertir en n??mero
 nx=-nx; //cambiar de signo
 x=String(nx); //volver a convertir a cadena
 pantalla.innerHTML=x; //mostrar en pantalla.
 }
 function inve() {
 nx=Number(x);
 nx=(1/nx);
 x=String(nx);		 
 pantalla.innerHTML=x;
 xi=1; //reiniciar pantalla al pulsar otro n??mero.
 }
 
 function retro(){ //Borrar s??lo el ??ltimo n??mero escrito.
 cifras=x.length; //hayar n??mero de caracteres en pantalla
 br=x.substr(cifras-1,cifras) //describir ??ltimo caracter
 x=x.substr(0,cifras-1) //quitar el ultimo caracter
 if (x=="") {x="0";} //si ya no quedan caracteres, pondremos el 0
 if (br==".") {coma=0;} //Si el caracter quitado es la coma, se permite escribirla de nuevo.
 pantalla.innerHTML=x; //mostrar resultado en pantalla	 
 }
 function borradoParcial() {
 pantalla.innerHTML=0; //Borrado de pantalla;
 x=0;//Borrado indicador n??mero pantalla.
 coma=0;	//reiniciamos tambi??n la coma				
 }
 function borradoTotal() {
 pantalla.innerHTML=0; //poner pantalla a 0
 x="0"; //reiniciar n??mero en pantalla
 coma=0; //reiniciar estado coma decimal 
 ni=0 //indicador de n??mero oculto a 0;
 op="no" //borrar operaci??n en curso.
 }*/
</script>

<script>
    (function (document, window, $) {
        'use strict';
        $('#ventas').addClass('active open');
        $('#nuevaventa').addClass('active');
    })(document, window, jQuery);
</script>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>







<script src="<?php _p(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__); ?>/template/assets/vendor/asspinner/jquery-asSpinner.min.js"></script>
<script src="<?php _p(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__); ?>/template/assets/js/components/asspinner.min.js"></script>


</body>

</html>