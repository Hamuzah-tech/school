<!-- index.php -->
<?php
$conn = new mysqli("localhost", "root", "", "news_db");
$result = $conn->query("SELECT * FROM news ORDER BY date DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sir Harry Johnston International School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .group:hover .group-hover\:md\:visible {
            visibility: visible !important;
        }
    </style>
</head>
<body class="bg-white-50">
    <nav class="sticky top-0 z-[100]">
        <div class="w-full">
            <!-- Primary Navigation -->
            <div class="flex items-center justify-between py-4 bg-white text-blue-900 w-full px-4">
                <div class="flex items-center">
                    <img src="school_logo.jpg" alt="School Logo" class="h-16">
                    <img src="pop.png" alt="School Logo" class="h-16">
                </div>
                <div class="flex items-center space-x-6">
                    <div class="md:flex items-center space-x-4 flex-col md:flex-row">
                        <a href="index.html" class="hover:text-sky-200 hidden md:block">
                            <i class="fas fa-home"></i> Home
                        </a>
                        <a href="tel:+1234567890" class="hover:text-sky-200 hidden md:block">
                            <i class="fas fa-phone"></i> (+265)0 1 11 625 280
                        </a>
                        <a href="mailto:info@school.com" class="hover:text-sky-200 hidden md:block">
                            <i class="fas fa-envelope"></i> greatlearning@sirharryszomba.com
                        </a>
                        <div class="hidden md:flex items-center space-x-3">
                            <a href="#" class="hover:text-sky-200"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="hover:text-sky-200"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="hover:text-sky-200"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="hover:text-sky-200"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <button id="menuBtn" class="md:hidden text-2xl" aria-label="Toggle Menu">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Primary Navigation -->
            <div class="md:hidden bg-white text-blue-900 px-4 py-2 hidden" id="mobilePrimaryMenu">
                <div class="flex flex-col space-y-2">
                    <a href="index.html" class="hover:text-sky-200">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a href="tel:+1234567890" class="hover:text-sky-200">
                        <i class="fas fa-phone"></i> (+265)0 1 11 625 280
                    </a>
                    <a href="mailto:info@school.com" class="hover:text-sky-200">
                        <i class="fas fa-envelope"></i> greatlearning@sirharryszomba.com
                    </a>
                    <div class="flex items-center space-x-3">
                        <a href="#" class="hover:text-sky-200"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-sky-200"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-sky-200"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-sky-200"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Secondary Navigation -->
            <div class="py-4 bg-blue-900 text-white w-full">
                <ul id="mobileMenu" class="hidden md:flex flex-col md:flex-row justify-center md:space-x-4 transition-all duration-300 ease-in-out container mx-auto px-4 md:space-y-0 space-y-2">
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap flex justify-between items-center">
                            About Us
                            <i class="fas fa-chevron-down ml-2 md:hidden"></i>
                        </a>
                        <ul class="hidden md:group-hover:block absolute md:top-full md:left-0 bg-blue-800 min-w-[200px] shadow-lg w-full md:w-auto z-50">
                            <li><a href="principal's.html" class="block px-4 py-2 hover:bg-blue-700">Principal's Welcome</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Our Vision and Mission</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">School Development Plan</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Our Team</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">School History</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Community Links</a></li>
                        </ul>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap flex justify-between items-center">
                            Primary
                            <i class="fas fa-chevron-down ml-2 md:hidden"></i>
                        </a>
                        <ul class="hidden md:group-hover:block absolute md:top-full md:left-0 bg-blue-800 min-w-[200px] shadow-lg w-full md:w-auto z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Primary Provision</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Class Pages</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Sports</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Wider Opportunities</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Prospectus</a></li>
                        </ul>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap flex justify-between items-center">
                            Secondary
                            <i class="fas fa-chevron-down ml-2 md:hidden"></i>
                        </a>
                        <ul class="hidden md:group-hover:block absolute md:top-full md:left-0 bg-blue-800 min-w-[200px] shadow-lg w-full md:w-auto z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Secondary Provisions</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Long Term Plan</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Exam Timetables</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Class Pages</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Sports</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Wider Opportunities</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Prospectus</a></li>
                        </ul>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap flex justify-between items-center">
                            Parent Information
                            <i class="fas fa-chevron-down ml-2 md:hidden"></i>
                        </a>
                        <ul class="hidden md:group-hover:block absolute md:top-full md:left-0 bg-blue-800 min-w-[200px] shadow-lg w-full md:w-auto z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Admission</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">School Fees</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Uniform</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Term Dates</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Anzathu (PTA)</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Swimming Pool</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Internet Safety</a></li>
                        </ul>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="Examinations.html" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap">Examinations</a>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap flex justify-between items-center">
                            Boarding
                            <i class="fas fa-chevron-down ml-2 md:hidden"></i>
                        </a>
                        <ul class="hidden md:group-hover:block absolute md:top-full md:left-0 bg-blue-800 min-w-[200px] shadow-lg w-full md:w-auto z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Boarding Provision</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Meals</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Clubs</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Sports</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Wider Opportunities</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Prospectus</a></li>
                        </ul>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap">Clubs</a>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap flex justify-between items-center">
                            News
                            <i class="fas fa-chevron-down ml-2 md:hidden"></i>
                        </a>
                        <ul class="hidden md:group-hover:block absolute md:top-full md:left-0 bg-blue-800 min-w-[200px] shadow-lg w-full md:w-auto z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Newsletter</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-700">Events Calendar</a></li>
                        </ul>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap">Updates</a>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap">Student Portfolio</a>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap">Contact Us</a>
                    </li>
                    <li class="group relative md:border-r border-gray-500 last:border-r-0">
                        <a href="#" class="block px-2 py-2 hover:text-sky-200 whitespace-nowrap">Vacancies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobilePrimaryMenu = document.getElementById('mobilePrimaryMenu');
            const dropdownLinks = document.querySelectorAll('.group > a');

            let isMenuOpen = false;

            menuBtn.addEventListener('click', () => {
                isMenuOpen = !isMenuOpen;
                menuBtn.innerHTML = isMenuOpen ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('flex');
                mobilePrimaryMenu.classList.toggle('hidden');
            });

            dropdownLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    if (link.nextElementSibling && window.innerWidth < 768) {
                        e.preventDefault();
                        e.stopPropagation();
                        const dropdown = link.nextElementSibling;
                        const chevron = link.querySelector('.fa-chevron-down');
                        
                        // Close all other dropdowns
                        dropdownLinks.forEach(otherLink => {
                            if (otherLink !== link && otherLink.nextElementSibling) {
                                otherLink.nextElementSibling.classList.add('hidden');
                                const otherChevron = otherLink.querySelector('.fa-chevron-down');
                                if (otherChevron) {
                                    otherChevron.style.transform = 'rotate(0deg)';
                                }
                            }
                        });

                        // Toggle current dropdown
                        dropdown.classList.toggle('hidden');
                        if (chevron) {
                            chevron.style.transform = dropdown.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                        }
                    }
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.group') && window.innerWidth < 768) {
                    dropdownLinks.forEach(link => {
                        const dropdown = link.nextElementSibling;
                        const chevron = link.querySelector('.fa-chevron-down');
                        if (dropdown) {
                            dropdown.classList.add('hidden');
                            if (chevron) {
                                chevron.style.transform = 'rotate(0deg)';
                            }
                        }
                    });
                }
            });

            // Reset mobile menu state on window resize
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    if (window.innerWidth >= 768) {
                        isMenuOpen = false;
                        menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                        mobileMenu.classList.remove('flex');
                        mobileMenu.classList.add('hidden', 'md:flex');
                        mobilePrimaryMenu.classList.add('hidden');
                        
                        // Reset all dropdowns
                        dropdownLinks.forEach(link => {
                            const dropdown = link.nextElementSibling;
                            const chevron = link.querySelector('.fa-chevron-down');
                            if (dropdown) {
                                dropdown.classList.add('hidden');
                                dropdown.classList.add('md:group-hover:block');
                                if (chevron) {
                                    chevron.style.transform = 'rotate(0deg)';
                                }
                            }
                        });
                    }
                }, 100);
            });
        });
    </script>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl text-center font-bold mb-6">Latest News</h1>
    <div class="grid md:grid-cols-3 gap-6">
        <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="bg-white p-4 shadow rounded">
            <img src="uploads/<?php echo $row['image']; ?>" class="w-full h-48 object-cover rounded">
            <h2 class="text-xl font-bold mt-2"> <?php echo $row['title']; ?> </h2>
            <p class="text-gray-600 mt-1"> <?php echo substr($row['content'], 0, 100); ?>...</p>
        </div>
        <?php } ?>
    </div>
</body>
</html>
