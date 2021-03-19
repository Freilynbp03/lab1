

<?php $__env->startSection("content"); ?>
<form action="/patients" method="post">
<div class="container register">
        <div class="row">
            <div class="col-md-12 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Registrar Paciente</h3>
                        <div class="row register-form">
                          <?php echo e(csrf_field()); ?>

                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Nombre" value="" name="name"/>
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Apellido" value="" name="lastname"/>
                                </div> 
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="NSS" value="" name="nss"/>
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Doctor" value="" name="doctor"/>
                                </div>
                                <div class="form-group p-2">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male">
                                            <span> Hombre </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Mujer </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="edad" class="form-control" placeholder="Edad" value="" name="age"/>
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" minlength="10" maxlength="10" name="phone"
                                        class="form-control" placeholder="Telefono" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Unidad" value="" name="unidad"/>
                                </div>
                                <div class="form-group p-2">
                                    <input type="date" class="form-control" id="start" name="trip-start" value="2021-03-01" min="2018-01-01">
                                </div>
                                <input type="submit" class="btnRegister" value="Registrar" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
<?php $__env->stopSection(); ?>    

<?php echo $__env->make("../layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\test-project\resources\views/patients/create.blade.php ENDPATH**/ ?>