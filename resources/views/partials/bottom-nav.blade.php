<!-- Navigation du bas -->
<nav class="bottom-nav">
    <div class="row text-center g-0">
        <div class="col">
            <a href="{{ route('ventes.create') }}"
                class="btn btn-light w-100 py-3 {{ request()->routeIs('ventes.create') ? 'active' : '' }}">
                <i class="fas fa-shopping-cart"></i><br>
                Vente
            </a>
        </div>
        <div class="col">
            <a href="{{ route('dashboard') }}"
                class="btn btn-light w-100 py-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-home"></i><br>
                Accueil
            </a>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-light w-100 py-3" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-bars"></i><br>
                    Menu
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('produits.index') }}">
                            <i class="fas fa-box"></i> Produits
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('achats.index') }}">
                            <i class="fas fa-truck"></i> Achat
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('ventes.index') }}">
                            <i class="fas fa-shopping-cart"></i> Vente
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('stocks.index') }}">
                            <i class="fas fa-boxes"></i> Stocks
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('clients.index') }}">
                            <i class="fas fa-users"></i> Clients
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('fournisseurs.index') }}">
                            <i class="fas fa-truck-loading"></i> Fournisseurs
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item text-danger" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt text-danger"></i> Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Modal de déconnexion -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Confirmation de déconnexion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir vous déconnecter ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Se déconnecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .bottom-nav {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: white;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .bottom-nav .btn {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
        font-size: 0.9em;
    }

    .bottom-nav .btn i {
        font-size: 1.2em;
        margin-bottom: 2px;
    }

    .bottom-nav .dropdown-menu {
        width: 100vw;
        position: fixed;
        bottom: 60px;
        left: 0;
        margin: 0;
        padding: 15px;
        border-radius: 15px 15px 0 0;
        box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.1);
        border: none;
    }

    .bottom-nav .dropdown-item {
        padding: 12px 15px;
        font-size: 1.1em;
        border-radius: 10px;
        margin-bottom: 5px;
    }

    .bottom-nav .dropdown-item i,
    .bottom-nav .btn i {
        width: 25px;
        margin-right: 10px;
        color: #6c757d;
        transition: color 0.3s ease;
    }

    .bottom-nav .btn.active i,
    .bottom-nav .btn[aria-expanded="true"] i {
        color: #000000;
    }

    .content-area {
        margin-bottom: 60px;
        padding-bottom: 20px;
    }

    /* Supprimer les bordures et effets sur les boutons */
    .bottom-nav .btn {
        border: none !important;
    }

    .bottom-nav .btn:focus,
    .bottom-nav .btn:active,
    .bottom-nav .btn:hover {
        box-shadow: none !important;
        background-color: white !important;
        outline: none !important;
        border: none !important;
    }

    /* Style pour l'état actif */
    .bottom-nav .btn.active {
        background-color: white !important;
        border: none !important;
    }

    /* Styles pour le modal */
    .modal-content {
        border-radius: 15px;
        border: none;
    }

    .modal-header {
        border-bottom: none;
        padding: 20px;
    }

    .modal-body {
        padding: 20px;
        text-align: center;
    }

    .modal-footer {
        border-top: none;
        padding: 20px;
        justify-content: center;
        gap: 10px;
    }
</style>
