<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RESULTADOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page  {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3cm 2cm 2cm;
        }
        header {
            position: relative;
            /* bottom: 0; */

            top: -10%;
            left: 0;
            right: 0;
            height: 3cm;
            background-color: #30abaf;
            color: rgb(255, 255, 255);
            text-align: center;
            line-height: 10px;
            margin: 0%;
            width: 100%;
        }
        .column {
        float: left;
        width: 30%;
        }
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        div.page_break+div.page_break {
            margin: 0%;
            page-break-before: always;

        }
    </style>
</head>
<body>
    <div class="page_break d-flex justify-content-center">
    <header>
        <br>
        <h3>Hospital Municipal de Laguna Salada</h3>
        <br>
        <h4 class="hero-text">Servicio de Laboratorio</h4>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>TABLA DE RESULTADOS</strong></h5>
            

            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="column"><h6 class="">Nombre:</h6></div>
                <div class="column"><h6 class="" style="left: 15%; margin-top:0%;"><?php echo e($item->name); ?> <?php echo e($item->lastname); ?></h6></div>
                <div class="column"><h6 class=""># Paciente:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->id); ?></h6></div>
            </div>
              <div class="row">
                <div class="column"><h6 class="">Doctor:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->doctor); ?></h6></div>
                <div class="column"><h6 class="">Sexo:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->gender); ?></h6></div>
            </div>
            <div class="row">
                <div class="column"><h6 class="">Fecha:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->created_at); ?></h6></div>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   

            <h3>Hemograma</h3>
            <table class = "table table-sm" id = "table"> 
                <thead> 
                    <tr> 
                        <th class = "text-center"> Hemograma </th> 
                        <th class = "text-center"> Resultados </th> 
                        <th class = "text-center"> Flag </th> 
                        <th class = "text-center"> Ref. Rango </th> 
                        <th class = "text-center"> Unidades </th> 
                    </tr> 
                </thead> 
                <tbody>
                 <?php $__currentLoopData = $hemograma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                     <td>WBC</td>
                     <td><?php echo e($item->wbc); ?></td>
                     <td>--------------</td>
                     <td>4.00 - 10.00</td>
                     <td>10e3/ul</td> 
                </tr> 
                <tr>
                    <td>RBC</td>
                    <td><?php echo e($item->rbc); ?></td> 
                    <td>--------------</td>
                    <td>3.50 - 5.50</td>
                    <td>10e6/ul</td> 
                </tr>
                <tr>
                    <td>HGB</td>
                    <td><?php echo e($item->hgb); ?></td> 
                    <td>--------------</td> 
                    <td>12.5 - 17.5</td>
                    <td>g/dl</td>
                </tr>
                <tr>
                    <td>HCT</td>
                    <td><?php echo e($item->hct); ?></td> 
                    <td>--------------</td> 
                    <td>37.0 - 50.0</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>MCV</td>
                    <td><?php echo e($item->mcv); ?></td> 
                    <td>--------------</td> 
                    <td>80.0 - 98.0</td>
                    <td>fl</td>
                </tr>
                <tr>
                    <td>MCH</td>
                    <td><?php echo e($item->mch); ?></td> 
                    <td>--------------</td> 
                    <td>26.0 - 38.0</td>
                    <td>pg</td>
                </tr>
                <tr>
                    <td>MCHC</td>
                    <td><?php echo e($item->mchc); ?></td>
                    <td>--------------</td> 
                    <td>31.0 - 37.0</td>
                    <td>g/dl</td>
                </tr>
                <tr>
                    <td>PLT</td>
                    <td><?php echo e($item->plt); ?></td>
                    <td>--------------</td> 
                    <td>150 - 450</td>
                    <td>10e3/ul</td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </tbody> 
            </table>
        </div>
    </main>
    <footer>
    </footer>
    </div>
    <div class="page_break">
    <header>
        <br>
        <h1>Hospital Municipal de Laguna Salada</h1>
        <br>
        <h2 class="hero-text">Servicio de Laboratorio</h2>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>TABLA DE RESULTADOS</strong></h5>
            

            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="column"><h6 class="">Nombre:</h6></div>
                <div class="column"><h6 class="" style="left: 15%; margin-top:0%;"><?php echo e($item->name); ?> <?php echo e($item->lastname); ?></h6></div>
                <div class="column"><h6 class=""># Paciente:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->id); ?></h6></div>
            </div>
              <div class="row">
                <div class="column"><h6 class="">Doctor:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->doctor); ?></h6></div>
                <div class="column"><h6 class="">Sexo:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->gender); ?></h6></div>
            </div>
            <div class="row">
                <div class="column"><h6 class="">Fecha:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;"><?php echo e($item->created_at); ?></h6></div>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   

            <h3>SEROLOGIA</h3>
            <table class = "table" id = "table"> 
                <thead> 
                    <tr> 
                        <th class = "text-center"> Serologia </th> 
                        <th class = "text-center"> Resultados </th> 
                        
                    </tr> 
                </thead> 
                <tbody>
                 <?php $__currentLoopData = $serologia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr> 
                    <td>VDRL</td>
                    <td><?php echo e($item->vdrl); ?></td> 
                     
                </tr> 
                <tr>
                    <td>ASO</td>
                    <td><?php echo e($item->aso); ?></td> 
                </tr>
                <tr>
                    <td>PCR</td>
                    <td><?php echo e($item->pcr); ?></td> 
                </tr>
                <tr>
                    <td>FACTOR R</td>
                    <td><?php echo e($item->factor); ?></td> 
                </tr>
                <tr>
                    <td>GESTATEST</td>
                    <td><?php echo e($item->gestatest); ?></td> 
                </tr>
                <tr>
                    <td>COVID 19</td>
                    <td><?php echo e($item->covid); ?></td> 
                </tr>
                <tr>
                    <td>TOXOPLASMOSIS IGG</td>
                    <td><?php echo e($item->toxoplasmosis_igg); ?></td>
                </tr>
                <tr>
                    <td>TOXOPLASMOSIS IGM</td>
                    <td><?php echo e($item->toxoplasmosis_igm); ?></td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </tbody> 
            </table>
        </div>
    </main>
    <footer>
    </footer>
    </div>
    
</body>
</html><?php /**PATH C:\laragon\www\test-project\resources\views/results.blade.php ENDPATH**/ ?>