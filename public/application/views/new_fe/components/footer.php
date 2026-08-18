 <div class="p-4 md:py-12 md:px-40 bg-stone-800 relative overflow-hidden">
     <div
         class="goldman-bold uppercase text-stone-600/15 text-[17vw] leading-[17vw] md:text-[13.021vw] md:leading-[13.021vw] absolute -bottom-[3.5vw] -left-[2vw]">
         bapenda
     </div>
     <div
         class="w-full md:w-5/7 grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8 text-slate-50 text-[2vw] md:text-[0.729vw] m-auto relative z-10">
         <div
             class="relative after:content-[''] after:absolute after:-right-2 after:-translate-x-1/2 after:h-full md:after:w-[1px] after:bg-[#ffffff40] after:top-1/2 after:-translate-y-1/2">
             <h4 class="uppercase font-semibold tracking-widest mb-4">
                 Alamat Kantor
             </h4>

             <p class="tracking-wider font-light">
                 Jl. Surawinata No.30A, Nagri Tengah, Kec. Purwakarta, Kabupaten
                 Purwakarta, Jawa Barat 41114
             </p>

             <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8080711694092!2d107.44294907552802!3d-6.545902693447042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690fecc90cf4e3%3A0x8b0e32917971f16a!2sBAPENDA%20(Badan%20Pendapatan%20Daerah)%20Kab.%20Purwakarta!5e0!3m2!1sen!2sid!4v1745830262634!5m2!1sen!2sid"
                 class="w-full h-auto mt-4 pr-4 hidden md:block"
                 style="border: 0"
                 allowfullscreen=""
                 loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

         <div
             class="relative after:content-[''] after:absolute after:-right-2 after:-translate-x-1/2 after:h-full md:after:w-[1px] after:bg-[#ffffff40] after:top-1/2 after:-translate-y-1/2">
             <h4 class="uppercase font-semibold tracking-widest mb-4">
                 Jam Kerja
             </h4>

             <div class="tracking-wider font-light">
                 <table>
                     <tr>
                         <td>Senin - Jumat</td>
                         <td class="px-2 text-center">:</td>
                         <td>08:00 - 16:00 WIB</td>
                     </tr>
                     <tr>
                         <td>Sabtu - Minggu</td>
                         <td class="px-2 text-center">:</td>
                         <td>Tutup</td>
                     </tr>
                 </table>
             </div>
         </div>

         <iframe
             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8080711694092!2d107.44294907552802!3d-6.545902693447042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690fecc90cf4e3%3A0x8b0e32917971f16a!2sBAPENDA%20(Badan%20Pendapatan%20Daerah)%20Kab.%20Purwakarta!5e0!3m2!1sen!2sid!4v1745830262634!5m2!1sen!2sid"
             class="w-full col-span-2 md:hidden block"
             style="border: 0"
             allowfullscreen=""
             loading="lazy"
             referrerpolicy="no-referrer-when-downgrade"></iframe>

         <div class="relative col-span-2 flex flex-col items-center md:items-start md:col-span-1">
             <h4 class="uppercase font-semibold tracking-widest mb-4">
                 Telepon Kami Sekarang
             </h4>
             <a class="tracking-wider text-[4.167vw] md:text-[1.667vw]"
                 href="tel:+6282111336025">
                 (+62)821-1133-6025
             </a>
         </div>
     </div>
 </div>

 <div class="px-4 py-2 pb-4 md:py-4 md:px-40 bg-stone-800/95">
     <div
         class="w-full md:w-5/7 flex md:flex-row flex-col text-slate-50 text-[1.823vw] md:text-[0.729vw] m-auto items-center overflow-hidden gap-2 md:gap-0">
         <div>
             Copyright &copy; 2025 Badan Pendapatan Daerah Kab. Purwakarta.
         </div>
         <div class="text-right grow">
             <div class="flex justify-end items-center gap-2">
                 <?php foreach ($ShowData as $d) : ?>
                     <a href="<?= $d['facebook'] ?? '#' ?>" target="_blank">
                         <img
                             src="<?= base_url('assets'); ?>/animation/facebook.svg"
                             class="w-[4.167vw] md:w-[1.667vw]" />
                     </a>
                     <a href="<?= $d['instagram'] ?? '#' ?>" target="_blank">
                         <img
                             src="<?= base_url('assets'); ?>/animation/ig.svg"
                             class="w-[4.167vw] md:w-[1.667vw]" />
                     </a>
                     <a href="<?= $d['twitter'] ?? '#' ?>" target="_blank">
                         <img src="<?= base_url('assets'); ?>/animation/x.svg" class="w-[4.167vw] md:w-[1.667vw]" />
                     </a>
                     <a href="<?= $d['youtube'] ?? '#' ?>" target="_blank">
                         <img
                             src="<?= base_url('assets'); ?>/animation/youtube.svg"
                             class="w-[4.167vw] md:w-[1.667vw]" />
                     </a>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>