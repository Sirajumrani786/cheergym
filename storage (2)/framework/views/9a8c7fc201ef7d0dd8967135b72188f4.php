<?php echo $__env->make('/includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-warning">
                                <i class="tim-icons icon-user-run"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Total Gyms</p>
                                <h3 class="card-title"><?php echo e($totalGyms); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <a href="<?php echo e(route('gym.index')); ?>">
                            <i class="tim-icons icon-double-right"></i> See All Gyms
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-primary">
                                <i class="tim-icons icon-shape-star"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Total Reviews</p>
                                <h3 class="card-title"><?php echo e($totalReviews); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <a href="<?php echo e(route('review.index')); ?>">
                            <i class="tim-icons icon-double-right"></i> See All Reviews
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-success">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Total Users</p>
                                <h3 class="card-title"><?php echo e($totalUsers); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <a href="<?php echo e(route('user.index')); ?>">
                            <i class="tim-icons icon-double-right"></i> See All Users
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="tools float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                <i class="tim-icons icon-settings-gear-63"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-primary" href="#pablo">Action</a>
                                <a class="dropdown-item text-info" href="<?php echo e(route('user.index')); ?>">See All</a>
                                <a class="dropdown-item text-success" href="<?php echo e(route('user.create')); ?>">Add New</a>
                                
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">Recent Users</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined on</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $recentUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td class="text-center">
                                            <div class="photo">
                                                <img width="100"
                                                    src="<?php echo e($user->profile ? asset($user->profile) : asset('assets/img/placeholder.jpg')); ?>"
                                                    alt="photo">

                                            </div>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('user.show', $user->id)); ?>"><?php echo e($user->name); ?></a>
                                        </td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->created_at); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="tools float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                <i class="tim-icons icon-settings-gear-63"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-primary" href="#pablo">Action</a>
                                <a class="dropdown-item text-info" href="<?php echo e(route('review.index')); ?>">See All</a>
                                
                                
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">Recent Reviews</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Feedback</th>
                                    <th>Rated Gym Name</th>
                                    <th>Reviewer Name</th>
                                    <th>Facilities</th>
                                    <th>Coaching</th>
                                    <th>Overall</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $recentReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($review->feedback); ?></td>
                                        <td>
                                            <a
                                                href="<?php echo e(route('gym.show', $review->gym->id)); ?>"><?php echo e($review->gym->name); ?></a>
                                        </td>
                                        <td>
                                            <a
                                                href="<?php echo e(route('user.show', $review->user->id)); ?>"><?php echo e($review->user->name); ?></a>
                                        </td>
                                        <td><?php echo e($review->facilities_rating); ?></td>
                                        <td><?php echo e($review->coaching_rating); ?></td>
                                        <td><?php echo e($review->overall_rating); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">


                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">Recent Gyms</h4>
                        <p class="card-category">Check out the latest gym listings</p>
                    </div>
                    <div>
                        <a href="<?php echo e(route('gym.create')); ?>" class="btn btn-fill btn-primary">Add new Gym</a>
                        <a href="<?php echo e(route('gym.index')); ?>" class="btn btn-fill btn-primary">See All Gyms</a>

                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Thumbnail</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Contact</th>
                                            <th>Location</th>
                                            <th>Fees</th>
                                            <th>Timing</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $recentGyms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gym): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                                <td>
                                                    <img width="100"
                                                        src="<?php echo e($gym->thumbnail ? asset($gym->thumbnail) : asset('assets/img/image_placeholder.jpg')); ?>"
                                                        alt="Thumbnail">
                                                </td>

                                                <td><?php echo e($gym->name); ?></td>
                                                <td><?php echo e($gym->description); ?></td>
                                                <td><?php echo e($gym->contact); ?></td>
                                                <td><?php echo e($gym->location); ?></td>
                                                <td><?php echo e($gym->fees); ?></td>
                                                <td><?php echo e($gym->timing_from); ?>-<?php echo e($gym->timing_to); ?></td>
                                                <td><?php echo e($gym->created_at); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php echo $__env->make('/includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/dashboard.blade.php ENDPATH**/ ?>