@extends('Layout.app')

@section('container')


<section class="hero">
<div class="hero-about bg-blend-multiply mt-24 h-[30rem] mx-auto w-[90%] p-[3rem]" >
    <div class="judul ml-[5.5rem] ">
    <h1 class=" text-blue-800 font-bold text-[25px] lg:text-[42px]" >Tentang kami</h1>
    </div>
    <div class="container flex items-center flex-col gap-[5rem] lg:flex-row">
        <div class="desc text-left mr-[5px]">
            <h3 class=" my-[1rem] text-[15px] lg:text-[18px]" >Berkenalan lebih dekat dengan homespot </h3>
            <p class=" text-[14px] w-[30rem] lg:w-auto lg:text-justify lg:text-[19px]">Homespot adalah platform teknologi berbasis web base <br>
                dengan sistem one-stop housing marketplace.<br>
                Homespot menghubungkan antara pembeli dan penjual<br>
                dengan masyarakat yang membutuhkan layanan informasi<br>
                jual beli dan memudahkan untuk   memperoleh hunian sesuai</p>
                <div class=" flex flex-col gap-3 mt-6   text-center ">Hubungi Kami
                <div class="flex flex-row space-x-12 place-self-center ">
                    <div class="about__has-tooltip">
                       <a href="https://api.whatsapp.com/send?phone=6281389001162" target="_blank"><img src="/img/wasap.png" class=" w-[42px]" alt="wa-icon"></a></div><div class="about__has-tooltip pt-1">
                        <a href="mailto:support@homespot.id"><img src="/img/mail.png" width="32px" height="32px" alt="email-icon"></a></div></div>
        </div>
        </div>
        <div class="video-container">
            <iframe width="480" height="250" class=" rounded-md lg:w-[21rem] lg:h-[20rem]" src="https://www.youtube.com/embed/pYTvSUujCwc?si=3DzAkActyqbYvsRU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
</div>
</section>
{{-- end hero --}}

{{-- card --}}

<section class="card mb-[10rem] sm:mb-[40rem]" >
<div class="hero-about bg-biru mx-auto mt-[20rem] w-[100%] p-[3rem] h-[55rem] lg:mt-[15rem] sm:h-[100rem]" >
<div class="judul ml-[5.5rem] ">
    <h1 class=" text-white text-center font-bold text-[25px] lg:text-[42px] mb-7" >Properti Kami</h1>
    </div>
     <div class="container ">
        <div class=" ml-[3rem] lg:gap-5 lg:grid lg:grid-cols-2">
        
            <!-- Cards 1 -->
            <div class="bg-white border pb-6 border-gray-200 shadow-xl rounded-lg p-1 w-[30rem]  h-[37rem] sm:mb-7  ">
                {{-- Image --}}
                <img class="rounded-lg mx-auto my-5 h-48 w-[25rem] object-cover" src="./img/1.png" alt=""/>
                <div class="text-left p-[2rem]">
                <h1 class=" text-blue-800 font-bold text-[25px] lg:text-[35px]" >Cari Properti</h1>
                <h3 class=" font-semibold mb-2" >Segera temukan hunian impianmu melalui Homespot.</h3>
                <p>Tingkatkan pengalaman pencarian properti Anda dengan mengunjungi website kami, di sana Anda akan menemukan beragam pilihan properti yang sesuai dengan kebutuhan dan impian Anda.</p>
                </div>
                <!-- Button  -->
                <div class=" flex justify-center">
                    <a href="#" class="inline-flex items-center px-32 py-1.5 text-sm font-medium text-white bg-orange-500 rounded-full border-2 hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black lg:px-12 lg:mt-5">
                        beli Properti
                    </a>
                </div>
                
            </div>

            <!-- Cards 2 -->
            <div class="bg-white border pb-6 border-gray-200 shadow-xl rounded-lg p-1 w-[30rem]  h-[37rem]">
                {{-- Image --}}
                <img class="rounded-lg mx-auto my-5  h-48 w-[25rem] object-cover" src="./img/2.png" alt=""/>
                <div class="text-left p-[2rem]">
                <h1 class=" text-blue-800 font-bold text-[25px] lg:text-[35px]" >Pilih Properti</h1>
                <h3 class=" font-semibold mb-2" >Jadikan Homespot sebagai bagian dari perjalanan anda berikutnya, dengan memilih hunian sesuai dengan impian.</h3>
                <p class=" text-[14px]" >Jelajahi ragam luas pilihan properti yang kami tawarkan di website kami, dari rumah mewah hingga apartemen modern, kami memiliki semuanya untuk memenuhi berbagai kebutuhan dan selera Anda.</p>
                </div>
                <!-- Button  -->
                <div class=" flex justify-center">
                    <a href="#" class="inline-flex items-center px-32 py-1.5 text-sm font-medium text-white bg-orange-500 rounded-full border-2 hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black lg:px-12 lg:mt-5">
                        beli Properti
                    </a>
                </div>
                
            </div>

    </div>
</div>
</section>

@endsection