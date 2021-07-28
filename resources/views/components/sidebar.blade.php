<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('img/android-icon-192x192.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @auth
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">{{strlen(Auth::User()->name)>10?substr(ucwords(Auth::User()->name),0,10).'...':ucwords(Auth::User()->name)}}</a>
        </div>
      </div>    
      @endauth
      
      
      

      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              @guest
              <li class="nav-item">
                  <a href="{{route('login')}}" id="menu_entrar" class="nav-link {{Request::route()->getName()=='login'?'active':''}}">
                      <i class="nav-icon fas fa-th" id="img_entrar"></i>
                      <p>
                          Entrar
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{route('register')}}" id="menu_reg_usu" class="nav-link {{Request::route()->getName()=='register'?'active':''}}">
                    <i id="img_reg_usu" class="nav-icon fas fa-th"></i>
                    <p>
                        Cadastrar
                    </p>
                </a>
              </li>
              
              @endguest
            

              @auth
                
                <li class="nav-item">
                  <a id="menu_vendedores" href="{{route('admin.users')}}" class="nav-link {{(Request::route()->getName()=='admin.users')
                                                                      ||(Request::route()->getName()=='admin.formAddUser')
                                                                      ||(Request::route()->getName()=='admin.formEdtUser')?'active':''}}">
                      <i id="img_vendedores" class="nav-icon far fa-user"></i>
                      <p>
                          Usuários
                      </p>
                  </a>
                </li>
                

                

                <li class="nav-item">
                  <a id="menu_sair" class="nav-link" href="#" data-toggle="modal" data-target="#LogoutModal">
                    <i id="img_sair" class="nav-icon fas fa-th"></i>
                    <p>Sair</p> 
                  </a>
                </li>    
                <br><br><br></div>

                

              @endauth
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <script>
      $( document ).ready(function() {


          animacao_menu('#menu_entrar','#img_entrar');
          animacao_menu('#menu_reg_usu','#img_reg_usu');
          animacao_menu('#menu_minha_conta','#img_minha_conta');
          animacao_menu('#menu_dados_cadastrais','#img_dados_cadastrais');
          animacao_menu('#menu_senha','#img_senha');
          animacao_menu('#menu_empresas','#img_empresas');
          animacao_menu('#menu_vendedores','#img_vendedores');
          animacao_menu('#menu_clientes','#img_clientes');
          animacao_menu('#menu_relatorios','#img_relatorios');
          animacao_menu('#menu_carencia','#img_carencia');
          animacao_menu('#menu_pagamentos','#img_pagamentos');
          animacao_menu('#menu_fechamento','#img_fechamento');
          animacao_menu('#menu_caixa','#img_caixa');
          animacao_menu('#menu_resumo','#img_resumo');
          animacao_menu('#menu_sair','#img_sair');
          


      });
    </script>
    <!-- /.sidebar -->
  </aside>