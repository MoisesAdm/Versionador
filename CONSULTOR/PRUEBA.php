<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página Web</title>

    <!-- Incluye los estilos de Bootstrap (CSS) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <!-- Tu estilo CSS personalizado -->
    <style>
     body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Esto asegura que el cuerpo ocupe toda la altura de la ventana */
    margin: 0; /* Elimina los márgenes predeterminados del cuerpo */
}
    </style>
</head>
<body>
  <form method="POST">
    <!-- Selector para elegir el mes -->
    <label for="mes">Selecciona un mes:</label>
    <select name="mes" id="mes">
        <option value="Enero">Enero</option>
        <option value="Febrero">Febrero</option>
        <option value="Marzo">Marzo</option>
        <option value="Abril">Abril</option>
        <option value="Mayo">Mayo</option>
        <option value="Junio">Junio</option>
        <option value="Julio">Julio</option>
        <option value="Agosto">Agosto</option>
        <option value="Septiembre">Septiembre</option>
        <option value="Octubre">Octubre</option>
        <option value="Noviembre">Noviembre</option>
        <option value="Diciembre">Diciembre</option>
    </select>
    <br>

  <div><script>
    function calcule2(){
    var i=0; for (i=0;i<= 48;i++) {calcule();}} 
    function calcule(){ 
    Colectivas.H6.value=(Math.round((parseFloat(Colectivas.C6.value)+parseFloat(Colectivas.D6.value)+parseFloat(Colectivas.E6.value)+parseFloat(Colectivas.F6.value)+parseFloat(Colectivas.G6.value))* 100))/ 100 ; 
    Colectivas.H7.value=(Math.round((parseFloat(Colectivas.C7.value)+parseFloat(Colectivas.D7.value)+parseFloat(Colectivas.E7.value)+parseFloat(Colectivas.F7.value)+parseFloat(Colectivas.G7.value))* 100))/ 100 ; 
    Colectivas.H8.value=(Math.round((parseFloat(Colectivas.C8.value)+parseFloat(Colectivas.D8.value)+parseFloat(Colectivas.E8.value)+parseFloat(Colectivas.F8.value)+parseFloat(Colectivas.G8.value))* 100))/ 100 ; 
    Colectivas.H9.value=(Math.round((parseFloat(Colectivas.C9.value)+parseFloat(Colectivas.D9.value)+parseFloat(Colectivas.E9.value)+parseFloat(Colectivas.F9.value)+parseFloat(Colectivas.G9.value))* 100))/ 100 ; 
    Colectivas.H10.value=(Math.round((parseFloat(Colectivas.C10.value)+parseFloat(Colectivas.D10.value)+parseFloat(Colectivas.E10.value)+parseFloat(Colectivas.F10.value)+parseFloat(Colectivas.G10.value))* 100))/ 100 ; 
    Colectivas.H11.value=(Math.round((parseFloat(Colectivas.C11.value)+parseFloat(Colectivas.D11.value)+parseFloat(Colectivas.E11.value)+parseFloat(Colectivas.F11.value)+parseFloat(Colectivas.G11.value))* 100))/ 100 ; 
    Colectivas.H12.value=(Math.round((parseFloat(Colectivas.C12.value)+parseFloat(Colectivas.D12.value)+parseFloat(Colectivas.E12.value)+parseFloat(Colectivas.F12.value)+parseFloat(Colectivas.G12.value))* 100))/ 100 ; 
    Colectivas.H13.value=(Math.round((parseFloat(Colectivas.C13.value)+parseFloat(Colectivas.D13.value)+parseFloat(Colectivas.E13.value)+parseFloat(Colectivas.F13.value)+parseFloat(Colectivas.G13.value))* 100))/ 100 ; 
    Colectivas.C14.value=(Math.round((parseFloat(Colectivas.C6.value)+parseFloat(Colectivas.C7.value)+parseFloat(Colectivas.C8.value)+parseFloat(Colectivas.C9.value)+parseFloat(Colectivas.C10.value)+parseFloat(Colectivas.C11.value)+parseFloat(Colectivas.C12.value)+parseFloat(Colectivas.C13.value))* 100))/ 100 ; 
    Colectivas.D14.value=(Math.round((parseFloat(Colectivas.D6.value)+parseFloat(Colectivas.D7.value)+parseFloat(Colectivas.D8.value)+parseFloat(Colectivas.D9.value)+parseFloat(Colectivas.D10.value)+parseFloat(Colectivas.D11.value)+parseFloat(Colectivas.D12.value)+parseFloat(Colectivas.D13.value))* 100))/ 100 ; 
    Colectivas.E14.value=(Math.round((parseFloat(Colectivas.E6.value)+parseFloat(Colectivas.E7.value)+parseFloat(Colectivas.E8.value)+parseFloat(Colectivas.E9.value)+parseFloat(Colectivas.E10.value)+parseFloat(Colectivas.E11.value)+parseFloat(Colectivas.E12.value)+parseFloat(Colectivas.E13.value))* 100))/ 100 ; 
    Colectivas.F14.value=(Math.round((parseFloat(Colectivas.F6.value)+parseFloat(Colectivas.F7.value)+parseFloat(Colectivas.F8.value)+parseFloat(Colectivas.F9.value)+parseFloat(Colectivas.F10.value)+parseFloat(Colectivas.F11.value)+parseFloat(Colectivas.F12.value)+parseFloat(Colectivas.F13.value))* 100))/ 100 ; 
    Colectivas.G14.value=(Math.round((parseFloat(Colectivas.G6.value)+parseFloat(Colectivas.G7.value)+parseFloat(Colectivas.G8.value)+parseFloat(Colectivas.G9.value)+parseFloat(Colectivas.G10.value)+parseFloat(Colectivas.G11.value)+parseFloat(Colectivas.G12.value)+parseFloat(Colectivas.G13.value))* 100))/ 100 ; 
    Colectivas.H14.value=(Math.round((parseFloat(Colectivas.C14.value)+parseFloat(Colectivas.D14.value)+parseFloat(Colectivas.E14.value)+parseFloat(Colectivas.F14.value)+parseFloat(Colectivas.G14.value))* 100))/ 100 ; 
    Colectivas.C16.value=(parseFloat(Colectivas.H7.value)+parseFloat(Colectivas.H8.value)+parseFloat(Colectivas.H9.value)+parseFloat(Colectivas.H10.value)+parseFloat(Colectivas.H11.value)+parseFloat(Colectivas.H12.value)+parseFloat(Colectivas.H13.value))*10/parseFloat(Colectivas.H6.value) ; 
    }
    </script>
    
    <form name="Colectivas">
    <table border="0" margin="0" padding="0" cellspacing="0" cellpadding="0"><tr height=" 24.99375px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 16px; font-family:Calibri; color:#000000; font-weight: bold; text-align: left; ">Código Contribuyente:</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">1</td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 16px; font-family:Calibri; color:#000000; font-weight: bold; text-align: left; ">Contribuyente:</td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 16px; font-family:Calibri; color:#000000; font-weight: bold; text-align: left; ">  Colectivas</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: 0px; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 14px; font-family:Calibri; color:#000000; text-align: right; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: 0px; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: 0px; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: 0px; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#70AD47; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">Conceptos</td>
    <td style="height:20px; width: 116.8px; background-color:#70AD47; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">1ra semana</td>
    <td style="height:20px; width: 133.517px; background-color:#70AD47; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">2da semana</td>
    <td style="height:20px; width: 131.4px; background-color:#70AD47; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">3ra semana</td>
    <td style="height:20px; width: 130.378px; background-color:#70AD47; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">4ta semana</td>
    <td style="height:20px; width: 116.8px; background-color:#70AD47; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">5ta semana</td>
    <td style="height:20px; width: 116.8px; background-color:#70AD47; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">Total Mensual</td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Ofr. Esc. Sab. </td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C6" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D6" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E6" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F6" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G6" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H6" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Ofr. 2do Serv.</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C7" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D7" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E7" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F7" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G7" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H7" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Ofr. Soc. de Jóv</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C8" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D8" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E8" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F8" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G8" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H8" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Santa Cena</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C9" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D9" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E9" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F9" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G9" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H9" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Esc. Sab. Especial</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C10" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D10" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E10" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F10" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G10" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H10" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Sem. de Oración</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C11" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D11" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E11" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F11" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G11" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H11" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Nombre del Proyecto</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C12" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D12" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E12" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F12" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G12" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H12" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Tercera Persona</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C13" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D13" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E13" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F13" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G13" value="0" size="8" style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H13" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 14px; font-family:Calibri; color:#000000; font-weight: bold; text-align: center; ">Total Semanal </td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C14" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="D14" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 133.517px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="E14" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 131.4px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="F14" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 130.378px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="G14" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="H14" value="0" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    </tr>
    <tr height=" 19.995px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: solid 1px #000000; border-left: 0px; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">El % en ofrenda por usted es de</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFF00; border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "><input type="text" onchange="calcule2()" name="C16" value="" size="8"disabled="disabled"  style="background-color: transparent; border:0px; height: 20.99475px; width: 116.8px; text-align: center; font-size: 13px; font-family:Calibri; color:#000000; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: solid 1px #000000; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; "></td>
    </tr>
    <tr height=" 20.99475px;" style="border:0px;" >
    <td style="height:20px; width: 219px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 14px; font-family:Calibri; color:#000000; text-align: left; ">Nunca dejemos de ser generosos</td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: solid 1px #000000; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 133.517px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 131.4px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 130.378px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: center; "></td>
    <td style="height:20px; width: 116.8px; background-color:#FFFFFF; border-top: 0px; border-bottom: 0px; border-right: 0px; border-left: 0px; font-size: 13px; font-family:Calibri; color:#000000; text-align: left; "></td>
    </tr>
    </table>
    <input type="submit" name="guardar" value="Guardar y Mostrar">
    </form>
    </div>
    

    <!-- Incluye los scripts de Bootstrap (JavaScript) al final del cuerpo del documento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    // Procesar los datos cuando se envía el formulario
    if (isset($_POST['guardar'])) {
        // Obtener los valores del formulario
        $mes = $_POST['mes'];
        $h6 = $_POST['H6'];
        $h7 = $_POST['H7'];
        $h8 = $_POST['H8'];
        $h9 = $_POST['H9'];
        $h10 = $_POST['H10'];
        $h11 = $_POST['H11'];
        $h12 = $_POST['H12'];
        // Agrega más variables para otros campos si es necesario

        // Mostrar los datos en una tabla
        echo "<table border='1'>
                <tr>
                    <th>Mes</th>
                    <th>Ofr. Esc. Sab.</th>
                    <th>Ofr. 2do Serv.</th>
                    <th>Ofr. Soc. de Jóv</th>
                    <th>Santa Cena</th>
                    <th>Esc. Sab. Especial</th>
                    <th>Sem. de Oración</th>
                    <th>Nombre del Proyecto</th>
                    <th>Tercera Persona</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>$mes</td>
                    <td>$h6</td>
                    <td>$h7</td>
                    <td>$h8</td>
                    <td>$h9</td>
                    <td>$h10</td>
                    <td>$h11</td>
                    <td>$h12</td>
                    <!-- Agrega más celdas para otros campos si es necesario -->
                    <td>TOTAL</td> <!-- Puedes calcular el total aquí -->
                </tr>
            </table>";
    }
    ?>
</body>
</html>

