<!-- resources/views/auth/login.blade.php -->

@vite('resources/css/app.css')
  
@if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div id="loginModal" class="form-login w-[30%] m-auto py-[20px] pl-[2.5rem] shadow-2xl mt-[8rem] bg-slate-300 rounded-md ">
<form method="POST" action="{{ route('login') }}">
@csrf
    <div class="close  mr-[1rem] mb-[1rem]">
    <a id="closeLoginModal" ><i style="font-size:24px" class="fa">&#xf00d;</i></a>
    <h1 class=" text-[2rem] mr-[25px] font-medium text-center" >masuk</h1>
    </div>    
    <div class="container">
    <div class=" py-3">
        <label class=" flex text-xl" for="email">Email</label>
        <input type="email" class="border-2 pl-[10px] w-[90%] h-[2rem] rounded-md mb-[1rem] " name="email" id="email" required>
       
    </div>

    <div class=" ">
    <label class=" flex text-xl" for="password">Password</label>
        <input type="password" class="border-2 pl-[10px] w-[90%] h-[2rem] rounded-md " name="password" id="password" required>
    </div>

</div>
<button type="submit" class=" w-[90%] h-[2.5rem] bg-blue-700 my-[2rem] rounded-md text-xl" >Login</button>
<h1 class=" text-center mr-[25px] text-gray-800">belum punya akun? <a id="regisButton" class=" text-orange-600" >Daftar</a></h1>
  
</form>
</div>