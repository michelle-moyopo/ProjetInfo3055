@extends('layouts/app')
@section('content')
    <!-- ***** Breadcumb Area Start ***** -->
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">FAQ->don de sang</h3>
                        <p>Vous vous posez une question sur le don de sang ?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Elements Area Start ***** -->
    <section class="elements-area section-padding-100-0">
        <div class="container">

            <div class="row">
                <!-- ***** Progress Bars & Accordions ***** -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Question frequement &amp; pose</h2>
                    </div>
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Qui peut donner du sang?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Toute personne âgée de 18 ans inclus peut donner du sang.
                                        Attention, le premier don de sang doit avoir lieu avant le jour du 66ème anniversaire.
                                        Au-delà du 66ème anniversaire, tous les types de dons sont autorisés uniquement si le don précédent remonte à moins de 3 ans.
                                        Il faut être en bonne santé et peser au minimum 50kg.
                                        L’aptitude au don sera vérifiée lors d’un entretien médical avant le don.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">quelle est la frequence de don de sang?
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>On peut donner du sang 4 fois par an, avec un intervalle de 2 mois minimum entre deux dons de sang.

                                        Pour les dons de plasma, le délai à respecter avec tout autre don est de 2 semaines.

                                        Pour les dons de plaquettes, nous recommandons d’attendre 1 mois entre un don de sang et un don de plaquettes, mais le délai minimum est de 2 semaines.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">ou et quand peut t-on donner du sang?
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Deux possibilités :
                                        En collecte itinérante : tous les lieux de prélèvement et leurs horaires sont rassemblés dans un agenda des collectes. Il vous permet ainsi de situer facilement le lieu le plus aisé pour vous afin de donner du sang. Ces collectes sont, pour la plupart, organisées sans rendez-vous (sauf si un lien d'inscription figure à côté des infos pratiques de la collecte en question dans l'agenda). Nous vous y accueillons durant les heures d'ouverture.

                                        Dans les Sites de prélèvement fixes : vous pouvez prendre rendez-vous en ligne pour un don de sang. Les dons de plasma et de plaquettes se fixent toujours en appelant votre site favori durant ses heures d'ouverture.

                                        Un numéro de téléphone gratuit est à votre disposition pour tout renseignement : +237 657515280. Vous pouvez également nous envoyer un mail à info@fastblood.com.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--deuxieme bloc -->
                <div class="col-12">
                        <div class="elements-title">
                            <h2>Mon groupe sanguin ?</h2>
                        </div>
                        <div class="accordions mb-100" id="groupesanguin" role="tablist" aria-multiselectable="true">
                            <!-- single accordian area -->
                            <div class="panel single-accordion">
                                <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#groupesanguin" href="#collapse1">Comment puis-je connaitre mon grroupe sanguin ?
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a></h6>
                                <div id="collapse1" class="accordion-content collapse show">
                                    <p>Après deux dons de sang, nous vous envoyons votre carte de donneur sur laquelle nous mentionnons votre groupe sanguin. Vous pouvez également le demander au médecin lors de votre don de sang.
                                            Cependant, nous ne pouvons vous le communiquer ni par téléphone ni par e-mail.</p>
                                </div>
                            </div>
                            <!-- single accordian area -->
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapse2">quelle est la proportion des groupes de sang au Cameroun ?
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            </a>
                                </h6>
                                <div id="collapse2" class="accordion-content collapse">
                                    <p>- Groupe O : 44 %
                                            - Groupe A : 45 %
                                            - Groupe B : 8 %
                                            - Groupe AB : 3 %

                                            En savoir plus sur la <a href="">répartition des groupes sanguins.</a></p>
                                </div>
                            </div>
                            <!-- single accordian area -->
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse3">ou et quand peut t-on donner du sang?
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                </h6>
                                <div id="collapse3" class="accordion-content collapse">
                                    <p>Deux possibilités :
                                            En collecte itinérante : tous les lieux de prélèvement et leurs horaires sont rassemblés dans un agenda des collectes. Il vous permet ainsi de situer facilement le lieu le plus aisé pour vous afin de donner du sang. Ces collectes sont, pour la plupart, organisées sans rendez-vous (sauf si un lien d'inscription figure à côté des infos pratiques de la collecte en question dans l'agenda). Nous vous y accueillons durant les heures d'ouverture.

                                            Dans les Sites de prélèvement fixes : vous pouvez prendre rendez-vous en ligne pour un don de sang. Les dons de plasma et de plaquettes se fixent toujours en appelant votre site favori durant ses heures d'ouverture.

                                            Un numéro de téléphone gratuit est à votre disposition pour tout renseignement : +237 657515280. Vous pouvez également nous envoyer un mail à info@fastblood.com.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->
@endsection
