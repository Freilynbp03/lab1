<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function muestra_oculta(id) {
            if (document.getElementById) { //se obtiene el id
                var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
                el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
            }
        }
        window.onload = function() {
            /*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
            muestra_oculta('contenido'); /* "contenido_a_mostrar" es el nombre que le dimos al DIV */
        }

        function muestra_oculta1(id) {
            if (document.getElementById) {
                var el = document.getElementById(id);
                el.style.display = (el.style.display == 'none') ? 'block' : 'none';
            }
        }
        window.onload = function() {
            muestra_oculta1('contenido1');
        }

        function muestra_oculta2(id) {
            if (document.getElementById) {
                var el = document.getElementById(id);
                el.style.display = (el.style.display == 'none') ? 'block' : 'none';
            }
        }
        window.onload = function() {
            muestra_oculta2('contenido2');
        }

        function muestra_oculta3(id) {
            if (document.getElementById) {
                var el = document.getElementById(id);
                el.style.display = (el.style.display == 'none') ? 'block' : 'none';
            }
        }
        window.onload = function() {
            muestra_oculta3('contenido3');
        }

        function muestra_oculta4(id) {
            if (document.getElementById) {
                var el = document.getElementById(id);
                el.style.display = (el.style.display == 'none') ? 'block' : 'none';
            }
        }
        window.onload = function() {
            muestra_oculta4('contenido4');
        }

        function muestra_oculta5(id) {
            if (document.getElementById) {
                var el = document.getElementById(id);
                el.style.display = (el.style.display == 'none') ? 'block' : 'none';
            }
        }
        window.onload = function() {
            muestra_oculta5('contenido5');
        }

        function muestra_oculta6(id) {
            if (document.getElementById) {
                var el = document.getElementById(id);
                el.style.display = (el.style.display == 'none') ? 'block' : 'none';
            }
        }
        window.onload = function() {
            muestra_oculta6('contenido6');
        }

    </script>
    <style>
        .titulo_boton {
            float: left;
            padding: 5px;
            background-color: #e6e6e6;
            width: 400px;
            font-family: helvetica;
            font-size: 16px;
            font-weight: bold;
        }

        .boton_mostrar {
            float: right;
            font-size: 12px;
            line-height: 20px;
            color: #DE7217;
        }

        #contenido {
            display: none;
            float: left;
            clear: both;
            border: 2px solid #e6e6e6;
            margin-top: 2px;
            padding: 5px;
            width: 396px;
            overflow: auto;
            font-family: helvetica;
            font-size: 14px;
            text-align: justify;

        }

        #contenido1 {
            display: none;
            float: left;
            clear: both;
            border: 2px solid #e6e6e6;
            margin-top: 2px;
            padding: 5px;
            width: 396px;
            overflow: auto;
            font-family: helvetica;
            font-size: 14px;
            text-align: justify;
        }

        #contenido2 {
            display: none;
            float: left;
            clear: both;
            border: 2px solid #e6e6e6;
            margin-top: 2px;
            padding: 5px;
            width: 396px;
            overflow: auto;
            font-family: helvetica;
            font-size: 14px;
            text-align: justify;
        }

        #contenido3 {
            display: none;
            float: left;
            clear: both;
            border: 2px solid #e6e6e6;
            margin-top: 2px;
            padding: 5px;
            width: 396px;
            overflow: auto;
            font-family: helvetica;
            font-size: 14px;
            text-align: justify;
        }

        #contenido4 {
            display: none;
            float: left;
            clear: both;
            border: 2px solid #e6e6e6;
            margin-top: 2px;
            padding: 5px;
            width: 396px;
            overflow: auto;
            font-family: helvetica;
            font-size: 14px;
            text-align: justify;
        }

        #contenido5 {
            display: none;
            float: left;
            clear: both;
            border: 2px solid #e6e6e6;
            margin-top: 2px;
            padding: 5px;
            width: 396px;
            overflow: auto;
            font-family: helvetica;
            font-size: 14px;
            text-align: justify;
        }

        #contenido6 {
            display: none;
            float: left;
            clear: both;
            border: 2px solid #e6e6e6;
            margin-top: 2px;
            padding: 5px;
            width: 396px;
            overflow: auto;
            font-family: helvetica;
            font-size: 14px;
            text-align: justify;
        }

        * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        #grad1 {
            background-color: #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA)
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E
        }

        #msform input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue
        }

        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            width: 100;
            /* height: 104; */
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgb(0 0 0 / 20%);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
            text-align: center;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

    </style>
</head>

<body>
    <div class="titulo_boton">
        REGISTRAR USUARIO
        <button type="button" class="btn btn-primary" onClick="muestra_oculta('contenido')">Mostrar</button>
        
    </div>
    <div class="titulo_boton">
        SOROLOGIA
        <a style='cursor: pointer;' onClick="muestra_oculta1('contenido1')" title="" class="boton_mostrar">Mostrar / Ocultar</a>
    </div>
    <div class="titulo_boton">
        HEMATOLOGIA
        <a style='cursor: pointer;' onClick="muestra_oculta2('contenido2')" title="" class="boton_mostrar">Mostrar / Ocultar</a>
    </div>
    <div class="titulo_boton">
        PRUEBAS ESPECILES
        <a style='cursor: pointer;' onClick="muestra_oculta3('contenido3')" title="" class="boton_mostrar">Mostrar / Ocultar</a>
    </div>
    <div class="titulo_boton">
        QUIMICA CLINICA
        <a style='cursor: pointer;' onClick="muestra_oculta3('contenido3')" title="" class="boton_mostrar">Mostrar / Ocultar</a>
    </div>
    <div class="titulo_boton">
        HEMOGRAMA
        <a style='cursor: pointer;' onClick="muestra_oculta4('contenido4')" title="" class="boton_mostrar">Mostrar / Ocultar</a>
    </div>
    <div class="titulo_boton">
        MATERIAS FECALES
        <a style='cursor: pointer;' onClick="muestra_oculta5('contenido5')" title="" class="boton_mostrar">Mostrar / Ocultar</a>
    </div>
    <div class="titulo_boton">
        SOROLOGIA
        <a style='cursor: pointer;' onClick="muestra_oculta6('contenido6')" title="" class="boton_mostrar">Mostrar / Ocultar</a>
    </div>

    <div id="contenido">
                        <fieldset>
                                <h2 class="fs-title">Registrar Paciente</h2>
                                <input type="texto" name="name" placeholder="Nombre" required />
                                <input type="text" name="lastname" placeholder="Apellido" required />
                                <input type="text" name="nss" placeholder="NSS" required />
                                <input type="text" name="age" placeholder="Edad" required />
                                <input type="text" name="phone" placeholder="Telefono" required />
                                <input type="text" name="unidad" placeholder="Unidad" required />
                                <input type="text" name="doctor" placeholder="Doctor" required />
                                <div>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Masculino">
                                        <span> Hombre </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Femenino">
                                        <span>Mujer </span>
                                    </label>
                                </div>
                        </fieldset>
    <div id="contenido1">
        <div class="form-card">
            <h2 class="fs-title">SEROLOGIA</h2>
            <input type="text" name="vdrl" placeholder="VDRL" />
            <input type="text" name="aso" placeholder="ASO" />
            <input type="text" name="pcr" placeholder="PCR" />
            <input type="text" name="factor" placeholder="Factor R" />
            <input type="text" name="gestatest" placeholder="Gestatest" />
            <input type="text" name="covid" placeholder="COVID 19" />
            <input type="text" name="fotoplasmosis" placeholder="Fotoplasmosis" />
        </div>
    </div>

    <div id="contenido2">
        <div class="form-card">
            <h2 class="fs-title">HEMATOLOGIA</h2>
            <input type="text" name="tip" placeholder="TIP. Sanguinea" />
            <input type="text" name="eritro" placeholder="Eritrocedimentacion" />
            <input type="text" name="sangria" placeholder="T. Sangria" />
            <input type="text" name="cuagulacion" placeholder="T. Cuagulacion" />
            <input type="text" name="falcemia" placeholder="Falcemia" />
        </div>
    </div>

    <div id="contenido3">
        <div class="form-card">
            <h2 class="fs-title">PRUEBAS ESPECILES</h2>
            <input type="text" name="hvi" placeholder="HIV" />
            <input type="text" name="hvc" placeholder="HVC" />
            <input type="text" name="hbsag" placeholder="HBSAG" />
        </div>
    </div>

    <div id="contenido4">
        <div class="form-card">
            <h2 class="fs-title">QUIMICA CLINICA</h2>
            <input type="text" name="acido_urico" placeholder="Acido Urico" />
            <input type="text" name="colesterol" placeholder="Colesterol" />
            <input type="text" name="colesterol_hdl" placeholder="Colesterol HDL" />
            <input type="text" name="colesterol_ldl" placeholder="Colesterol LDL" />
            <input type="text" name="creatina" placeholder="Creatina" />
            <input type="text" name="glicemia" placeholder="Glicemia" />
            <input type="text" name="trigliceridos" placeholder="Trigliceridos" />
            <input type="text" name="urea" placeholder="Urea" />
            <input type="text" name="bilirrubina_t" placeholder="Bilirrubina T" />
            <input type="text" name="bilirrubina_d" placeholder="Bilirrubina D" />
            <input type="text" name="bilirrubina_i" placeholder="Bilirubina I" />
            <input type="text" name="fosfatasa_alcalina" placeholder="Fosfatasa Alcalina" />
            <input type="text" name="fosfatasa_asida" placeholder="Fosfatasa Asida" />
            <input type="text" name="lipasa" placeholder="Lipasa" />
            <input type="text" name="tgo" placeholder="TGO U/L" />
            <input type="text" name="tgp" placeholder="TGP U/L" />
        </div>
    </div>

    <div id="contenido5">
        <div class="form-card">
            <h2 class="fs-title">HEMOGRAMA</h2>
            <input type="text" name="wbc" placeholder="WBC" />
            <input type="text" name="rbc" placeholder="RBC" />
            <input type="text" name="hgb" placeholder="HGB" />
            <input type="text" name="hct" placeholder="HCT" />
            <input type="text" name="mcv" placeholder="MCV" />
            <input type="text" name="mch" placeholder="MCH" />
            <input type="text" name="mchc" placeholder="MCHC" />
            <input type="text" name="plt" placeholder="PLT" />
        </div>
    </div>

    <div id="contenido6">
        <div class="form-card">
            <h2 class="fs-title">MATERIAS FECALES</h2>
            <input type="text" name="color" placeholder="Color" />
            <input type="text" name="consistencia" placeholder="Consistencia" />
            <input type="text" name="quistes" placeholder="Quistes" />
            <input type="text" name="larvas" placeholder="Larvas" />
            <input type="text" name="sangre" placeholder="Sangre Oculta" />
            <input type="text" name="grojos" placeholder="Globulos Rojos" />
            <input type="text" name="gblancos" placeholder="Globulos Blancos" />
            <input type="text" name="otros" placeholder="Otros" />
        </div>
    </div>

    <input type="submit" name="next" class="next action-button" value="Registrar" />
</body>
</html>
<?php /**PATH C:\laragon\www\test-project\resources\views/digitar.blade.php ENDPATH**/ ?>