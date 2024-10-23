<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Sidebar to Bottom Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <style>
      /* Menambahkan sedikit glowing effect seperti di gambar */
      .glow {
        box-shadow: 0 0 10px rgba(0, 255, 136, 0.4);
      }
      .border_color {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(229 229 229);
      }
      .border_gradient{
        border-top-width: 1px;
        border-style: solid;
        border-color: rgb(179 255 171);
      }
    </style>
  </head>
  <body>
    <!-- Container untuk menyimpan sidebar dan konten -->
    <div class="container md:flex lg:max-w-5xl lg:justify-center">
      <!-- Sidebar -->
      <div
        class="hidden sticky top-0 hidden ml-8 min-h-screen w-fit pt-8 md:block lg:w-52"
      >
        <header
          class="border m-auto w-fit flex items-center justify-between md:flex-col lg:mb-12 lg:w-52 lg:flex-row"
        >
          <div class="flex items-center gap-4">
            <img
              class="border_color rounded-full h-11 w-11"
              src="https://via.placeholder.com/50"
              alt="image profile"
            />
            <div class="hidden flex-col lg:flex">
              <h2 class="primary text-base font-medium md:text-lg font-bold">
                Fahrurozi
              </h2>
              <p class="secondary text-sm md:text-base">
                Fullstack Web Develpoer
              </p>
            </div>
          </div>
          <button
            class="border flex h-10 w-10 rounded-full grid place-items-center md:mb-8 md:mt-4 md:h-0 lg:mt-0"
          >
            <span class="border text-2xl"><i data-feather="sun"></i></span>
          </button>
        </header>

        <div
          class="border-dashed my-8 border-b border-gray-300 dark:border-neutral-700"
        ></div>

        <!-- start nav -->
        <nav>
          <ul class="space-y-4">
            <li>
              <a href="home.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path></svg>
                <span class="hidden lg:block" >Home</span>
                </div>
              </a>
            </li>
            <li>
              <a href="about.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M19.536 9.146c-1.373 0-2.133 1.014-2.294 2.116h4.608c-.125-1.05-.867-2.115-2.314-2.115m-2.26 3.617c.235 1.156 1.193 1.97 2.532 1.97.725 0 1.77-.27 2.384-.914l1.175 1.35c-1.064 1.11-2.653 1.426-3.74 1.426-2.64 0-4.697-1.906-4.697-4.606 0-2.535 1.894-4.62 4.57-4.62 2.585 0 4.5 1.98 4.5 4.604v.766h-6.723v.023zm-6.487 3.83v-5.69c0-.976-.435-1.536-1.338-1.536-.814 0-1.355.585-1.717 1.007v6.24h-2.35v-5.7c0-.976-.415-1.532-1.318-1.532-.813 0-1.375.586-1.717 1.006v6.24H0V7.505h2.35v1.15c.4-.463 1.302-1.26 2.71-1.26 1.247 0 2.096.526 2.477 1.59.524-.761 1.5-1.59 2.91-1.59 1.7 0 2.69 1.01 2.69 2.963v6.24h-2.353l.005-.007z"></path></svg>
                <span class="hidden lg:block" >Open</span>
                </div>
              </a>
            </li>
            <li>
              <a href="projects.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M2 3.75C2 2.784 2.784 2 3.75 2h16.5c.966 0 1.75.784 1.75 1.75v16.5A1.75 1.75 0 0 1 20.25 22H9.75a.75.75 0 0 1 0-1.5h10.5a.25.25 0 0 0 .25-.25V9h-17v3A.75.75 0 0 1 2 12ZM9 7.5h11.5V3.75a.25.25 0 0 0-.25-.25H9Zm-5.5 0h4v-4H3.75a.25.25 0 0 0-.25.25Z"></path><path d="m9.308 14.5-2.104-2.236a.75.75 0 1 1 1.092-1.028l3.294 3.5a.75.75 0 0 1 0 1.028l-3.294 3.5a.75.75 0 1 1-1.092-1.028L9.308 16H6.09a2.59 2.59 0 0 0-2.59 2.59v2.66a.75.75 0 0 1-1.5 0v-2.66a4.09 4.09 0 0 1 4.09-4.09h3.218Z"></path></svg>
                <span class="hidden lg:block" >Projects</span>
                </div>
              </a>
            </li>
            <li>
              <a href="blog.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z"></path><path d="M16 7h4"></path><path d="M18 19h-13a2 2 0 1 1 0 -4h4a2 2 0 1 0 0 -4h-3"></path></svg>
                <span class="hidden lg:block" >Blog</span>
                </div>
              </a>
            </li>
            <li>
              <a href="contact.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M440 6.5L24 246.4c-34.4 19.9-31.1 70.8 5.7 85.9L144 379.6V464c0 46.4 59.2 65.5 86.6 28.6l43.8-59.1 111.9 46.2c5.9 2.4 12.1 3.6 18.3 3.6 8.2 0 16.3-2.1 23.6-6.2 12.8-7.2 21.6-20 23.9-34.5l59.4-387.2c6.1-40.1-36.9-68.8-71.5-48.9zM192 464v-64.6l36.6 15.1L192 464zm212.6-28.7l-153.8-63.5L391 169.5c10.7-15.5-9.5-33.5-23.7-21.2L155.8 332.6 48 288 464 48l-59.4 387.3z"></path></svg>
                <span class="hidden lg:block" >Contact</span>
                </div>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Nav -->

        <!-- Start Content -->
<div class="lg:max-w-5xl">
    <main>
        <div class="px-8 pb-5 pt-8">

        </div>
    </main>
</div>
        <!-- End Content -->


        <div class="space-y-6">
          <div class="flex items-center space-x-3">
            <img
              src="https://via.placeholder.com/50"
              alt="Profile"
              class="rounded-full"
            />
            <div>
              <h2 class="font-bold text-xl">ndrvndr</h2>
              <p class="text-sm text-gray-500">Λ7214</p>
            </div>
          </div>

          <nav class="space-y-4">
            <a
              href="#"
              class="flex items-center text-gray-700 hover:text-green-600 transition-colors"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2 4 4 8-8 4 4"
                />
              </svg>
              Home
            </a>
            <a
              href="#"
              class="flex items-center text-gray-700 hover:text-green-600 transition-colors"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"
                />
              </svg>
              About
            </a>
            <a
              href="#"
              class="flex items-center text-gray-700 hover:text-green-600 transition-colors"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 8v4m0 4h.01"
                />
              </svg>
              Projects
            </a>
            <a
              href="#"
              class="flex items-center text-gray-700 hover:text-green-600 transition-colors"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 12h14"
                />
              </svg>
              Blog
            </a>
            <a
              href="#"
              class="flex items-center text-gray-700 hover:text-green-600 transition-colors"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 5h18M9 3v18m6-18v18"
                />
              </svg>
              Contact
            </a>
          </nav>
        </div>
      </div>

      <!-- Konten Utama -->
      <div class="w-full md:w-3/4 lg:w-4/5 p-10">
        <h1 class="text-4xl font-bold mb-6">
          Call me <span class="text-green-500">Andre</span> 👋
        </h1>
        <p class="text-xl font-semibold">Front-End Web Developer</p>
        <p class="text-xl">
          I build <span class="text-green-500">websites</span>.
        </p>
        <p class="mt-4 text-gray-700">
          Working within the React ecosystem, transform ideas into digital
          realities that are easily accessible and inclusive for web users.
        </p>

        <div class="mt-6 flex items-center space-x-2">
          <span class="w-3 h-3 bg-green-500 rounded-full"></span>
          <span class="line-through text-gray-500">Available for hire</span>
        </div>

        <button
          class="mt-4 px-6 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600 transition"
        >
          Contact Me
        </button>
      </div>
    </div>

    <!-- Bottom Navigation untuk layar kecil -->
    <div class="fixed bottom-0 w-full bg-white shadow-lg py-4 md:hidden glow">
      <div class="flex justify-around items-center">
        <a href="#" class="flex flex-col items-center text-green-500">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 12l2-2 4 4 8-8 4 4"
            />
          </svg>
          <span class="text-xs">Home</span>
        </a>
        <a
          href="#"
          class="flex flex-col items-center text-gray-500 hover:text-green-500 transition-colors"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 13l4 4L19 7"
            />
          </svg>
          <span class="text-xs">About</span>
        </a>
        <a
          href="#"
          class="flex flex-col items-center text-gray-500 hover:text-green-500 transition-colors"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 8v4m0 4h.01"
            />
          </svg>
          <span class="text-xs">Projects</span>
        </a>
        <a
          href="#"
          class="flex flex-col items-center text-gray-500 hover:text-green-500 transition-colors"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 12h14"
            />
          </svg>
          <span class="text-xs">Blog</span>
        </a>
        <a
          href="#"
          class="flex flex-col items-center text-gray-500 hover:text-green-500 transition-colors"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 5h18M9 3v18m6-18v18"
            />
          </svg>
          <span class="text-xs">Contact</span>
        </a>
      </div>
    </div>
    <script>
      feather.replace();
    </script>
  </body>
</html>
