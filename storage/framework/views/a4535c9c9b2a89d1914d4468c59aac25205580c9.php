<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<style>
        .register{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 0%;
            margin: 10px;
        }
        /* .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        } */
        .register-right{
            background: #f8f9fa;
        }
        /* .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate; 
        } */
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes  mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        /* .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        } */
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100%;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        .back{
            background-image: url("https://i.pinimg.com/originals/40/de/9a/40de9afa8648902b7c06f1f5e1525db5.jpg");
            background-color: #cccccc;
        }
        header{
      background:#6978c7!important;
    }
    ul{
      padding: 0 60px;
      list-style-type: none;
    }
      li{
        padding: 0px 10px;
        line-height: 3;
      }
      li a{
        font-size: 20px;
        color: #fff;
    
    
      }
      li a:hover{
        color: #fff;
        background: #9c9999;
      }
      .navbar{
        padding: 0;
      }
      #top li{
        padding: 0;
        line-height: 1.8;
    
      }
      #top li a{
        font-size: 16px;
        padding: 0;
      }
      #top li a:hover{
        background: none;
        text-decoration: none;
      }
      .col-md-2 .fab{
        font-size: 20px;
        padding-right: 10px;
        padding-top: 5px;
        padding-left: 10px;
        
      }
      .navbar-brand img{
        height: 60px;
    
      }
      .navbar-toggler{
        color: #fff;
      }
      .fas:hover,.fab:hover{
        color: #E5E7E9;
    
      }
      .ownbg{
        background: #3f51b5!important;
    
      }
      @media(max-width: 992px){
      .col-md-2 .fab{
        font-size: 18px;
        padding-right: 0;
    
        
      }
      }
      @media(max-width: 768px){
        #top{
          display: none;
        }
         .navbar-brand img{
        height: 50px;
    
      }
        .navbar-dark .navbar-toggler{
          outline: none;
          border-color: rgba(255, 255, 255, 0);
        }
        ul,li{
          padding: 0;
          text-align: center;
    
        }
        .navbar-nav{
          padding-bottom: 40px;
        }
     
      }
</style>
<body class="back">
    <header>
        <div class="container" id="top">
          <div class="row">
    
          </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark ownbg">
          <a class="navbar-brand text-white pl-5" href="#"><img src=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/patients">Tablero</a>
                  </li>  
                <li class="nav-item">
                    <a class="nav-link" href="/patients/create">Registrar Paciente</a>
                </li>  
              <li class="nav-item">
                <a class="nav-link" href="/analysis/create">Quimica Clinica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/analysis_serologia">Serologia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/analysis_hematologia">Hematologia</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/analysis_especial">Pruebas Especiales</a>
              </li>    
              <li class="nav-item">
                <a class="nav-link" href="/analysis_fecales">Materias Fecales</a>
              </li>     
            </ul>
          </div>  
        </nav>
        </header>
    <div class="container register">
        <div class="row">
            <div class="col-md-12 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Registrar Paciente</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Nombre" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Apellido" value="" />
                                </div> 
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="NSS" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Doctor" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male">
                                            <span> Hombre </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Mujer </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="edad" class="form-control" placeholder="Edad" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" minlength="10" maxlength="10" name="txtPhone"
                                        class="form-control" placeholder="Telefono" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Unidad" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="date" class="form-control" id="start" name="trip-start" value="2021-03-01" min="2018-01-01">
                                </div>
                                <input type="submit" class="btnRegister" value="Registrar" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="quimica" role="tabpanel" aria-labelledby="quimica-tab">
                        <h3 class="register-heading">QUIMICA CLINICA</h3>
                        <h4 class="register-heading">Paciente #653768</h4>
                        <div class="row register-form">
                            <div>
                                <table class="table col-md-6">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Valor Referencia</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Acido Urico</th>
                                            <td><input type="text" class="form-control"></td>
                                            <td>Hombre 3.6-7.2 MG/DL, Mujer 2.5-6.0 MG/DL</td>
                                          </tr>
                                      <tr>
                                        <th scope="row">Colesterol</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Hombre 123-270 MG/DL, Mujer 123-243 MG/DL</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Colesterol HDL</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Hombre 35-60 MG/DL</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Colesterol LDL</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Hasta 130 MDL</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">CREATININA</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Hombre 0.9-1.3 MG/DL</td>
                                      </tr>                                      <tr>
                                        <th scope="row">Glicemia</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>70 - 110 MG/DL</td>
                                      </tr>                                      <tr>
                                        <th scope="row">Trigliceridos</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>60 - 150 MG/DL</td>
                                      </tr>                                      <tr>
                                        <th scope="row">Urea</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>15 - 39 MG/DL</td>
                                    </tbody>
                                  </table>
                            </div>
                            <div>
                                <table class="table col-md-6">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Valor Referencia</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Bilirrubina T</th>
                                            <td><input type="text" class="form-control"></td>
                                            <td>Hasta MG/DL</td>
                                          </tr>
                                      <tr>
                                        <th scope="row">Bilirrubina D</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Hasta 0.2 MG/DL</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Bilirrubina I</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Fosfatasa Alcalina</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>26 - 117 U/L</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Fosfatasa Asida</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td></td>
                                      </tr>                                      <tr>
                                        <th scope="row">Lipasa</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td></td>
                                      </tr>                                      <tr>
                                        <th scope="row">TGO U/L</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Hasta 40 U/L</td>
                                      </tr>                                      <tr>
                                        <th scope="row">TGO U/L</th>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Hasta 41 U/L</td>
                                    </tbody>
                                  </table>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>                    
                    <div class="tab-pane fade show" id="serologia" role="tabpanel" aria-labelledby="serologia-tab">
                        <h3 class="register-heading">SOROLOGIA</h3>
                        <h4 class="register-heading">Paciente #653768</h4>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="VDRL" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="ASO" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="PCR" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Gestatest" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="COVID 19" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="TIP. SANGUINEA" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Electrocedimenacion" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="T. Sangria" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="T. Cuagulacion" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Falcemia" value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="materias" role="tabpanel" aria-labelledby="serologia-tab">
                        <h3 class="register-heading">MATERIAS FECALES</h3>
                        <h4 class="register-heading">Paciente #653768</h4>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Color" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Consistencia" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Quistes" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Larvas" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Sangre Oculta" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Globulos Blancos" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Globulos Rojos" value="" />
                                </div>
                                <div class="form-group p-2">
                                    <input type="text" class="form-control" placeholder="Otros" value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html><?php /**PATH C:\laragon\www\test-project\resources\views/test.blade.php ENDPATH**/ ?>