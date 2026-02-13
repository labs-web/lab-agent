// Navbar Scroll Logic
const navbar = document.getElementById('navbar');
const navbarInner = document.getElementById('navbar-inner');

if (navbar && navbarInner) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Docked State
            navbar.classList.remove('top-6', 'max-w-7xl', 'px-6');
            navbar.classList.add('top-0', 'max-w-full', 'px-0');

            navbarInner.classList.remove('rounded-2xl', 'border');
            navbarInner.classList.add('rounded-none', 'border-b');
        } else {
            // Floating State
            navbar.classList.add('top-6', 'max-w-7xl', 'px-6');
            navbar.classList.remove('top-0', 'max-w-full', 'px-0');

            navbarInner.classList.add('rounded-2xl', 'border');
            navbarInner.classList.remove('rounded-none', 'border-b');
        }
    });
}

// Back to Top Button Logic
const backToTopBtn = document.getElementById('backToTop');

if (backToTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            backToTopBtn.classList.remove('opacity-0', 'translate-y-10', 'invisible');
            backToTopBtn.classList.add('opacity-100', 'translate-y-0', 'visible');
        } else {
            backToTopBtn.classList.add('opacity-0', 'translate-y-10', 'invisible');
            backToTopBtn.classList.remove('opacity-100', 'translate-y-0', 'visible');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}
