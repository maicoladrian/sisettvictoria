<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    
    <a href="#" class="simple-text logo-normal">
    <!-- <i><img style="width:40px" src="{{ asset('material') }}/img/infor.png"></i> -->
      {{ __('S.I.S.E.T.T.') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Panel de Control') }}</p>
        </a>
      </li>
      
      <!-- Lista desplegable Docente -->
      <li class="nav-item {{ ($activePage == 'tipo_docente' || $activePage == 'mostrar_tipo_docente' || $activePage == 'docente' || $activePage == 'mostrar_docente') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#tipo_docente" aria-expanded="true">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-warning">engineering</span> </i>
          <p>{{ __('Docentes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="tipo_docente">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'tipo_docente' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('tipo_docente.create')}}">
                <span class="sidebar-mini"> RT  </span>
                <span class="sidebar-normal">{{ __('Registrar Tipo de Docente') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_tipo_docente' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('tipo_docentes.index')}}">
                <span class="sidebar-mini"> MT </span>
                <span class="sidebar-normal"> {{ __('Mostrar Tipo de Docentes') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'docente' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('docente.create')}}">
                <span class="sidebar-mini"> RD  </span>
                <span class="sidebar-normal">{{ __('Registrar Docente') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_docente' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('docentes.index')}}">
                <span class="sidebar-mini"> MD </span>
                <span class="sidebar-normal"> {{ __('Mostrar Docentes') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable POstulante -->
      <li class="nav-item {{ ($activePage == 'postulantes' || $activePage == 'mostrar_postulante') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#postulante" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-default">people_alt</span> </i>
          <p>{{ __('Postulantes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="postulante">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'postulantes' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('postulante.create')}}">
                <span class="sidebar-mini"> RP </span>
                <span class="sidebar-normal">{{ __('Registrar Postulante') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_postulante' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('postulantes.index')}}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> {{ __('Mostrar Postulantes') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable Tema - Estado_Tema -->
      <li class="nav-item {{ ($activePage == 'estado_temas' || $activePage == 'mostrar_estado_tema') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#estado_tema" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-primary">library_books</span> </i>
          <p>{{ __('Temas') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="estado_tema">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'estado_temas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('estado_tema.create')}}">
                <span class="sidebar-mini"> RT </span>
                <span class="sidebar-normal">{{ __('Registrar Estado Tema') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_estado_tema' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('estado_temas.index')}}">
                <span class="sidebar-mini"> MT </span>
                <span class="sidebar-normal"> {{ __('Mostrar Estado Temas') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'temas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('tema.create')}}">
                <span class="sidebar-mini"> RT </span>
                <span class="sidebar-normal">{{ __('Registrar Tema') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_tema' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('temas.index')}}">
                <span class="sidebar-mini"> MT </span>
                <span class="sidebar-normal"> {{ __('Mostrar Temas') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable Modalidad -->
      <li class="nav-item {{ ($activePage == 'modalidades' || $activePage == 'mostrar_modalidad') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#modalidad" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-success">auto_stories</span> </i>
          <p>{{ __('Modalidad') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="modalidad">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'modalidades' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('modalidad.create')}}">
                <span class="sidebar-mini"> RM  </span>
                <span class="sidebar-normal">{{ __('Registrar Modalidad') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_modalidad' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('modalidades.index')}}">
                <span class="sidebar-mini"> MM </span>
                <span class="sidebar-normal"> {{ __('Mostrar Modalidades') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable Rol -->
      <li class="nav-item {{ ($activePage == 'rols' || $activePage == 'mostrar_rol') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#rol" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-primary">admin_panel_settings</span> </i>
          
          <p>{{ __('Roles') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="rol">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'rols' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('rol.create')}}">
                <span class="sidebar-mini"> R  </span>
                <span class="sidebar-normal">{{ __('Registrar Rol') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_rol' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('rols.index')}}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Mostrar Roles') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable Usuario -->
      <li class="nav-item {{ ($activePage == 'usuarios' || $activePage == 'mostrar_usuario') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#usuario" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-info">group_add</span> </i>
          <p>{{ __('Usuarios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="usuario">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'usuarios' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('usuario.create')}}">
                <span class="sidebar-mini"> RU  </span>
                <span class="sidebar-normal">{{ __('Registrar Usuarios') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_usuario' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('usuarios.index')}}">
                <span class="sidebar-mini"> MU </span>
                <span class="sidebar-normal"> {{ __('Mostrar Usuarios') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable tecnica_coaching -->
      <li class="nav-item {{ ($activePage == 'tecnicas_coaching' || $activePage == 'mostrar_tecnica_coaching') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#tecnica_coaching" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-info">psychology</span> </i>
          <p>{{ __('Tecnica Coaching') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="tecnica_coaching">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'tecnicas_coaching' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('tecnica_coaching.create')}}">
                <span class="sidebar-mini"> RP </span>
                <span class="sidebar-normal">{{ __('Registrar Tecnica Coaching') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_tecnica_coaching' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('tecnicas_coaching.index')}}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> {{ __('Mostrar Tecnica Coaching') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable notificacion -->
      <li class="nav-item {{ ($activePage == 'notificaciones' || $activePage == 'mostrar_notificacion') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#notificacion" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-success">sms</span> </i>
          <p>{{ __('Notificaciones') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="notificacion">
          <ul class="nav">
            <!-- <li class="nav-item{{ $activePage == 'notificaciones' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('notificacion.create')}}">
                <span class="sidebar-mini"> RP </span>
                <span class="sidebar-normal">{{ __('Registrar Tecnica Coaching') }} </span>
              </a>
            </li> -->
            <li class="nav-item{{ $activePage == 'mostrar_notificacion' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('notificaciones.index')}}">
                <span class="sidebar-mini"> MN </span>
                <span class="sidebar-normal"> {{ __('Mostrar Notificaciones') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable acta_perfil -->
      <li class="nav-item {{ ($activePage == 'acta_perfiles' || $activePage == 'mostrar_acta_perfil') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#acta_perfil" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-default">sticky_note_2</span> </i>
          <p>{{ __('Acta Perfil') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="acta_perfil">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'acta_perfiles' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('acta_perfil.create')}}">
                <span class="sidebar-mini"> RA </span>
                <span class="sidebar-normal">{{ __('Registrar Acta de Perfil') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_acta_perfil' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('acta_perfiles.index')}}">
                <span class="sidebar-mini"> MA </span>
                <span class="sidebar-normal"> {{ __('Mostrar Acta de perfil') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Lista desplegable reporte -->
      <li class="nav-item {{ ($activePage == 'reportes' || $activePage == 'mostrar_reportes') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#reportes" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-primary">analytics</span> </i>
          <p>{{ __('Reportes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="reportes">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'reportes' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> OR </span>
                <span class="sidebar-normal">{{ __('Obtener Reportes') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_reportes' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> MR </span>
                <span class="sidebar-normal"> {{ __('Mostrar Reportes') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>



      <li class="nav-item{{ $activePage == 'backups' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons text-info">backup</i>
            <p>{{ __('Backup') }}</p>
        </a>
      </li>
      <!-- <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->
      <!-- <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="#">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
