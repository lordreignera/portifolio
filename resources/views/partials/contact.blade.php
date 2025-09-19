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
                    <form id="whatsapp-contact-form">
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
                        <button type="submit" class="btn btn-primary">Send via WhatsApp</button>
                    </form>
                    <script>
                    document.getElementById('whatsapp-contact-form').addEventListener('submit', function(e) {
                        e.preventDefault();
                        var name = this.name.value.trim();
                        var email = this.email.value.trim();
                        var message = this.message.value.trim();
                        var phone = '256708356505'; // WhatsApp number in international format
                        var text = encodeURIComponent('Name: ' + name + '\nEmail: ' + email + '\nMessage: ' + message);
                        var url = 'https://wa.me/' + phone + '?text=' + text;
                        window.open(url, '_blank');
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
