<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Action Commune pour la Répuplique </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/acr-logo.jpg" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">ACR</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">A Propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Rejoindre</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Action Commune pour la Repuplique</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"> Veuillez vous enregistrer sur cette plate-form, et vous recevrez votre fiche de Membre!</p>
                        <a class="btn btn-primary btn-xl" href="#contact">Enregistrement</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Qui sommes Nous?</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl" href="#contact">Nous Rejoindre!</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Enregistrement de Membres!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Etes-vous prêt à rejoinndre l'ACR? Nous vous prions de vous Inscrire par Ici!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" method="post" action="{{ route('inscrire') }}">
                            @csrf

                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nom" id="nom" type="text" placeholder="Nom"  data-sb-validations="required" required/>
                                <label for="nom">Nom</label>
                                <div class="invalid-feedback" data-sb-feedback="nom:required">Un Nom est requis</div>
                            </div>
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="postnom" id="postnom" type="text" placeholder="Postnom" data-sb-validations="required" required/>
                                <label for="postnom">Postnom</label>
                                <div class="invalid-feedback" data-sb-feedback="postnom:required">Un Postnom est requis</div>
                            </div>
                            <!-- Name input-->
                            <div class="form-floating mb-5">
                                <input class="form-control" name="prenom" id="prenom" type="text" placeholder="Prenom" data-sb-validations="required" required/>
                                <label for="prenom">Prenom</label>
                                <div class="invalid-feedback" data-sb-feedback="prenom:required">Un Prenom est requis</div>
                            </div>

                            <!-- Photo input-->
                            <div class="form-floating mb-3">
                                <label for="profil" name="profil" style="margin-top: -50px;">Votre Photo de profil</label>
                                <input type="file" class="form-control-file" id="profil">
                            </div>

                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Address Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Un email est requis.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email non valide.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Numéro de telephone</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de telephone est requis.</div>
                            </div>

                            <!-- Pays input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="pays" id="pays">
                                    <option value="RDC" selected>RDC</option>
                                    <option value="Rwanda" >Rwanda</option>
                                </select>
                                <label for="pays">Pays</label>
                                <div class="invalid-feedback" data-sb-feedback="pays:required">Un Pays est requis.</div>
                            </div>

                            <!-- Province input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="province" id="province" type="text" placeholder="Province" data-sb-validations="required" />
                                <label for="province">Province</label>
                                <div class="invalid-feedback" data-sb-feedback="province:required">Une Province est requise</div>
                            </div>

                            <!-- Ville input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="ville" id="ville" type="text" placeholder="Ville" data-sb-validations="required" />
                                <label for="ville">Ville</label>
                                <div class="invalid-feedback" data-sb-feedback="ville:required">Une Ville est requise</div>
                            </div>

                            <!-- Quariter input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="quartier" id="quartier" type="text" placeholder="quartier" data-sb-validations="required" />
                                <label for="quartier">Quartier, Avenue & N°</label>
                                <div class="invalid-feedback" data-sb-feedback="quartier:required">Un quqrtier est requis.</div>
                            </div>

                            <!-- Qualification input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="qual" id="qualifiction" type="text" placeholder="Qualification" />
                                <label for="qualifiction">Qualification</label>
                            </div>

                            <!-- Departement input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="dep" id="departement" type="text" placeholder="Departement" />
                                <label for="departement">Departement</label>
                            </div>

                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="parcours" id="parcours" type="text" placeholder="Entez votre parcours Ici..." style="height: 10rem"></textarea>
                                <label for="parcours">Parcours : partie, Année, fonction occupée</label>
                            </div>


                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="question" id="question" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                <label for="question">Qu'entendez-vous par faire autrement ? Comment vous-y prendre correctement?</label>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Devenir Membre</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>.... 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
