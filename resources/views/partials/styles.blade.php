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
    /* Hero section styles */
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
    /* Skills section styles */
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
    /* Projects flex styles */
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
