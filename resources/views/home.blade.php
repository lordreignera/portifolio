@extends('layouts.admin')
@section('content')
<style>
    /* Theme Variables */
    :root {
        --primary-color: #0a1931;
        --secondary-color: #185adb;
        --accent-color: #00aaff;
        --light-bg: #ffffff;
    }

    header, section {
        background: var(--primary-color);
    }

    /* Logo Button */
    .logo-btn {
        background: var(--light-bg);
        color: var(--primary-color);
        font-size: 2rem;
        letter-spacing: 1px;
        padding: 8px 28px;
        border-radius: 2rem;
        box-shadow: 0 2px 8px #0002;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
    }

    .logo-btn:hover {
        color: var(--secondary-color);
        text-decoration: none;
    }

    /* Section Headings */
    .section_title h3 {
        font-size: 2.3rem;
        font-weight: 700;
        text-align: center;
    }

    /* Buttons */
    .btn-outline-accent {
        border: 2px solid var(--accent-color);
        color: var(--accent-color);
        transition: all .3s;
        padding: 8px 24px;
        border-radius: 30px;
        display: inline-block;
    }

    .btn-outline-accent:hover {
        background: var(--accent-color);
        color: #fff;
    }

    /* Card Styling */
    .single_service,
    .single_gallery {
        background: rgba(10, 25, 49, 0.2);
        border-radius: 1rem;
        transition: transform .3s, box-shadow .3s;
    }

    .single_service:hover,
    .single_gallery:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    /* About Typing effect */
    #about-typing {
        font-size: 1.25rem;
        min-height: 120px;
        font-family: 'Fira Mono', 'Consolas', monospace;
        white-space: pre-line;
        color: #fff !important;
    }
    #about .download_text, #about .download_text h3, #about .download_text a {
        color: #fff !important;
    }

    /* Ensure experience section paragraphs are white */
    #experience p {
        color: #fff !important;
    }

    /* Ensure project descriptions are white */
    #works .single_gallery span,
    #works .single_gallery h4,
    #works .single_gallery a,
    #works .single_gallery .p-3 {
        color: #fff !important;
    }

    /* Contact info styles */
    #contact .contact-info-list {
        font-size: 1.25rem;
        color: #fff !important;
    }
    #contact .contact-info-list a {
        color: #fff !important;
        font-size: 1.25rem;
    }
    #contact .contact-info-list i {
        color: #fff !important;
        font-size: 1.5rem;
        margin-right: 0.7rem;
    }
</style>

<!-- Navigation Bar -->
<header>
    <div class="container-fluid">
        <div class="row align-items-center py-3">
            <div class="col-xl-3 col-lg-2">
                <a href="#hero" class="logo-btn">NorahEra</a>
            </div>
            <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                <nav>
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a class="nav-link text-white" href="#hero">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#works">Projects</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#experience">Experience</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-3 col-lg-3 d-none d-lg-block text-end">
                <a href="#contact" class="btn btn-light" style="border-radius:30px;">Let’s Talk</a>
            </div>
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none text-center">
                    <!-- Add mobile menu here -->
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section id="hero">
    <style>
        .hero-bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
            opacity: 0.35;
        }
        #hero .container {
            position: relative;
            z-index: 2;
        }
        #hero {
            position: relative;
            overflow: hidden;
        }
        .hero-title {
            color: #fff;
            font-size: 2.7rem;
            font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
            font-weight: 800;
            line-height: 1.2;
        }
        .hero-role {
            color: #fff;
            font-size: 1.7rem;
            font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
            font-weight: 500;
        }
        .hero-desc {
            color: #fff;
            font-size: 1.25rem;
            font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
            margin-top: 1rem;
        }
        .hero-btn {
            margin-top: 1.5rem;
            margin-right: 1rem;
        }
        .hero-profile-img {
            max-width: 340px;
            width: 100%;
            height: auto;
            border-radius: 1.5rem;
            box-shadow: 0 4px 32px rgba(0,0,0,0.18);
            border: none;
            margin-top: 1.5rem;
        }
    </style>
    <video class="hero-bg-video" src="/images/home.mp4" autoplay loop muted playsinline></video>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="hero-title">Hi there, I am <span style="color:var(--accent-color);">Norah Era</span></h3>
                <span class="hero-role">System Analyst &amp; Developer</span>
                <p class="hero-desc">I innovate a solution to your Problem 🚀</p>
                <a href="#works" class="btn-outline-accent hero-btn">View My Projects</a>
                <a href="#contact" class="btn btn-primary hero-btn">Let's Solve Your Problem</a>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/images/profile2.jpg" alt="Norah Era" class="img-fluid hero-profile-img">
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" style="background: linear-gradient(135deg, var(--secondary-color) 60%, var(--primary-color) 100%);">
    <div class="container py-5">
        <div class="section_title text-white mb-5">
            <h3>Experience</h3>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="single_service text-center text-white p-4">
                    <img src="/admin/img/svg_icon/1.svg" alt="Full Stack Icon" class="mb-3" width="60">
                    <h3>Full Stack Junior Developer</h3>
                    <p>2 years of experience building web and data systems.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service text-center text-white p-4">
                    <img src="/admin/img/svg_icon/2.svg" alt="Apprenticeship Icon" class="mb-3" width="60">
                    <h3>Apprenticeship</h3>
                    <p>Currently at Refactory Uganda, learning and building real-world solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service text-center text-white p-4">
                    <img src="/admin/img/svg_icon/3.svg" alt="Volunteer Icon" class="mb-3" width="60">
                    <h3>Volunteer Developer</h3>
                    <p>System Developer at CPHL, contributing to public health tech.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="works" style="background: linear-gradient(135deg, var(--primary-color) 60%, var(--secondary-color) 100%);">
    <video class="hero-bg-video" src="/images/project.mp4" autoplay loop muted playsinline style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:0;opacity:0.35;"></video>
    <div class="container py-5" style="position:relative;z-index:2;">
        <div class="section_title text-white mb-5">
            <h3>My Projects</h3>
        </div>
        <!-- Skills Section -->
        <div class="mb-5 text-center">
            <style>
                .skills-list {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 1.5rem;
                    margin-bottom: 1.5rem;
                }
                .skill-card {
                    background: #e3f0ff;
                    border-radius: 1.2rem;
                    box-shadow: 0 2px 8px #0001;
                    padding: 1.2rem 1.5rem 1rem 1.5rem;
                    min-width: 120px;
                    min-height: 120px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }
                .skill-card i, .skill-card img {
                    font-size: 2.2rem;
                    margin-bottom: 0.4rem;
                    color: #185adb;
                }
                .skill-card span, .skill-card label {
                    color: #0a1931;
                    font-size: 1.1rem;
                    font-weight: 600;
                }
                .skill-badge {
                    background: var(--accent-color);
                    color: #fff;
                    border-radius: 1rem;
                    padding: 0.3rem 1.1rem;
                    font-size: 1rem;
                    margin-top: 0.5rem;
                }
            </style>
            <div class="skills-list">
                <div class="skill-card"><i class="fab fa-php"></i><span>PHP</span></div>
                <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel" width="32" height="32" onerror="this.style.display='none';this.parentNode.appendChild(document.createTextNode('Laravel'));"/><span>Laravel</span></div>
                <div class="skill-card"><i class="fab fa-python"></i><span>Python</span></div>
                <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain.svg" alt="Django" width="32" height="32" onerror="this.style.display='none';this.parentNode.appendChild(document.createTextNode('Django'));"/><span>Django</span></div>
                <div class="skill-card"><i class="fab fa-node-js"></i><span>Node.js</span></div>
                <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" alt="Express" width="32" height="32" onerror="this.style.display='none';this.parentNode.appendChild(document.createTextNode('Express'));"/><span>Express</span></div>
                <div class="skill-card"><span class="skill-badge">Ready to Learn More..</span></div>
            </div>
        </div>
        <style>
            #works {
                position: relative;
                overflow: hidden;
            }
            .projects-flex {
                display: flex;
                flex-wrap: wrap;
                gap: 2rem;
                justify-content: center;
            }
            .project-card {
                background: rgba(10, 25, 49, 0.2);
                border-radius: 1rem;
                color: #fff;
                width: 340px;
                margin-bottom: 1.5rem;
                box-shadow: 0 8px 16px rgba(0,0,0,0.08);
                display: flex;
                flex-direction: column;
                align-items: center;
                transition: transform .3s, box-shadow .3s;
            }
            .project-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 12px 24px rgba(0,0,0,0.13);
            }
            .project-card img {
                width: 100%;
                height: 180px;
                object-fit: cover;
                border-radius: 1rem 1rem 0 0;
            }
            .project-card .p-3 {
                width: 100%;
                text-align: left;
            }
            .project-card span {
                font-size: 1rem;
                color: #fff;
                font-weight: 600;
            }
            .project-card h4 {
                font-size: 1.25rem;
                color: #fff;
                margin: 0.5rem 0 0.2rem 0;
            }
        </style>
        <div class="projects-flex">
            @php
                $projects = [
                    ['img'=>'/images/audit.webp','tech'=>'PHP','title'=>'Audit System','link'=>'https://auditsuite.eratechnologies.net/public/login'],
                    ['img'=>'https://via.placeholder.com/400x250?text=No+Image','tech'=>'Node.js/Express','title'=>'Vision Group Analytics System','link'=>'https://vgad-aphb.onrender.com/'],
                    ['img'=>'https://via.placeholder.com/400x250?text=No+Image','tech'=>'Python','title'=>'Multi Facility System'],
                    ['img'=>'/images/hospital.jpg','tech'=>'PHP','title'=>'Hospital Management System'],
                    ['img'=>'/images/voting.jpg','tech'=>'PHP','title'=>'eVoting System']
                ];
            @endphp
            @foreach($projects as $proj)
            <div class="project-card">
                <img src="{{ $proj['img'] }}" alt="{{ $proj['title'] }}">
                <div class="p-3">
                    <span>{{ $proj['tech'] }}</span>
                    @if(isset($proj['link']))
                        <a href="{{ $proj['link'] }}" target="_blank"><h4>{{ $proj['title'] }}</h4></a>
                        <a href="{{ $proj['link'] }}" target="_blank" class="btn btn-outline-primary btn-sm mt-2" style="border-radius:22px; font-weight:600;">View Demo</a>
                    @else
                        <h4>{{ $proj['title'] }}</h4>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" style="background: linear-gradient(135deg, var(--secondary-color) 60%, var(--primary-color) 100%);">
    <div class="container py-5">
        <div class="download_text text-white">
            <h3 class="mb-4">About Me</h3>
            <p id="about-typing"></p>
            <a href="/NorahEraCV.pdf" class="btn-outline-accent mt-3" download>Download My CV</a>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const text = `I’m Norah Era Nakamatte, a System Analyst and Developer passionate about turning challenges into practical digital solutions.
                        With over two years of hands-on experience, I’ve designed and built systems in PHP/Laravel, Python/Django, and Node.js/Express—including audit system, hospital management system, and e-voting system that can be used different organizations.
                        I combine technical expertise with a business-school mindset—understanding your problem first, then designing the right technology to solve it. This approach was sharpened during my apprenticeship at Refactory Uganda, which blends software engineering with business thinking.
                        I also volunteer at the Central Public Health Laboratories (CPHL), helping to implement and support digital health systems more so integrations between laboratory system ALIS and hospital system.
                        My goal is to create reliable, human-centered technology that empowers organizations to work smarter, make data-driven decisions, and deliver better services to their communities.`; 
        let i = 0;
        function typeWriter() {
            if (i < text.length) {
                document.getElementById('about-typing').innerHTML += text.charAt(i);
                i++;
                setTimeout(typeWriter, 22);
            }
        }
        typeWriter();
    });
    </script>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container py-5">
        <div class="row align-items-start g-4">
            <div class="col-lg-6">
                <h3 class="mb-4" style="color:#fff;">Contact Me</h3>
                <ul class="list-unstyled mb-4 contact-info-list">
                    <li class="mb-3 d-flex align-items-center">
                        <span class="me-3"><i class="fa fa-phone"></i></span>
                        <a href="https://wa.me/256708356505" target="_blank">+256 708 356505 (WhatsApp)</a>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="me-3"><i class="fa fa-envelope"></i></span>
                        <a href="mailto:norahnakamatte05@gmail.com">norahnakamatte05@gmail.com</a>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="me-3"><i class="fa fa-linkedin"></i></span>
                        <a href="https://www.linkedin.com/in/nakamatte-norah-3092a1230/" target="_blank">LinkedIn</a>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="me-3"><i class="fa fa-github"></i></span>
                        <a href="https://github.com/YOURGITHUBUSERNAME" target="_blank">GitHub</a>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="me-3"><i class="fa fa-map-marker"></i></span>
                        <a href="https://maps.app.goo.gl/EJGFtXBdcaEMETUs6" target="_blank">Kampala, Uganda (Makerere Hill Road)</a>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="me-3"><i class="fa fa-globe"></i></span>
                        <span>Available: For remote work worldwide 🌍</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="bg-white p-4 rounded shadow">
                    <h4 class="mb-3">Send Me a Message</h4>
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send WhatsApp Message</button>
                    </form>
                    <!-- CSRF Token for AJAX -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <script>
                    document.getElementById('contactForm').addEventListener('submit', function(e) {
                        e.preventDefault();
                        var name = document.getElementById('name').value;
                        var email = document.getElementById('email').value;
                        var message = document.getElementById('message').value;
                        var whatsappNumber = '256708356505'; // Your WhatsApp number
                        var whatsappMsg = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;
                        // Open WhatsApp with pre-filled message
                        window.open(`https://wa.me/${whatsappNumber}?text=${whatsappMsg}`, '_blank');
                        // Send email via AJAX to Laravel route
                        fetch('/contact/send', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({ name, email, message })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if(data.success) {
                                alert('Message sent to WhatsApp and email!');
                            } else {
                                alert('There was an error sending the email.');
                            }
                        })
                        .catch(error => {
                            alert('There was an error sending the email.');
                        });
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <footer style="background: #0a1931; color: #fff; text-align: center; padding: 1.2rem 0; font-size: 1rem;">
    All rights reserved &copy; eratechnologies.net 2025
    </footer>
</section>
@endsection

