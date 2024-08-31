<x-layout>
    <div class="space-y-10">
        <section class="pt-3">
            <x-section-heading>Posts</x-section-heading>
            <div class="grid grid-cols-1 gap-8 mt-7">
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <div class="flex-1 flex flex-col">
                        <h3 class="font-bold text-xl mt-2 text-purple-600 group-hover:text-yellow-500 transition-colors duration-200">First Web Post</h3>
                        <p class="self-start text-xs text-gray-400">by Doge</p>
                        <p class="text-md text-gray-300 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus purus a enim volutpat ornare. Proin luctus tortor id diam scelerisque, non blandit magna porta. Aenean rhoncus urna a velit dictum, nec lacinia lorem consequat. Suspendisse eros mi, facilisis at gravida at, interdum et est. Ut egestas nunc quis congue rhoncus. Duis porta hendrerit risus eleifend interdum. Fusce mauris velit, ornare vitae egestas sed, facilisis a ex. Mauris a lacus quis nisl venenatis mattis ut eu nunc.</p>
                    </div>
                </div>
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <div class="flex-1 flex flex-col">
                        <h3 class="font-bold text-xl mt-2 text-purple-600 group-hover:text-yellow-500 transition-colors duration-200">First Web Post</h3>
                        <p class="self-start text-xs text-gray-400">by Doge</p>
                        <p class="text-md text-gray-300 mt-2">I love my boss he pays me a lot! $$$</p>
                    </div>
                </div>
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <div class="flex-1 flex flex-col">
                        <h3 class="font-bold text-xl mt-2 text-purple-600 group-hover:text-yellow-500 transition-colors duration-200">First Web Post</h3>
                        <p class="self-start text-xs text-gray-400">by Doge</p>
                        <p class="text-md text-gray-300 mt-2">I love my boss he pays me a lot! $$$</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-3">
            <x-section-heading>Videos</x-section-heading>
            <div class="grid grid-cols-2 gap-8 mt-7">
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <h4 class="text-white text-md font-medium">Pizza Throwers Beta 28/05</h4>
                    <div class="flex justify-center mt-2">
                        <video controls class="w-full h-auto">
                            <source src="{{ asset('videos/pizza_bug.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <h4 class="text-white text-md font-medium">Pizza Throwers ASMR Special</h4>
                    <div class="flex justify-center mt-2">
                        <iframe src="https://www.youtube.com/embed/6lgsS50qtTQ" title="ASMR | Close-Up Dough Throwing (+buzzcut pampering)" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" class="w-full h-64"></iframe>
                    </div>
                </div>    
            </div>
        </section>
        <section class="pt-3 pb-9">
            <x-section-heading>Employee Comments!</x-section-heading>
            <div class="grid grid-cols-3 gap-8 mt-7">
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <div class="flex items-center space-x-4">
                        <img class="rounded-full w-16 h-16" src="{{ asset('images/Doge.jpg') }}" alt="Doge">
                        <div>
                            <p class="text-purple-600 group-hover:text-yellow-500 font-semibold">Doge</p>
                            <p class="text-xs text-white">I love working here so much!</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <div class="flex items-center space-x-4">
                        <img class="rounded-full w-16 h-16" src="{{ asset('images/Doge.jpg') }}" alt="Doge">
                        <div>
                            <p class="text-purple-600 group-hover:text-yellow-500 font-semibold">Doge</p>
                            <p class="text-xs text-white">I love working here so much!</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-200">
                    <div class="flex items-center space-x-4">
                        <img class="rounded-full w-16 h-16" src="{{ asset('images/Doge.jpg') }}" alt="Doge">
                        <div>
                            <p class="text-purple-600 group-hover:text-yellow-500 font-semibold">Doge</p>
                            <p class="text-xs text-white">I love working here so much!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>