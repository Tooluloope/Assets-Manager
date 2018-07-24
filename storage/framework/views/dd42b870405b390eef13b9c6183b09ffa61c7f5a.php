<?php $__env->startSection('content'); ?>
    <main class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
            
                    <div class="tile-stats tile-red">
                        <div class="icon"><i class="entypo-users"></i></div>
                        <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">0</div>
            
                        <h3>Number of Users</h3>
                        
                    </div>
            
                </div>
            
                <div class="col-sm-4">
            
                    <div class="tile-stats tile-green">
                        <div class="icon"><i class="entypo-chart-bar"></i></div>
                        <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="600">0</div>
            
                        <h3>Number of Personnel</h3>
                    </div>
            
                </div>
                
                <div class="clear visible-xs"></div>
            
                <div class="col-sm-4">
            
                    <div class="tile-stats tile-aqua">
                        <div class="icon"><i class="entypo-mail"></i></div>
                        <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="1200">0</div>
            
                        <h3>Number of Projects</h3>
                    </div>
            
                </div>
                
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>