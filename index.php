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
                  <span><i data-feather="home"></i></span>Home
                </div>
              </a>
            </li>
            <li>
              <a href="home.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                  <span><i data-feather="home"></i></span>Home
                </div>
              </a>
            </li>
            <li>
              <a href="about.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                  <span><i data-feather="home"></i></span>About Me
                </div>
              </a>
            </li>
            <li>
              <a href="home.php">
                <div
                  class="bg-gradient-linear text-premary-light hover:scale-100 rounded-md flex items-center gap-4 w-fit px-4 py-3 font-bold hover:bg-neutral-200 dark:hover:bg-neutral-800 lg:w-full"
                >
                  <span><i class="bi bi-file-earmark-person-fill"></i></span
                  >Home
                </div>
              </a>
            </li>
          </ul>
        </nav>

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
