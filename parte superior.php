
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Unidad de ingenieria-EMCALI</title>
        
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
            <a class="navbar-brand" href="#">Unidad de ingenieria</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-header" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="crud administrador.php">Crear nuevo usuario</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.html">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="principaladmin.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <img >EMCALI</a
                            >
                            <div class="sb-sidenav-menu-heading">Manejo de Informacion</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                DOCUMENTOS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <a class="nav-link" href="visualizar.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Redes Externas (D)</a
                            ><a class="nav-link" href="visualizar_int.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Redes Internas (D)</a
                            ></a>
                            <a class="nav-link" href="visualizar conc.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Conceptos Tecnicos (D)</a>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                BASE DE DATOS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                
                                <a class="nav-link" href="externasbd.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Redes Externas</a
                                ><a class="nav-link" href="internasbd.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Redes Internas</a
                                ></a>
                                <a class="nav-link" href="conceptostecnicosbd.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Conceptos Tecnicos</a>

                                   
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesReports" aria-expanded="false" aria-controls="collapsePagesReports">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                REPORTES
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesReports" aria-labelledby="headingReports" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPagesReports">
                                    <a class="nav-link" href="reporte_externas.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                        Reportes de Redes Externas
                                    </a>
                                    <a class="nav-link" href="reporte_internas.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Reportes de Redes Internas
                                    </a>
                                    <a class="nav-link" href="reporte_conc.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                        Reportes de Conceptos Técnicos
                                    </a>
                                </nav>
                            </div>
                            
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">EMCALI</div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">(UNIDAD DE INGENIERIAS- UENAA)</li>
                        </ol>