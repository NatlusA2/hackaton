<!-- resources/views/auth/register.blade.php -->

<div id="regisModal" class="form-regis w-[30%] m-auto py-[20px] pl-[2.5rem] shadow-2xl mt-[8rem] bg-slate-300 rounded-md ">
<form method="POST" action="{{ route('register') }}">
@csrf
    @vite('resources/css/app.css')
    
    <h1 class=" text-[2rem] mr-[25px] font-medium text-center" >masuk</h1>
    <div class="container">
    <div>
        <label class=" flex text-xl" for="name">Nama</label>
        <input type="text" class="border-2 pl-[10px] w-[90%] h-[2rem] rounded-md mb-[1rem] " name="name" id="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label class=" flex text-xl" for="email">Email</label>
        <input type="email" class="border-2 pl-[10px] w-[90%] h-[2rem] rounded-md mb-[1rem] " name="email" id="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label class=" flex text-xl" for="password">Password</label>
        <input type="password" class="border-2 pl-[10px] w-[90%] h-[2rem] rounded-md mb-[1rem] " name="password" id="password" required>
    </div>

    <div>
        <label class=" flex text-xl" for="password_confirmation">Konfirmasi Password</label>
        <input type="password" class="border-2 pl-[10px] w-[90%] h-[2rem] rounded-md mb-[1rem] " name="password_confirmation" id="password_confirmation" required>
    </div>
    </div>

    <button type="submit" class=" w-[90%] h-[2.5rem] bg-blue-700 my-[1rem] rounded-md text-xl" >Registrasi</button>
</form>
</div>