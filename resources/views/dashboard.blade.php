<x-app-layout>

    <div class="max-w-7xl mx-auto h-full relative flex flex-col bg-[#181818] shadow-lg rounded-lg overflow-hidden">
        <!-- headaer -->
        <div class="px-5 py-5 flex static top-0 justify-between items-center dark:bg-gray-800 border-b-2">
            <div class="font-semibold text-2xl text-white">GoingChat</div>
            <div class="w-1/2">
                <input type="text" name="" id="" placeholder="search IRL" class="rounded-2xl bg-gray-100 py-3 px-5 w-full" />
            </div>

            <div  class="h-12 p-2 bg-yellow-500 rounded-full text-white font-semibold flex items-center justify-center" >
                {{auth()->user()->name}}
            </div>
        </div>
        <!-- end header -->
        <!-- Chatting -->
        <div class="flex relative grow overflow-y-scroll no-scrollbar dark:bg-gray-800">

            <!-- chat list -->
            <div class="flex flex-col sticky  top-0 w-2/5 border-r-2 overflow-y-auto">
                <!-- search compt -->
                <div class="border-b-2 py-4 px-2">
                    <input type="text" placeholder="search chatting" class="py-2 px-2 border-2 border-gray-200 rounded-2xl w-full" />
                </div>
                <!-- end search compt -->
                <!-- user list -->
                <ul class="user-list"></ul>

                <!-- end user list -->
            </div>
            <!-- end chat list -->

            <!-- message -->
            <div class="w-full relative grow bg-gray-100 dark:bg-gray-900">
                <div class="mt-5 pt-5 dark:bg-gray-900">
                    <div class="flex items-end justify-end mb-4">
                        <div class="mr-2 py-3 px-4 max-w-[80%] bg-[#8774e1] rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white" >
                            Welcome to group everyone !
                        </div>
                        <img
                            src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
                            class="object-cover h-8 w-8 rounded-full"
                            alt=""
                        />
                    </div>
                    <div class="flex items-end justify-start mb-4">
                        <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover h-8 w-8 rounded-full" alt="" />
                        <div class="ml-2 py-3 px-4 max-w-[80%] dark:bg-gray-800 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white" >
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                            at praesentium, aut ullam delectus odio error sit rem. Architecto
                            nulla doloribus laborum illo rem enim dolor odio saepe,
                            consequatur quas?
                        </div>
                    </div>
                    <div class="flex justify-end items-end mb-4">
                        <div class="flex flex-col items-end">
                            <div class="mr-2 py-3 max-w-[80%] px-4 bg-[#8774e1] rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white" >
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam, repudiandae.
                            </div>

                            <div class="mt-4 mr-2 py-3 max-w-[80%] px-4 bg-[#8774e1] rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white" >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Debitis, reiciendis!
                            </div>
                        </div>
                        <img
                            src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
                            class="object-cover h-8 w-8 rounded-full"
                            alt=""
                        />
                    </div>
                    <div class="flex items-end justify-start mb-4">
                        <img
                            src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
                            class="object-cover h-8 w-8 rounded-full"
                            alt=""
                        />
                        <div class="ml-2 py-3 px-4 dark:bg-gray-800 max-w-[80%] rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white" >
                            happy holiday guys!
                        </div>
                    </div>

                </div>

                <div class="absolute w-full bottom-1 mt-auto">
                    <input class="w-full bg-gray-300 px-3 rounded-xl" type="text" placeholder="type your message here..."  />
                </div>
            </div>

            <!-- end message -->
            <div class="w-2/5 border-l-2 px-5 sticky top-0  overflow-y-auto no-scrollbar">
                <div class="flex flex-col">
                    <div class="font-semibold text-xl text-white py-4">Mern Stack Group</div>
                    <img
                        src="https://source.unsplash.com/L2cxSuKWbpo/600x600"
                        class="object-cover rounded-xl h-64"
                        alt=""
                    />
                    <div class="font-semibold text-white py-4">Created 22 Sep 2021</div>
                    <div class="font-light text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        perspiciatis!
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script type="module">
    Echo.private("private-channel.{{ auth()->id() }}")
        .subscribed((user)=>{
            console.log(`Subscribed {{ auth()->user()->name }}`)
        })
        .listen('ChatEvent', (e)=>{
            console.log(e)
        })

    Echo.join('present-channel')
        .here((users)=>{
            
        })
        .joining((users)=>{

        })
        .leaving((user)=>{

            console.log(user)
        })
        .listen('PresentChannelEvent', (e)=>{
            console.log(e)
        })
</script>
