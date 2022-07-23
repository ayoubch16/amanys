<style>
    .sidebar,
    .sidebar-content,
    .sidebar-link,
    a.sidebar-link {
        background-color: #111C2A !important
    }
</style>
<?php session_start();
?>
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
            <span class="align-middle"><img src="img/icons/logoy.png" width="200" height="80" alt=""></span>
        </a>
        <ul class="sidebar-nav">
            <!-- <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="index.php">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Acceuil</span>
                </a>
            </li> -->
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="index.php">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Statistiques</span>
                </a>
            </li>
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="Produits.php">
                    <i class="align-middle" data-feather="copy"></i> <span class="align-middle">Produits</span>
                </a>
            </li>
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="DataBase.php">
                    <i class="align-middle" data-feather="database"></i> <span class="align-middle">DataBase</span>
                </a>
            </li>
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="Commande.php">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Commande</span>
                </a>
            </li>
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="MeuilleurVente.php">
                    <i class="align-middle" data-feather="star"></i> <span class="align-middle">Meuilleur Vente</span>
                </a>
            </li>
            <li class="sidebar-item" onclick="active()">
                <a class="sidebar-link" href="deconnecter.php">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log
                        out</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<script>
    function active() {
        var a = document.getElementById("sidebar-item");
        a.classList.add("active")
    };
</script>