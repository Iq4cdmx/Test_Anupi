@extends('layout')

@section('content')
<main class="page landing-page">
        <section class="clean-block clean-hero" style="color: rgba(0,0,0,0.45);background: url(&quot;assets/img/tech/Diccionario.jpg&quot;) no-repeat;background-size: cover;">
            <div class="text">
                <h2 class="text-break" style="text-shadow: 01px 01px var(--red);font-size: 37px;"><br><strong><em>ASOCIACIÓN NACIONAL UNIVERSITARIA&nbsp;DE PROFESORES DE INGLÉS A.C.</em></strong><br><br></h2>
                <p></p><button class="btn btn-outline-light btn-lg" type="button" style="background: var(--red);">Learn More</button>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="text-shadow: 01px 01px var(--red);"><strong>ANUPI</strong></h2>
                    <p></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/ENGLISHTEACHER.png"></div>
                    <div class="col-md-6">
                        <h3></h3>
                        <div class="getting-started-info">
                            <p>La Asociación Nacional Universitaria de Profesores de Inglés, A.C. tiene como misión promover el mejoramiento de la calidad de la enseñanza del idioma inglés como lengua extrajera y/o como segunda lengua, impulsar la profesionalización de los profesores dedicados al ejercicio de esta profesión e impulsar y difundir la investigación en esta área.</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button" style="background: var(--red);color: var(--white);border-color: var(--red);">Hazte socio ahora</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features" style="background: url(&quot;assets/img/Diccionario2.jpg&quot;) no-repeat;background-size: cover;">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="text-shadow: 01px 01px var(--red);"><strong>SERVICIOS</strong></h2>
                    <p></p>
                </div>
                <div class="row justify-content-center" style="color: var(--dark);background: rgba(255,255,255,0.7);font-size: 16px;">
                    <div class="col-md-5 feature-box"><i class="fa fa-group icon" style="color: var(--red);border-color: var(--red);text-shadow: 01px 01px var(--dark);"></i>
                        <h4 style="text-shadow: 01px 01px var(--dark);font-size: 25px;">Congresos</h4>
                        <p style="font-size: 20px;color: var(--dark);">Cada año se reúnen profesores de diferentes instituciones a nivel internacional para compartir lo mejor en el área. Asiste como participante y aprende, o bien, presenta y ten la oportunidad de ser publicado en diferentes medios!<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="far fa-handshake icon" style="color: var(--red);text-shadow: 01px 1px var(--dark);"></i>
                        <h4 style="text-shadow: 01px 01px var(--dark);font-size: 25px;">Membresias</h4>
                        <p style="font-size: 20px;color: var(--dark);">Hazte socio y obtén beneficios extraordinarios.<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fas fa-graduation-cap icon" style="color: var(--red);text-shadow: 1px 01px var(--dark);"></i>
                        <h4 style="text-shadow: 01px 01px var(--dark);font-size: 25px;">Certificaciones</h4>
                        <p style="font-size: 20px;">Acredita tu nivel de idioma con precios preferenciales.<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fa fa-leanpub icon" style="color: var(--red);text-shadow: 1px 01px var(--dark);"></i>
                        <h4 style="text-shadow: 01px 01px var(--dark);font-size: 25px;">Cursos</h4>
                        <p style="font-size: 20px;">Actualízate y adecúa tus planes y programas de estudio.<br></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="text-shadow: 01px 01px var(--red);"><strong>PROXIMO EVENTO!!!</strong></h2>
                    <p></p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="header-container w-100 d-block" style="padding-top: 100px;padding-bottom: 175px;background: url(&quot;assets/img/logo%20congreso%20presencial%202021.jpg&quot;) round;background-size: cover;height: 740px;">
                                <div class="container">
                                    <div class="col-md-6 offset-md-3 header-title">
                                        <p style="text-align: center;">&nbsp;<a class="btn btn-primary" role="button" style="border-radius: 10px;border-style: solid;border-color: var(--danger);background: var(--red);font-size: 20px;" href="registro.html">Quiero Participar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section style="padding: 15px;">
            <div>
                <div class="container-fluid">
                    <h2 style="text-align: center;margin: 15px;">¿Tienes dudas?</h2>
                    <form id="contactForm-1" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div id="successfail-1"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6" id="message-1">
                                <h2 class="h4"><i class="fa fa-envelope"></i> Contactanos<small><small class="required-input">&nbsp;(*required)</small></small></h2>
                                <div class="form-group"><label for="from-name">Nombre</label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" id="from-name-1" name="name" required="" placeholder="Nombre Completo">
                                    </div>
                                </div>
                                <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" id="from-email-1" name="email" required="" placeholder="abc@gmail.com">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-phone">Telefono</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="from-phone-1" name="phone" required="" placeholder="xx xxxx xxxx" style="width: 189.641px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="from-comments">Comentarios</label><textarea class="form-control" id="from-comments-1" name="comments" placeholder="Dinos que necesitas" rows="5"></textarea></div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-row">
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="h4"><i class="fa fa-user"></i>&nbsp;<span><strong>ANUPI</strong></span></h2><span style="font-size: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-world">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                                                <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                                                <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                                <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                            </svg>www.anupi.org.mx</span><span style="font-size: 18px;"><br><i class="fa fa-envelope-o"></i>&nbsp;<a href="mailto:asociacion@anupi.org.mx">asociacion@anupi.org.mx</a><br></span>
                                        <div></div>
                                        <div></div>
                                        <hr class="d-sm-none d-md-block d-lg-none">
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="h4"><i class="fa fa-location-arrow"></i>&nbsp;Localizanos</h2>
                                        <div></div>
                                        <div><span style="font-size: 18px;">Av 25 Pte No. 4105, Belisario Domínguez, 72180 Puebla, Pue.</span></div>
                                        <div></div>
                                        <div></div>
                                        <hr class="d-sm-none">
                                    </div>
                                    <div class="col-12">
                                        <div class="static-map">
                                            <section class="map-clean"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDqoAyXCVC97Hcx0wOVlnfPbceA84oM2Ns&amp;q=ANUPI+Av+25+Pte+No.+4105%2C+Belisario+Dom%C3%ADnguez%2C+72180+Puebla%2C+Pue.&amp;zoom=14" width="100%" height="450"></iframe></section><a rel="noopener" href="https://goo.gl/maps/2ZUTomDNWAe78jD68" target="_blank" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form id="contactForm-2" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div id="successfail-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6" id="message-2">
                                            <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small></h2>
                                            <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" id="from-name-2" name="name" required="" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" id="from-email-2" name="email" required="" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                    <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                    <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" id="from-calltime" name="call time">
                                                                <optgroup label="Best Time to Call">
                                                                    <option value="Morning" selected="">Morning</option>
                                                                    <option value="Afternoon">Afternoon</option>
                                                                    <option value="Evening">Evening</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" id="from-comments-2" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                    <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                                </div>
                                            </div>
                                            <hr class="d-flex d-md-none">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                                </div>
                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                    <div><span><strong>Name</strong></span></div>
                                                    <div><span>email@awebsite.com</span></div>
                                                    <div><span>www.awebsite.com</span></div>
                                                    <hr class="d-sm-none d-md-block d-lg-none">
                                                </div>
                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                    <div><span><strong>Office Name</strong></span></div>
                                                    <div><span>55 Icannot Dr</span></div>
                                                    <div><span>Daytone Beach, FL 85150</span></div>
                                                    <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                    <hr class="d-sm-none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
