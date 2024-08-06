<script>
        // Ensure this script runs on every page
        document.addEventListener('DOMContentLoaded', function() {
            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
            
            // Change the icons inside the button based on previous settings
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                themeToggleDarkIcon.classList.remove('hidden');
            }

            var themeToggleBtn = document.getElementById('theme-toggle');

            themeToggleBtn.addEventListener('click', function() {
                // toggle icons inside button
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                // if set via local storage previously
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }

                // if NOT set via local storage previously
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Spinner still visible until all content is fully loaded
            const spinner = document.getElementById('spinner');
            const navbar = document.getElementById('navbar');

            function hideSpinner() {
                if (spinner) {
                    spinner.classList.add('hidden');
                }
            }

            // Check if all content including images and external resources are loaded
            window.addEventListener('load', function() {
                hideSpinner();
            });

            // Also hide spinner if navbar has been loaded
            if (navbar) {
                navbar.addEventListener('load', function() {
                    hideSpinner();
                });
            }
        });
    </script>
    <script>
        //menu-top
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownButton = document.getElementById('mega-menu-full-dropdown-button');
            const dropdownIcon = document.getElementById('dropdown-icon');
            const dropdownMenu = document.getElementById('mega-menu-full-dropdown');
    
            dropdownButton.addEventListener('click', function () {
                // Toggle the rotate class
                dropdownIcon.classList.toggle('rotate');
                
                // Show or hide the dropdown menu
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>

