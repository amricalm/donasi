<?php echo $__env->make('templates.komponen.formwizard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0">Form Elements</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('individualtask.create.step.one.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Product Name:</label>
                <input type="text" id="taskTitle" name="name" class="form-control is-valid" value="<?php echo e($product->name ?? ''); ?>">
                <p class="form-text valid-feedback">Please enter correct password</p>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Product Amount:</label>
                <input type="text" id="productAmount" name="amount" class="form-control is-invalid" value="<?php echo e($product->amount ?? ''); ?>">
                <p class="form-text invalid-feedback">Please enter correct password</p>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Product Description:</label>
                <textarea id="taskDescription" name="description" class="form-control" rows="3"><?php echo e($product->description ?? ''); ?></textarea>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Next</button>
            </div>
        </form>
    </div>
</div>


<div class="card-block">
    <div class="row">
        <div class="col-md-12">
            <div id="wizard">
                <section>
                    <form class="wizard-form" id="example-advanced-form" action="#">
                        <h3> Registration </h3>
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="userName-2" class="block">User name *</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="userName-2" name="userName" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="email-2" class="block">Email *</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="email-2" name="email" type="email" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="password-2" class="block">Password *</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="password-2" name="password" type="password" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="confirm-2" class="block">Confirm Password *</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="confirm-2" name="confirm" type="password" class="form-control required">
                                </div>
                            </div>
                        </fieldset>
                        <h3> General information </h3>
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="name-2" class="block">First name *</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="name-2" name="name" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="surname-2" class="block">Last name *</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="surname-2" name="surname" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="phone-2" class="block">Phone #</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="phone-2" name="phone" type="number" class="form-control required phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="date" class="block">Date Of Birth</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="date" name="Date Of Birth" type="text" class="form-control required date-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">Select Country</div>
                                <div class="col-md-8 col-lg-10">
                                    <select class="form-control required">
                                        <option>Select State</option>
                                        <option>Gujarat</option>
                                        <option>Kerala</option>
                                        <option>Manipur</option>
                                        <option>Tripura</option>
                                        <option>Sikkim</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <h3> Education </h3>
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="University-2" class="block">University</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="University-2" name="University" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="Country-2" class="block">Country</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="Country-2" name="Country" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="Degreelevel-2" class="block">Degree level #</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="Degreelevel-2" name="Degree level" type="text" class="form-control required phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="datejoin" class="block">Date Join</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="datejoin" name="Date Of Birth" type="text" class="form-control required">
                                </div>
                            </div>
                        </fieldset>
                        <h3> Work experience </h3>
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="Company-2" class="block">Company:</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="Company-2" name="Company:" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="CountryW-2" class="block">Country</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="CountryW-2" name="Country" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="Position-2" class="block">Position</label>
                                </div>
                                <div class="col-md-8 col-lg-10">
                                    <input id="Position-2" name="Position" type="text" class="form-control required">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>