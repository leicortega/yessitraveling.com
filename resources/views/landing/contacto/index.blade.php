@extends('landing.layout.app')

@section('title') Contácto @endsection

@section('content')
    <section class="large-gap contact-me contact-version-two">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-12">
                    <div class="first-row">
                        <div class="widget-sidebar find-on-map">
                            <div class="widget-header">
                                <h4>Find me on map</h4>
                            </div>
                            <div class="widget-container">
                                <div id="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23481.794658246406!2d21.09932224141022!3d42.635403966818785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549de02b95feb3%3A0x40df47fa2a0e9612!2sPrishtina!5e0!3m2!1sen!2s!4v1504188040281"
                                        style="border:0; width: 100%; height: 360px; border: none;"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-8">
                    <div class="widget-sidebar contact-me">
                        <div class="widget-header">
                            <h4>Contáctame</h4>
                        </div>
                        <div class="widget-content">
                            <div class="contact-form">
                                <form id="contact" action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="name" type="text" class="form-control" id="name"
                                                    placeholder="Tu nombre..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" class="form-control" id="email"
                                                    pattern="[^ @]*@[^ @]*" placeholder="Tu correo electronico..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="subject" type="text" class="form-control" id="subject"
                                                    placeholder="Asunto..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" class="form-control" id="message"
                                                    placeholder="Escribe tu mensaje..." required></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="filled-button">Enviar Mensaje</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-sidebar about-me">
                        <div class="widget-header">
                            <h4>Quien soy</h4>
                        </div>
                        <div class="widget-content">
                            <img src="{{asset('assets/images/perfil/yessi.jpg')}}" alt="" width="150" height="150" style="width: auto">
                            {{-- width="310" height="180" --}}
                            <p>Viajo bajo las alas de Dios, exaltando nuestro territorio.</p>
                            <h6>Yessica Vargas V.</h6>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/yessitraveling"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/yessitraveling"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/yessitraveling/"><i class="fa fa-instagram"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
