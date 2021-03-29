@extends('layouts.master')


@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset('backend/images/contact-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                    <h2 class="card-header text-center">Abel Orode Idogho </h2>
                    <img src="{{ asset('backend/images/AbelProfile.png') }}" alt="Portrait of Abel Orode"
                         class="w-10 mx-auto mt-3">
                    <div class="card-body">
                        <blockquote class="blockquote text-center w-75 mx-auto">
                            <p class="mb-0">A Software Engineer with an excellent track record in delivering high quality code, and a problem solver with high adaptive learning abilities</p>
                            <p>Logical thinker with excellent communication skills and also a team player. Smart, enthusiastic and very passionate about technology</p>
                            <footer class="blockquote-footer">Abel Orode Idogho</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <h2 class="card-header text-center">Contact info</h2>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                Abel Orode Idogho
                                <hr>
                            </div>
                        </div>

                        <div class="media">

                            <ul class="media-body list-unstyled">
                                <li><i class="fab fa-fw fa-mail-reply"></i><a href="mailto:abelorode@gmail.com">abelorode@gmail.com</a></li>
                                <li><i class="fab fa-fw fa-linkedin text-muted"></i> <a href="https://www.linkedIn.com/in/abel-orode/1bb71b145">LinkedIn</a></li>
                                <li><i class="fab fa-fw fa-github text-muted"></i> <a href="#0">@twitterUser</a></li>
                                <li>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <address class="mb-0">
                                    Apartment 6, Dailys<br>
                                    N37 XW92 Athlone<br>
                                    Ireland
                                </address>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                    <h2 class="card-header text-center">Work Experience</h2>
                    <div class="card-body">
                        <div class="media mb-2">
                            <div class="media-body mb-4">
                                <h3 class="h4 mb-1">IT Instructor/Web Developer</h3>
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline"><h5
                                        class="mb-0"><a href="#0">NIIT Education & Training Center</a></h5> <small
                                        class="d-block text-uppercase font-weight-bold text-muted">
                                        <time datetime="2018-05">May 2018</time> &ndash;
                                        <time datetime="2020-01">January 2020</time>
                                    </small></div>
                            </div>
                        </div>
                        <ul>
                            <li>Involved in Database and Server Maintenance</li>
                            <li>Performing system testing and bug fixing</li>
                            <li>Involved in software development activities like requirements, analysis, designs,
                                development, and documentation
                            </li>
                        </ul>
                        <hr>
                        <div class="media mb-2">
                            <div class="media-body">
                                <h3 class="h4 mb-1">IT Specialist</h3>
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline"><h5
                                        class="mb-0"><a href="#0">Nigeria Army School of Supply and Transport</a></h5>
                                    <small class="d-block text-uppercase font-weight-bold text-muted">
                                        <time datetime="2016-04">April 2016</time> &ndash;
                                        <time datetime="2017-09">August 2017</time>
                                    </small></div>
                            </div>
                        </div>
                        <ul>
                            <li>Installation and configuration of computer hardware and software systems</li>
                            <li>Monitoring and maintaining computer systems and hardware.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <h2 class="card-header text-center">Skills</h2>
                    <div class="card-body">
                        <div class="mb-3">
                            <h3 class="h5 mb-3">Coding Languages</h3>
                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-html5"></i> HTML5</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-100" role="progressbar" aria-valuenow="100"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-css3"></i> CSS3</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-100" role="progressbar" aria-valuenow="100"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-sass"></i> Sass</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-100" role="progressbar" aria-valuenow="100"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-js"></i> JavaScript</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-75" role="progressbar" aria-valuenow="95"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h3 class="h5 mb-3">Front-End Frameworks</h3>
                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-react"></i> React</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-75" role="progressbar" aria-valuenow="75"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-angular"></i> Angular</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-50" role="progressbar" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-vuejs"></i> Vue.js</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-100" role="progressbar" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <h3 class="h5 mb-3">Front-End Tools</h3>

                            <h4 class="h6 text-muted"><i class="fab fa-fw fa-npm"></i> NPM</h4>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-secondary w-50" role="progressbar" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="card mb-4">
        <h2 class="card-header text-center">Education</h2>
        <div class="card-body">
            <div class="media mb-2">
                <i class="fas fa-university fa-3x fa-fw text-primary mr-2"></i>
                <div class="media-body mb-5">
                    <h3 class="h4 mb-1">MSc in Software Engineering</h3>
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline"><h5 class="mb-0">
                            <a href="#0">Athlone Institute of Technology</a></h5> <small
                            class="d-block text-uppercase font-weight-bold text-muted">
                            <time datetime="2020-10">September 2020</time> &ndash;
                            <time datetime="2021-10">September 2021</time>
                        </small></div>
                </div>
            </div>

            <hr>
            <div class="media mb-2">
                <i class="fas fa-university fa-3x fa-fw text-primary mr-2"></i>
                <div class="media-body">
                    <h3 class="h4 mb-1">BSc Computer Science & Mathematics</h3>
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline"><h5 class="mb-0">
                            <a href="#0">Novena University</a></h5> <small
                            class="d-block text-uppercase font-weight-bold text-muted">
                            <time datetime="2011-11">November 2011</time> &ndash;
                            <time datetime="2015-09">August 2015</time>
                        </small></div>
                </div>
            </div>
            <hr>

        </div>
    </div>
    </div>

    </div>

@endsection
