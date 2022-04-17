<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/images.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>le rôle:</span>
                            <span class="badge bg-success">Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Super Admin')
                                <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>le rôle:</span>
                                <span class="badge bg-info">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                                <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>le rôle:</span>
                                <span class="badge bg-warning">User Normal</span>
                            @endif
                        </div>
                    </div>
                </li>
                
                @if (Auth::user()->role_name=='Admin')
                <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>A propos du système</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Contrôle utilisateur</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">Journal d'activité de l'utilisateur</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">Journal d'activité</a>
                            </li>
                            <li class="submenu-item active">
                                <a href="{{ route('user/add/new') }}">ajouter un nouvel utilisateur</a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Changer Mot de passe</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{url('edit/profile')}}" class='sidebar-link'>
                        <i class="bi bi-gear"></i>
                        <span>Edit Profil</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{url('poser/dossiers')}}" class='sidebar-link'>
                        <i class="bi bi-folder-plus"></i>
                        <span>Poser des Dossiers</span>
                    </a>
                </li>


                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-folder"></i>
                            <span>Etat de Mes Dossiers</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item">
                                <a href="{{url('etat/dossiers/pedagogiques')}}">Dossiers Pedagogiques</a>
                            </li>
                            <li class="submenu-item">
                                <a href="#">Dossiers Scientifiques</a>
                            </li>
                            <li class="submenu-item active">
                                <a href="#">Dossiers Administratifs</a>
                            </li>
                        </ul>
                    </li>

                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Se deconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
</div>