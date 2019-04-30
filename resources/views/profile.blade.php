@extends('layouts.app')

@section('content')
  <title>Pedro Silva Portfolio</title>


</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Pedro Silva</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('images/profile.jpg')}}" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
    
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Projects</a>
        </li>

      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Pedro
          <span class="text-primary">Silva</span>
        </h1>
        <div class="subheading mb-5">Rua das Adegas São Roque do Pico ·
          <a href="mailto:pedro.silva.bos@gmail.com">pedro.silva.bos@gmail.com</a>
        </div>
        <p class="lead mb-5"><a href="https://www.youtube.com/watch?v=c20CeqL2Dh0">Quake 3 die hard player</a>, gym addict, wannabe chef and dedicated father.
          These are all the extra qualities I bring attached to my recently acquired Full Stack Developer skills.
          Technology and programming were always in my blood. When I was a kid I would make mIRC scripts for myself
          Nowadays as a Developer, I dive into the rabbit hole of code with no fear, and it still makes me feel like when I was a kid.</p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/psfaria/">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://github.com/pedrosilvabos">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://www.facebook.com/PsFariaJoao">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="skype:live:pedro.silva.bos?call">
            <i class="fab fa-skype"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">

          <li>
            <span class="devicons devicons-html5">
            <span class="devicons devicons-css3">
            <span class="devicons devicons-javascript">
            <span class="devicons devicons-jquery">
            <span class="devicons devicons-php">
            <span class="devicons devicons-laravel">
            <span class="devicons devicons-heroku">
            <span class="devicons devicons-nodejs">
            <span class="devicons devicons-java">
            <span class="devicons devicons-mysql">
            <span class="devicons devicons-github_badge">
            <span class="devicons devicons-scrum">
            <span class="devicons devicons-responsive">
            <span class="devicons devicons-ruby_on_rails">
            <span class="devicons devicons-terminal">
            <span class="devicons devicons-windows">
            <span class="devicons devicons-apple">
            <span class="devicons devicons-linux">
            <span class="devicons devicons-atom">
            <span class="devicons devicons-npm">
          </li>
      </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Mobile-First, Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Browser Testing &amp; Debugging</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Functional Teams</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>

    <hr class="m-0">

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>


</body>

</html>
@endsection
