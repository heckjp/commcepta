<?php
    $menu = $_GET['menu'];
    $submenu=$_GET['submenu'];

    switch($menu){

        case 'dashboard':
            include_once('view/page/dashboard.php');
        break;

        case 'produto':
            if(isset($submenu)){
                if($submenu=='cadastrar'){
                    include_once('view/page/produto/cadastrar.php');
                }

                if($submenu=='listar'){
                    include_once('view/page/produto/listar.php');
                }
                
            } else{
                include_once('view/page/produto/listar.php');
            }
        break;

        case 'cliente':
            if(isset($submenu)){
                if($submenu=='cadastrar'){
                    include_once('view/page/cliente/cadastrar.php');
                }

                if($submenu=='listar'){
                    include_once('view/page/cliente/listar.php');
                }
                
            } else{
                include_once('view/page/cliente/listar.php');
            }
        break;

        case 'vendedor':
            if(isset($submenu)){
                if($submenu=='cadastrar'){
                    include_once('view/page/vendedor/cadastrar.php');
                }

                if($submenu=='listar'){
                    include_once('view/page/vendedor/listar.php');
                }
                
            } else{
                include_once('view/page/vendedor/listar.php');
            }
        break;

        case 'venda':
            if(isset($submenu)){
                if($submenu=='cadastrar'){
                    include_once('view/page/venda/cadastrar.php');
                }

                if($submenu=='listar'){
                    include_once('view/page/venda/listar.php');
                }
                
            } else{
                include_once('view/page/venda/listar.php');
            }
        break;


        case 'usuario':
            if(isset($submenu)){
                if($submenu=='cadastrar'){
                    include_once('view/page/usuario/cadastrar.php');
                }

                if($submenu=='listar'){
                    include_once('view/page/usuario/listar.php');
                }
                
            } else{
                include_once('view/page/usuario/listar.php');
            }
        break;

        default:
            include_once('view/page/dashboard.php');
    }

?>