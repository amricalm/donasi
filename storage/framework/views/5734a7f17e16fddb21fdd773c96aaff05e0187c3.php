<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigation-label" menu-title-theme="theme9">Menu Utama</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="<?php echo e((!empty($aktif)) ? '' : 'active'); ?>">
                <?php if(Session::get('UserGroupID') == 1): ?>
                    <a href="<?php echo e(url('admin-home')); ?>" class="waves-effect waves-dark">
                <?php else: ?>
                    <a href="<?php echo e(url('home')); ?>" class="waves-effect waves-dark">
                <?php endif; ?>
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <?php for($i=0; $i < count(Session::get('UserMenu')); $i++): ?>
                <li class="<?php echo e((!empty($aktif) && Session::get('UserMenu')[$i]['Name'] == $aktif) ? 'active' : ''); ?> <?php echo e((count(Session::get('UserMenu')[$i]['child']) > 0) ? 'pcoded-hasmenu' : ''); ?>">
                    <a href="<?php echo e(url(Session::get('UserMenu')[$i]['Url'])); ?>" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather <?php echo e(Session::get('UserMenu')[$i]['Icon']); ?>"></i></span>
                        <span class="pcoded-mtext"><?php echo e(Session::get('UserMenu')[$i]['Name']); ?></span>
                    </a>
                    <?php if(count(Session::get('UserMenu')[$i]['child']) > 0): ?>
                        <ul class="pcoded-submenu">
                            <?php for($j=0;$j<count(Session::get('UserMenu')[$i]['child']);$j++): ?>
                                <li class="<?php echo e((count(Session::get('UserMenu')[$i]['child'][$j]['child']) > 0) ? 'pcoded-hasmenu' : ''); ?>">
                                <a href="<?php echo e((Session::get('UserMenu')[$i]['child'][$j]['Url']=='smm' && Session::get('UserGroupID')==9) ? url(Session::get('UserMenu')[$i]['child'][$j]['Url']) : url('#')); ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext"><?php echo e(Session::get('UserMenu')[$i]['child'][$j]['Name']); ?></span>
                                </a>
                                <?php if(count(Session::get('UserMenu')[$i]['child'][$j]['child']) > 0): ?>
                                    <ul class="pcoded-submenu">
                                    <?php for($k=0;$k<count(Session::get('UserMenu')[$i]['child'][$j]['child']);$k++): ?>
                                    <li class="<?php echo e((count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child']) > 0) ? 'pcoded-hasmenu' : ''); ?>">
                                        <a href="<?php echo e(url(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['Url'])); ?>" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext"><?php echo e(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['Name']); ?></span>
                                        </a>
                                        <?php if(count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child']) > 0): ?>
                                            <ul class="pcoded-submenu">
                                            <?php for($l=0;$l<count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child']);$l++): ?>
                                            <li class="<?php echo e((count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child']) > 0) ? 'pcoded-hasmenu' : ''); ?>">
                                                <a href="<?php echo e(url(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['Url'])); ?>" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext"><?php echo e(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['Name']); ?></span>
                                                </a>
                                                <?php if(count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child']) > 0): ?>
                                                    <ul class="pcoded-submenu">
                                                    <?php for($m=0;$m<count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child']);$m++): ?>
                                                    <li class="">
                                                        <a href="<?php echo e(url(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child'][$m]['Url'])); ?>" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext"><?php echo e(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child'][$m]['Name']); ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endfor; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                            <?php endfor; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                    <?php endfor; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</nav>
