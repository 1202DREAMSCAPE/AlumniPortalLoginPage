
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
  <link rel="stylesheet" href="/dist/app.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Katibeh:wght@400;700&display=swap');
  </style>
</head>
<body class="bg-white-10 h-screen flex flex-col flex-nowrap">

<!--HEADER-->
<div class="flex flex-row">

  <!--PLM HEADER-->
    <button onclick="window.location.href='/resources/views/mainpage.html'">
    <img class="h-[4rem] w-[4rem] ml-8 my-2" src="/img/image-6.png">
    </button>
    <div class = "py-3 w-4/5 ml-4 flex flex-col">
     <h1 class="text-[30px] font-katibeh mt-2 -mb-3 text-gold">
        PAMANTASAN NG LUNGSOD NG MAYNILA
     </h1>
     <h2 class=" text-[15px] font-inter text-black-200">
        UNIVERSITY OF THE CITY OF MANILA
     </h2>
     </div>  

     <!--BUTTONS-->
     <div class="flex flex-row -ml-[4rem] ">
      <button onclick="window.location.href='{{ route('login') }}'" class=" hover:bg-blue-hover duration-150 hover:border-blue-hover font-inter text-center text-16 whitespace-nowrap text-white-10 my-6 px-14 bg-blue rounded border-[1px] border-blue">
            LOG IN
    </button>
    </div>
</div>

<!--NAVBAR-->
<div class="bg-blue  h-1/5 w-screen">
    <navbar class="text-bold text-white-30 text-paragraph3 py-[0.5rem] place-content-evenly font-inter w-screen flex flex-row">
        <div>
            APPLY FOR PARTNERSHIP
        </div>
        <div>
            NEWS AND UPDATE
        </div>
        
        <div class="relative flex flex-row" x-data="{ open: false }" @click.away="open = false">
              <a href="#" onclick="window.location.href='/resources/views/services.html'" class ="hover:text-gold">
              SERVICES
              </a>
            </div>        
           
        <div class="relative flex flex-row" x-data="{ open: false }" @click.away="open = false">
                <a href="#" onclick="window.location.href='/resources/views/services.html'" class ="hover:text-gold">
                CAREERS
                </a>
        </div>
        <div class="relative flex flex-row" x-data="{ open: false }" @click.away="open = false">
                <a href="#" onclick="window.location.href='/resources/views/services.html'" class ="hover:text-gold">
                ALUMNI EVENTS
                </a>
        </div>
    </navbar>
   </div>

<!--MAIN PAGE-->
<div class="h-screen w-screen flex flex-col">

    <!--BACKGROUND PHOTO-->
    <div class="w-screen flex flex-col">
        <div class="flex flex-row">
            <img class= "relative" src="/img/backgroundplmflame.png">

         <!--Intro-->
         <div class="absolute">
        <div class=" flex flex-col pt-[10rem] pl-[30rem] ml-[25rem] text-center ">
            <div class="top-[185px] -ml-[1rem] text-blue text-[2.5rem] font-bold font-inter">
                WELCOME BACK!</div>
                <div class="px-6 ml-[5rem] top-[94px] text-[1.2rem] opacity-60 text-blue text-left font-inter w-3/4">
                    To stay in touch with us, kindly sign in with your personal details below:
                </div>
            <form action="{{ route('login') }}" method="POST">
               @csrf
                <div class="mt-[1rem] ml-20 text-center mb-1 px-10 text-left flex">
               @if(Session::has('error'))
               <div class="alert alert-danger" role="alert">
                  {{ Session::get('error') }}
               </div>
                 @endif
                </div>
                <div class="mb-3 px-14 mx-5 text-left flex flex-col">
                  <label for="SNum" class="form-label">ID Number</label>
                  <input type="text" name="SNum" class="form-control opacity-60" id="SNum" placeholder="202112345" required>
               </div>
               <div class="mb-2 px-14 mx-5 text-left flex flex-row">
                  <label for="Password" class=" flex flex-row form-label">Password</label>
               </div>
               <div class="mb-4 px-14 mx-5 text-left flex flex-row">
                  <input type="Password" name="Password" class="form-control" id="Password" required>
               </div>
               <button class="mb-3 px-36 font-inter text-center text-[1.2rem] whitespace-nowrap text-white-10 py-1 bg-blue rounded-[10px] border-[1px] border-blue hover:bg-blue-hover duration-150 hover:border-blue-hover">
                      Login</button>
                  </div>
           </form>
        </div>
         </div>
        </div>
</body>
</html>