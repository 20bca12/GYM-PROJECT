<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | H-Fitness</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <header class="text-gray-400 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <a href="index.htm"><img src="img/logo.jpg" width="35px"
                        style="border-radius:50%; border:2px solid white;" alt=""></a>
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <a href="index.htm"><span class="ml-3 text-white font-bold text-xl">H-fitness</span></a>
            </a>
            <nav
                class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700	flex flex-wrap items-center text-base justify-center">
                <a href="index.htm" class="mr-5 hover:text-white">Home</a>
                <a href="workout.htm" class="mr-5 hover:text-white">Workout-Programs</a>
                <!-- <a class="mr-5 hover:text-white"></a> -->
                <a href="contact.htm" class="mr-5 text-white hover:text-white">Contact Us</a>
            </nav>
            <a href="login.htm"><button
                    class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base text-red-400 mt-4 md:mt-0">LOGIN
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button></a>
        </div>
    </header>

    <form action="https://formspree.io/f/mayaknvn" name="myForm" onsubmit="return formvalidate()" method="post">

    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-900 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0"
                    marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.193362485468!2d73.0888971147011!3d21.144701835935642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be06787dbd4e0f1%3A0x884574c1534f036d!2sVidyabharti%20Trust%20College%20of%20BBA%20%26%20BCA%2C%20Umrakh!5e0!3m2!1sen!2sin!4v1632670337896!5m2!1sen!2sin"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.20);"></iframe>
                <div class="bg-gray-900 relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-white tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Vidhya Bharti Trust, Umrakh, Baben-Bardoli Dist. -Surat.</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-white tracking-widest text-xs">EMAIL</h2>
                        <a class="text-red-400 leading-relaxed">plusultra@gmail.com</a>
                        <h2 class="title-font font-semibold text-white tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">(+91) 966-486-7306</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-white text-lg mb-1 font-medium title-font">Contact Us</h2>
                <p class="leading-relaxed mb-5">You can contact us by visiting at our place or on the phone by given
                    number.</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                    <input type="text" id="fname" name="fname" required
                        class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button onclick="formvalidate();"
                    class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Submit</button>
                <p class="text-xs text-gray-400 text-opacity-90 mt-3">By submiting above form you will recieve an email
                    from us.</p>
            </div>
        </div>
    </section>

</form>

    <footer class="text-gray-400 bg-gray-900 body-font">
        <div class="bg-gray-800 bg-opacity-75">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">

                    <span class="ml-3 text-xl">H-Fitness</span>
                </a>
                <p class="text-sm text-gray-400 sm:ml-6 sm:mt-0 mt-4">© 2020 H-fitness —
                    <a href="https://www.instagram.com/harshiilllll/" class="text-gray-500 ml-1" target="_blank"
                        rel="noopener noreferrer">@harshiilllll</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a href="https://www.facebook.com/" class="text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/?lang=en" class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/harshiilllll/" class="ml-3 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>

    <script>
        function formvalidate() {
            let x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>

</body>

</html>