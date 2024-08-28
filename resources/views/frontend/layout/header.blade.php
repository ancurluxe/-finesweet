<section class="">
    {{-- navbar --}}
    <nav class="bg-white-300 p-3  flex justify-between">
        <div class="flex justify-between container ">
            <div>
                <p class="text-2xl font-bold">{Finsweet</p>
            </div>

            <div class="lg:flex items-center space-x-8 hidden">
                <a class="font-medium" href="{{route('home')}}">Home</a>
                <a class="font-medium" href="#">About us</a>
                <a class="font-medium" href="#">What Do We Do</a>
                <a class="font-medium" href="#">Media</a>
                <a class="font-medium" href="{{route('contact')}}">Contact</a>
                <button class="donate bg-black px-4 p-1 rounded-md  text-white">Donate</button>
            </div>
        </div>
        <div class="menu lg:hidden  " onclick="toggleSidebar()">
            <a href="#" class="nav-toggle hover-link">
                <i class="ri-menu-line text-black " id="icon"></i></a>
        </div>
    </nav>


    <!-- mobile-nav -->

    <nav class="sidebar bg-white w-[200px] px-9 z-10 fixed hidden flex-col py-3 shadow-md">
        <div>
            <div class="flex gap-2 items-center">
                <p class="text-2xl font-bold">{Finsweet</p>
            </div>
            <div>
                <a class="font-semibold" href="#">Home</a>
                <a class="" href="#">About us</a>
                <a class="" href="#">What Do We Do</a>
                <a class="" href="#">Media</a>
                <a class="" href="#">Contact</a>
                <button class="bg-black px-4 p-1 rounded-md text-white">Donate</button>
            </div>
        </div>
    </nav>
</section>

<script>
    function toggleSidebar() {
        var icon = document.getElementById("icon");
        const sidebar = document.querySelector(".sidebar");
        if (sidebar.style.display === "flex") {
            icon.classList.add("ri-menu-line");
            sidebar.style.display = "none";
        } else {
            icon.classList.remove("ri-menu-line");
            icon.classList.add("ri-close-line");
            sidebar.style.display = "flex";
        }
    }
</script>
