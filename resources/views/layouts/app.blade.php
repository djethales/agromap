@include('layouts.templates.admin.header')

    <main class="">
        <div class="w-2/12  h-screen fixed left-0 top-0 bottom-0 nav-side" style="background:#f5f5f6;">
            @include('layouts.templates.admin.navside')
        </div>
        <div class=" absolute top-0 w-full">
            @include('layouts.templates.admin.navtop')
            <div class="flex justify-end">
                <div class="w-10/12"> 
                    @yield('content')
                </div>
            </div>
        </div>
       
        
    </main>
@include('layouts.templates.admin.footer')
