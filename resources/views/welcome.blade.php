<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body class="bg-gray-900">
  <div class="w-full flex justify-between px-20 py-5 " data-aos="fade-down" data-aos-duration="1000">
    <img src="{{asset('3d/loggo.png')}}" alt="" class="w-10">
    <ul class="text-white flex gap-10  items-center font-bold">
        <li class="hover:text-orange-700"><a href="">Home</a></li>
        <li class="hover:text-orange-700"><a href="">Projek</a></li>
        <li class="hover:text-orange-700"><a href="">About</a></li>
    </ul>
  </div>

   <!-- user 1 -->
  <div class="flex text-gray-600 ">
      <div class="w-1/2 pl-36 grid place-content-center">
        <h1 class="text-orange-600 font-bold text-2xl py-2" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">Welcome</h1>
        <h1 class="text-white font-bold text-4xl pb-2" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="700">I AM WEB DESIGNER</h1>
        <p class="text-gray-400 pb-2" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="800">sdfbdsfbhsdfhsdvndfbgfdbgdbfhvdfbdvbxcnxnvbxbnhvgggfhghjgmhjmhjhvgvgvhgvjhfsdvfsvdh</p>
        <div class="flex gap-5 " data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">
            <img src="{{asset('3d/fb.png')}}" class="w-10" alt="">
            <img src="{{asset('3d/ig.png')}}" class="w-10" alt="">
            <img src="{{asset('3d/tiktok.png')}}" class="w-10" alt="">
        </div>
      </div>
      <div class="w-1/2 grid place-content-center pt-20">
      <img src="{{asset('3d/tes.png')}}" alt="" data-aos="zoom-in" data-aos-duration="1000">
      </div>
  </div>
 

  <div class="text-center pt-40">
    <h1 class="pb-10 font-bold text-white text-2xl">PROJEK</h1>
    <div class="flex justify-around">
        <div class="grid place-content-center bg-gray-700 text-center  rounded-lg px-5 pb-2">
            <div class="grid place-content-center">
                <img src="{{asset('3d/ig.png')}}" class="w-20" alt="">
            </div>
            <h1 class="font-bold">penjualan</h1>
            <p>website ini  blalalalalalal</p>
        </div>
        <div class="grid place-content-center bg-gray-700 text-center  rounded-lg px-5 pb-2">
            <div class="grid place-content-center">
                <img src="{{asset('3d/ig.png')}}" class="w-20" alt="">
            </div>
            <h1 class="font-bold">penjualan</h1>
            <p>website ini  blalalalalalal</p>
        </div>
        <div class="grid place-content-center bg-gray-700 text-center  rounded-lg px-5 pb-2">
            <div class="grid place-content-center">
                <img src="{{asset('3d/ig.png')}}" class="w-20" alt="">
            </div>
            <h1 class="font-bold">penjualan</h1>
            <p>website ini  blalalalalalal</p>
        </div>
        <div class="grid place-content-center bg-gray-700 text-center  rounded-lg px-5 pb-2">
            <div class="grid place-content-center">
                <img src="{{asset('3d/ig.png')}}" class="w-20" alt="">
            </div>
            <h1 class="font-bold">penjualan</h1>
            <p>website ini  blalalalalalal</p>
        </div>
    </div>
  </div>
  



  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>