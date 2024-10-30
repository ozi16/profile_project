<?php

include 'admin/koneksi.php';
$queryBlogs = mysqli_query($koneksi, "SELECT * FROM blogs ORDER BY id DESC");
// $rowBlog = mysqli_fetch_assoc($queryBlogs);

?>

<div class=" border col-span-1 md:col-span-3 lg:col-span-4 p-10 pt-4 bg-white rounded-lg shadow-lg" id="contact">
    <div class="  space-y-3 ">
        <h1 class=" primary text-xl font-bold md:text-2xl">Blogs</h1>
        <p>Share thoughts and tutorials on web development.</p>
    </div>
    <div class="border-dashed my-8 border-b border-gray-300 dark:border-neutral-700"></div>


    <div class="">
        <section style="opacity: 1; transform: none;">
            <h2 class="primary text-lg font-semibold md:text-xl">Find me on</h2>
            <ul class="mt-8 flex flex-col gap-4 sm:flex-row sm:flex-wrap">
                <li><a target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="cursor-pointer text-sm font-medium text-primary-dark flex items-center justify-center gap-2 rounded-md px-4 py-3 md:text-base lg:hover:scale-[1.08]" href="https://github.com/ndrvndr" style="background-color: rgb(38, 38, 38);"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                        </svg>GitHub</a></li>
                <li><a target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="cursor-pointer text-sm font-medium text-primary-dark flex items-center justify-center gap-2 rounded-md px-4 py-3 md:text-base lg:hover:scale-[1.08]" href="https://www.linkedin.com/in/andre-avindra/" style="background-color: rgb(10, 102, 194);"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>LinkedIn</a></li>
                <li><a target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="cursor-pointer text-sm font-medium text-primary-dark flex items-center justify-center gap-2 rounded-md px-4 py-3 md:text-base lg:hover:scale-[1.08]" href="https://www.instagram.com/ndr.vndr/" style="background-image: linear-gradient(to right, rgb(249, 206, 52), rgb(238, 42, 123), rgb(98, 40, 215));"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>Instagram</a></li>
                <li><a target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="cursor-pointer text-sm font-medium text-primary-dark flex items-center justify-center gap-2 rounded-md px-4 py-3 md:text-base lg:hover:scale-[1.08]" href="https://twitter.com/ndrvndr" style="background-color: rgb(38, 38, 38);"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>Twitter</a></li>
                <li><a target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="cursor-pointer text-sm font-medium text-primary-dark flex items-center justify-center gap-2 rounded-md px-4 py-3 md:text-base lg:hover:scale-[1.08]" href="https://www.facebook.com/ndrvndr/" style="background-color: rgb(9, 102, 254);"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>Facebook</a></li>
            </ul>
            <div class="border-solid my-8 border-b border-gray-300 dark:border-neutral-700"></div>
        </section>
    </div>



    <footer class="border-t border-gray-300 ">
        <?php include "inc/footer.php"  ?>
    </footer>
</div>