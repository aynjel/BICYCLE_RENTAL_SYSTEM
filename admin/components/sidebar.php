<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <?php if($curr_page == 'index.php') : ?>
                <li class="active">
                    <a href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php else : ?>
                <li>
                    <a href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php endif; ?>

                <?php if($curr_page == 'orders.php') : ?>
                <li class="active">
                    <a href="orders.php">
                        <i class="fas fa-suitcase"></i>
                        <span> Order</span>
                    </a>
                </li>
                <?php else : ?>
                <li>
                    <a href="orders.php">
                        <i class="fas fa-suitcase"></i>
                        <span> Order</span>
                    </a>
                </li>
                <?php endif; ?>

                <?php if($curr_page == 'products.php' || $curr_page == 'product_edit.php') : ?>
                <li class="active">
                    <a href="products.php">
                        <i class="fas fa-gift"></i>
                        <span> Products</span>
                    </a>
                </li>
                <?php else : ?>
                <li>
                    <a href="products.php">
                        <i class="fas fa-gift"></i>
                        <span> Products</span>
                    </a>
                </li>
                <?php endif; ?>

                <?php if($curr_page == 'users.php') : ?>
                <li class="active">
                    <a href="users.php">
                        <i class="fas fa-users m-0 p-0"></i>
                        <span> Users</span>
                    </a>
                </li>
                <?php else : ?>
                <li>
                    <a href="users.php">
                        <i class="fas fa-users m-0 p-0"></i>
                        <span> Users</span>
                    </a>
                </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</div>