<?php
include 'admin/inc-admin/funcTgl.php';
include 'admin/koneksi.php';
$queryBlogs = mysqli_query($koneksi, "SELECT * FROM blogs ORDER BY id DESC");
// $rowBlog = mysqli_fetch_assoc($queryBlogs);

?>


<div class=" border col-span-1 md:col-span-3 lg:col-span-4 p-10 pt-4 bg-white rounded-lg shadow-lg" id="blog">
    <div class="  space-y-3 ">
        <h1 class=" primary text-xl font-bold md:text-2xl">Blogs</h1>
        <p>Share thoughts and tutorials on web development.</p>
    </div>
    <div class="border-dashed my-8 border-b border-gray-300 dark:border-neutral-700"></div>


    <div class="border-t mt-5 border-gray-300">
        <section class="border lg:mb-20 grid gap-6 px-4 py-8 ">
            <?php while ($rowBlog = mysqli_fetch_assoc($queryBlogs)): ?>
                <ul class="mt-4 grid gap-4 sm:grid-cols-2" style="opacity: 1;">
                    <li class="border__color rounded-md bg-transparent shadow-lg transition-transform duration-200 lg:hover:scale-[1.03]">
                        <a aria-label="Read more about the Next.js 15 RC: A Big Leap in Modern Web Development article" class="group flex flex-col h-full" href="/blog/next-js-15-rc-a-big-leap-in-modern-web-development">
                            <div class="relative">
                                <img alt="Photo taken from Unsplash" fetchpriority="high" width="1200" height="480" decoding="async" data-nimg="1" class="h-auto w-auto rounded-t-md" src="admin/upload/<?php echo $rowBlog['foto'] ?>">
                            </div>
                            <div class="p-4">
                                <h2 class="primary font-bold leading-relaxed md:h-[84px] md:text-lg lg:h-14"><?php echo $rowBlog['judul'] ?></h2>
                                <div class="mt-2 flex gap-2 text-sm font-medium">
                                    <div class="flex items-center gap-1"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-base" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg><span class="gradient__text">10 min read</span></div>
                                    <div class="flex items-center gap-1"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-base" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg><span class="gradient__text">0 views</span></div>
                                </div>
                                <p class="primary mb-2 mt-4 text-sm font-semibold"><?php echo formatTanggalIndonesia($rowBlog['tanggal']); ?></p>
                                <p class="secondary text-sm leading-relaxed"><?php echo $rowBlog['keterangan'] ?></p>
                            </div>
                        </a>
                    </li>
                </ul>
            <?php endwhile ?>
        </section>
    </div>



    <footer class="border-t border-gray-300 ">
        <?php include "inc/footer.php"  ?>
    </footer>
</div>