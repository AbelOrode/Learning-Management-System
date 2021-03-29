@extends('layouts.master')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('backend/images/About.jpg')}}); height: 500px">
    <div class="overlay"></div>

</header>

<!-- Main Content -->
<div class="container">
    <div class="row mb-5">
        <div class="page-heading mx-auto">
            <h1>Learning Management System </h1>
            <span class="subheading">An application created by Idogho Abel Orode (a00288615)</span>
        </div>
    </div>
    <div class="row mb-3">
        <div class="mx-auto">
          <div class="card">
              <div class="card-header">
                  <span>Overview</span>
              </div>
              <div class="card-body text-sm">
                <p>
                    A learning management system (LMS) is a software application for the administration, documentation, tracking, reporting, automation and delivery of educational courses, training programs, or learning and development programs. The learning management system concept emerged directly from e-Learning. Although the first LMS appeared in the higher education sector, the majority of the LMSs today focus on the corporate market. Learning Management Systems make up the largest segment of the learning system market. The first introduction of the LMS was in the late 1990s.
                </p>
              </div>
          </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <span>Features</span>
                </div>
                <div class="card-body text-sm">
                    <ul>
                        <li>Managing courses, users and roles</li>
                        <li>Online assessment and tracking students and employee attendance</li>
                        <li>User Feedback</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <span>Reference</span>
                </div>
                <div class="card-body text-sm">
                    <ul type="square">
                        <li> <a class="card-link" target="_blank" href="https://www.oxagile.com/article/history-and-trends-of-learning-management-system-infographics/">"History and Trends of Learning Management System (Infographic)". Oxagile. 12 April 2016.</a></li>
                        <li>Watson, W. R., & Watson, S. L. (2007). An Argument for Clarity: What are Learning Management
                            Systems, What are They Not, and What Should They Become?. TechTrends: Linking Research &
                            Practice to Improve Learning, 51(2), 28-34. doi:10.1007/s11528-007-0023-y.</li>
                        <li>Monarch Media, Inc(2010), Business White Paper Open-Source Learning Management Systems:
                            Sakai and Moodle</li>
                        <li>Szabo, M., & Flesher, K. (2002). CMI theory and practice: Historical roots of learning management
                            systems. Paper presented at the E-Learn 2002 World Conference on E-Learning in Corporate,
                            Government, Healthcare, & Higher Education, Montreal, Canada.</li>
                        <li>Newman, B. (2013). Agile methodology of web development. Retrieved from
                            http://www.inqbation.com/agile-methodology-of-web-development/</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
