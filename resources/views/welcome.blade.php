<x-guest-layout>
    <!-- Hero Section -->
    <section class="hero-section bg-galaxy-black text-star-blue">
        <!-- Particles -->
        <div id="tsparticles"></div>

        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="text-4xl font-bold mb-4">Welcome to the Galaxy</h1>
            <p class="text-lg mb-8">Explore the universe and discover the mysteries of space with us.</p>
            <a href="#services" class="hero-button">Learn More</a>
        </div>

        
    </section>
    @push('scripts')
        <!-- tsparticles script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/3.5.0/tsparticles.bundle.min.js" integrity="sha512-dAcjIzQJfQUV1WljsyVr4c7nzdqmGiNSEM8IUBvSz37GvmwbSWxXJv9MNqL+yQyI70XAk4DDz91OsyCdqyGbNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                tsParticles.load("tsparticles", {
                    particles: {
                        number: {
                            value: 100,
                            density: {
                                enable: true,
                                value_area: 800
                            }
                        },
                        color: {
                            value: "#ffffff"
                        },
                        shape: {
                            type: "circle",
                        },
                        opacity: {
                            value: 0.5,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 1,
                                opacity_min: 0.1,
                                sync: false
                            }
                        },
                        size: {
                            value: 3,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 4,
                                size_min: 0.1,
                                sync: false
                            }
                        },
                        line_linked: {
                            enable: false
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: false,
                            straight: false,
                            out_mode: "out",
                            bounce: false,
                            attract: {
                                enable: false,
                                rotateX: 600,
                                rotateY: 1200
                            }
                        }
                    },
                    interactivity: {
                        events: {
                            onhover: {
                                enable: true,
                                mode: "repulse"
                            },
                            onclick: {
                                enable: true,
                                mode: "push"
                            },
                            resize: true
                        },
                        modes: {
                            repulse: {
                                distance: 200,
                                duration: 0.4
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    },
                    retina_detect: true
                });
            });
        </script>
    @endpush
</x-guest-layout>
