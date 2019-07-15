<div class="bg-light border-right shadow-sm" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
    <img src="assets/img/wallet-center.png" alt="Profile" class="img-fluid rounded-circle border border-black shadow-sm mb-3">
    <h3>
    <?php
    echo $_SESSION['userName'];
    ?>
    </h3>

    </div>
    
    <div class="list-group list-group-flush">
    <a href="home.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-info-circle mr-2"></i> BALANCE</a>
    <a href="#" class="list-group-item list-group-item-action bg-light disabled"><i class="fas fa-list mr-2"></i> DETALLES</a>
    <a href="#" class="list-group-item list-group-item-action bg-light disabled"><i class="fas fa-user-circle mr-2"></i> PERFIL</a>
    <a href="actions/desconectar.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sign-out-alt mr-2"></i> SALIR</a>
    </div>
</div>
