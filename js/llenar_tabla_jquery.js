$(document).on("ready",function(){
    listar();
    
});

var listar=function(){
    var table=$("#example").DataTable({
        "ajax" :{
            "method":"POST",
            "URL":"LlenarTablaProductos_jquery.php"
        },
        "columns":[
            {"data":"COD",
             "data":"NOMBRE",
             "data":"DESCRIPCION",
             "data":"MARCA",
             "data":"P.U.",
             "data":"PRECIOS",
             "data":"STOCK",
             "data":"PRECIOS"}
        ]
    });
}