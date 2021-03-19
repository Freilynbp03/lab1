<?php $__env->startSection("content"); ?>

<table class = "table" id = "table"> 
    <thead> 
        <tr> 
            <th class = "text-center"> ID Paciente </th> 
            <th class = "text-center"> Nombre </th> 
            <th class = "text-center"> Apellido </th> 
            <th class = "text-center"> NSS </th> 
            <th class = "text-center"> Doctor </th> 
            <th class = "text-center"> Sexo </th> 
            <th class = "text-center"> Edad</th> 
            <th class = "text-center"> Telefono </th> 
            <th class = "text-center"> Unidad </th> 
            <th class = "text-center"> Resultados </th>  
        </tr> 
    </thead> 
    <tbody>
     <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr> 
        <td><?php echo e($item->id); ?></td> 
        <td><?php echo e($item->name); ?></td> 
        <td><?php echo e($item->lastname); ?></td> 
        <td><?php echo e($item->nss); ?></td> 
        <td><?php echo e($item->doctor); ?></td> 
        <td><?php echo e($item->gender); ?></td> 
        <td><?php echo e($item->age); ?></td> 
        <td><?php echo e($item->phone); ?></td> 
        <td><?php echo e($item->unidad); ?></td> 
        <td>
            <a href="<?php echo e(('pdfResults/'.$item->id)); ?>" target="_blanc">
            <button class="edit-modal btn btn-info" type="submit">
            <span class="glyphicon glyphicon-edit"></span>Ver Resultados
             </button>
            </a>
        </td>
    </tr> 
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </tbody> 
</table>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\test-project\resources\views/dashboard.blade.php ENDPATH**/ ?>