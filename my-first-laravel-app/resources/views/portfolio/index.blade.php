@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center py-5">
    <div class="container">
        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img mb-3" style="width:150px; border-radius:50%;">
        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>
        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>
        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section py-5">
    <div class="container">
        <h2 class="section-title mb-4">About Me</h2>
        <div class="row align-items-center">
            <!-- Text Left -->
            <div class="col-md-7">
                <p class="fs-5">
                    Hello! I’m James Ayunting, and I like spending my time doing the things that keep me inspired and motivated. I’m a big fan of online games, especially Valorant, because they challenge my focus, strategy, and teamwork skills. 
                    Playing basketball is another passion of mine — it keeps me active, competitive, and reminds me of the value of discipline and cooperation.
                </p>
                <p class="fs-5">
                    When I want to relax, I enjoy watching movies. Films give me fresh perspectives, creativity, and sometimes even lessons that I can apply in real life. Whether it’s action, comedy, or drama, movies are my way of balancing fun and learning at the same time.
                </p>
                <p class="fs-5">
                    Overall, I’m someone who enjoys both the thrill of games and sports, as well as the calm and inspiration from movies. These hobbies shape who I am and help me grow not just in skills, but also in character.
                </p>
            </div>

            <!-- Images Right -->
            <div class="col-md-5 text-center">
    <div class="mb-3">
        <img src="https://staticg.sportskeeda.com/editor/2022/06/badb3-16566096904398-1920.jpg" 
             alt="About {{ $portfolio['name'] }}" 
             class="img-fluid rounded shadow"
             style="max-width: 250px; height: auto;">
    </div>
    <div>
        <img src="https://www.aljazeera.com/wp-content/uploads/2024/10/2024-10-11T013631Z_2017726860_MT1USATODAY24457004_RTRMADP_3_NBA-PRESEASON-LOS-ANGELES-LAKERS-AT-MILWAUKEE-BUCKS-1729514163.jpg?resize=1920%2C1440" 
             alt="Another photo of {{ $portfolio['name'] }}" 
             class="img-fluid rounded shadow"
             style="max-width: 250px; height: auto;">
    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section bg-light py-5">
    <div class="container">
        <h2 class="section-title mb-4 text-center">My Projects</h2>
        <div class="row text-center">
            <!-- Project 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="https://codeconvey.com/wp-content/uploads/2021/09/how-to-create-a-calendar-in-html-and-css.png.webp" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Calendar in HTML</h5>
                        <p class="card-text">We developed a simple calendar using HTML. The purpose of this project was to demonstrate the proper structure and use of HTML elements to create a clear and functional layout. This project served as practice for organizing content effectively and presenting data in a structured format..</p>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="https://smallbusiness-production.s3.amazonaws.com/uploads/2021/12/Web-designer-scaled-1.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Web Design for Online Shop</h5>
                        <p class="card-text">We designed a prototype for an online shop website. The focus was on layout, color scheme, and overall interface to ensure a user-friendly experience. This project allowed us to apply web design concepts and generate creative ideas for a future e-commerce platform.</p>
                    </div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReCZ7qep0RgCFk3dxEJUiS79crzOopO1W3JA&s" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Digital Portfolio (HTML & CSS)</h5>
                        <p class="card-text">I created a personal digital portfolio using only HTML and CSS. It showcases my skills and projects in a clean and responsive design. Although it is basic and does not include Laravel or backend frameworks, it effectively demonstrates my front-end development abilities and design sense.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Get In Touch</h2>
        <!-- Contact content -->
    </div>
</section>

@endsection
