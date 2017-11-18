   function cliente(_param) {
       document.getElementById("bcliente").style.visibility = _param;

   }

   function pedido_ven(d) {
       document.getElementById("venderpedido").style.visibility = d;
   }

   function producto(_param) {
       document.getElementById("vemer2").style.visibility = _param;

   }

   function stock(_param) {
       document.getElementById("vemer3").style.visibility = _param;

   }

   function getdato(x) {


       var n = document.getElementById("TablaCliente").rows[x].cells[1].innerText;
       var rzsc = document.getElementById("TablaCliente").rows[x].cells[2].innerText;
       var i = document.getElementById("TablaCliente").rows[x].cells[0].innerText;

       document.getElementById("idcliente").value = i;
       if (n.length < 1) {
           document.getElementById("cnom").value = rzsc;
       } else {
           document.getElementById("cnom").value = n;
       }
   }

   function getdatopedido(x, clie, fe, codcar) {
       var cod = document.getElementById("tblpedido").rows[x].cells[0].innerText;
       var u = document.getElementById("tblpedido").rows[x].cells[1].innerText;
       var nom = document.getElementById("tblpedido").rows[x].cells[2].innerText;
       var tipo = document.getElementById("tblpedido").rows[x].cells[3].innerText;
       var tota = document.getElementById("tblpedido").rows[x].cells[4].innerText;
       document.getElementById("pedi_cod").value = cod;
       document.getElementById("pedi_clie").value = nom;
       document.getElementById("pedi_comp").value = tipo;
       document.getElementById("pedi_tot").value = tota;
       document.getElementById("p_cod").value = clie;
       document.getElementById("p_usu").value = u;
       document.getElementById("p_fecha").value = fe;
       document.getElementById("p_codcar").value = codcar;
   }

   function getdatoprod(x) {

       var n = document.getElementById("tbl2").rows[x].cells[1].innerText;
       var mx = document.getElementById("tbl2").rows[x].cells[6].innerText;
       var idt = document.getElementById("tbl2").rows[x].cells[0].innerText;
       var descri = document.getElementById("tbl2").rows[x].cells[2].innerText;
       var puni = document.getElementById("tbl2").rows[x].cells[4].innerText;
       var pblo = document.getElementById("tbl2").rows[x].cells[5].innerText;
       var guia = document.getElementById("tbl2").rows[x].cells[8].innerText;
       var provee = document.getElementById("tbl2").rows[x].cells[9].innerText;
       var fechareg = document.getElementById("tbl2").rows[x].cells[10].innerText;

       document.getElementById("pnom").value = n;
       document.getElementById("numberprod").setAttribute("max", mx);
       document.getElementById("numberprod").setAttribute("min", 1);
       document.getElementById("numberprod").setAttribute("placeholder", "Stock:" + mx);
       document.getElementById("idpr").value = idt;
       document.getElementById("descripcion").value = descri;
       document.getElementById("preuni").value = puni;
       document.getElementById("preblo").value = pblo;
       document.getElementById("prostock").value = mx;
       document.getElementById("guiarem").value = guia;
       document.getElementById("nomproveedor").value = provee;
       document.getElementById("fechareg").value = fechareg;
   }

   function recargar() {
       window.location.reload(true);
   }

   function buscar(text, tabla) {
       var tableReg = document.getElementById(tabla);
       var searchText = document.getElementById(text).value.toLowerCase();
       var cellsOfRow = "";
       var found = false;
       var compareWith = "";

       // Recorremos todas las filas con contenido de la tabla
       for (var i = 1; i < tableReg.rows.length; i++) {
           cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
           found = false;
           // Recorremos todas las celdas
           for (var j = 0; j < cellsOfRow.length && !found; j++) {
               compareWith = cellsOfRow[j].innerHTML.toLowerCase();
               // Buscamos el texto en el contenido de la celda
               if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                   found = true;
               }
           }
           if (found) {
               tableReg.rows[i].style.display = '';
           } else {
               // si no ha encontrado ninguna coincidencia, esconde la
               // fila de la tabla
               tableReg.rows[i].style.display = 'none';
           }
       }

   }

   function act_pedido() {
       $.ajax({
           type: 'POST',
           url: 'pedido/trae_pedido.php',
           dataType: 'json',
           success: function (pedido) {
               var valor = eval(pedido);
               var cont = 0;

               for (var i in valor) {
                   cont++;
               }
               var tabla = document.getElementById('tblpedido');
               var i = 1;
               while (i <= cont) {
                   var found = 1;
                   for (var t = 1; t < tabla.rows.length; t++) {
                       var id = document.getElementById('tblpedido').rows[t].cells[0].innerText;
                       if (valor[i - 1].pedido == id) {
                           found = 0;
                       }
                   }
                   if (found == 1) {
                       var fila = tabla.insertRow(i + 1);
                       fila.insertCell(0).innerHTML = valor[i - 1].pedido;
                       fila.insertCell(1).innerHTML = valor[i - 1].usuario;
                       fila.insertCell(2).innerHTML = valor[i - 1].cliente;
                       fila.insertCell(3).innerHTML = valor[i - 1].tipo;
                       fila.insertCell(4).innerHTML = valor[i - 1].total;
                       fila.insertCell(5).innerHTML = valor[i - 1].hora;
                       fila.insertCell(6).innerHTML = valor[i - 1].fecha;
                       var s = i + 1;
                       fila.insertCell(7).innerHTML = "<input type='button' value='Vender' onclick=script:getdatopedido('" + s + "','" + valor[i - 1].pedido + "','" + valor[i - 1].fecha + "','" + valor[i - 1].carrito + "');pedido_ven('visible')>";
                   }
                   i++;
               }
           }
       });

       // setTimeout('act_pedido()',3000);
   }

   function LlenarTabla() {

       $.ajax({
           type: 'POST',
           url: 'php/datosCliente_ajax.php',
           dataType: 'json',
           success: function (pedido) {

               var valor = eval(pedido);
               var cont = 0;

               for (var i in valor) {
                   cont++;
               }
               var tabla = document.getElementById('TablaCliente');
               var i;
               for (i = 0; i <= cont; i++) {
                   var fila = tabla.insertRow(i + 1);
                   fila.insertCell(0).innerHTML = valor[i].ID;
                   fila.insertCell(1).innerHTML = valor[i].NOMBRE;
                   fila.insertCell(2).innerHTML = valor[i].RAZON_SOCIAL;
                   fila.insertCell(3).innerHTML = valor[i].DNI;
                   fila.insertCell(4).innerHTML = valor[i].RUC;
                   fila.insertCell(5).innerHTML = valor[i].DIRECCION;
                   fila.insertCell(6).innerHTML = valor[i].TELEFONO;
                   var s = i + 1;
                   fila.insertCell(7).innerHTML = "<button type='button' class='btn btn-info' onclick=script:getdato('" + s + "')><span class='glyphicon glyphicon-ok-circle'></span></button>";
               }
           },
           error: function (xhr, ajaxOptions, thrownError) {
               alert("Error!!!");
           }
       });
   }

   function LlenarTablaProducto() {

       $.ajax({
           type: 'POST',
           url: 'php/datosProducto_ajax.php',
           dataType: 'json',
           success: function (pedido) {

               var valor = eval(pedido);
               var cont = 0;

               for (var i in valor) {
                   cont++;
               }
               var tabla = document.getElementById('tbl2');
               var i;
               for (i = 0; i <= cont; i++) {
                   var fila = tabla.insertRow(i + 1);
                   fila.insertCell(0).innerHTML = valor[i].ID;
                   fila.insertCell(1).innerHTML = valor[i].NOMBRE;
                   fila.insertCell(2).innerHTML = valor[i].DESCRIPCION;
                   fila.insertCell(3).innerHTML = valor[i].MARCA;
                   fila.insertCell(4).innerHTML = valor[i].P_U;
                   fila.insertCell(5).innerHTML = valor[i].P_B;
                   fila.insertCell(6).innerHTML = valor[i].STOCK;
                   fila.insertCell(7).innerHTML = valor[i].TIPO;
                   fila.insertCell(8).innerHTML = valor[i].G_R;
                   fila.insertCell(9).innerHTML = valor[i].PROVEEDOR;
                   fila.insertCell(10).innerHTML = valor[i].FECHA;
                   var s = i + 1;
                   if (valor[i].TIPO == "ESPECIAL") {
                       fila.insertCell(11).innerHTML = "<td><a type='button' class='btn btn-info' href='ver_almacen.php?valor_id=" + valor[i].ID + "&tipoprod=" + valor[i].TIPO + "&op=1'><span class='glyphicon glyphicon-ok-circle'></span>VER</a></td>"
                   }
                   if (valor[i].TIPO == "NORMAL") {
                       fila.insertCell(11).innerHTML = "<button data-dismiss='modal' type='button' class='btn btn-info' onclick=script:getdatoprod('" + s + "')><span class='glyphicon glyphicon-ok-circle'></span></button>";
                   }
               }
           },
           error: function (xhr, ajaxOptions, thrownError) {
               alert("Error!!!");
           }
       });
   }


   //$("#btnCagar").click(function () {

   //});

   function calcular() {
       var total = parseFloat(document.getElementById('c_total').value);
       var ds = parseFloat(document.getElementById("dsct").value);
       var op = (total * ds) / 100;
       var mf = total - op;
       document.getElementById('pago').placeholder = mf;
   }

   function calcular_p() {
       var total = parseFloat(document.getElementById('pedi_tot').value);
       var ds = parseFloat(document.getElementById("dsct_1").value);
       var op = (total * ds) / 100;
       var mf = total - op;
       document.getElementById('pedi_pag').placeholder = mf;
       document.getElementById('descontado').value = mf;
   }

   function comp_clie() {
       var tipo = document.getElementById('dtlist').value;
       if (tipo == "BOLETA") {

       }
       if (tipo == "FACTURA") {
           alert("Seleccione un cliente del buscador para realizar factura");
       }
       if (tipo == "") {
           alert("Seleccione un tipo de comprobante antes");
       }
   }
