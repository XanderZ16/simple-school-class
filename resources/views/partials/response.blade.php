@if (session()->has('success'))
    <div id="response"
        class="absolute flex gap-6 bg-green-400 rounded-lg py-2 px-4 left-1/2 -translate-x-1/2 animate-pulse top-6 w-fit *:text-lg *:text-white transition-all">
        <h5>{{ session('success') }}</h5>
        <h5 class="bg-green-500 px-3 rounded-lg hover:bg-green-600 hover:cursor-pointer" onclick="close_response()">Close
        </h5>
    </div>
@elseif (session()->has('error'))
<div id="response"
        class="absolute flex gap-6 bg-red-400 rounded-lg py-2 px-4 left-1/2 -translate-x-1/2 animate-pulse top-6 w-fit *:text-lg *:text-white transition-all">
        <h5>{{ session('success') }}</h5>
        <h5 class="bg-red-500 px-3 rounded-lg hover:bg-red-600 hover:cursor-pointer" onclick="close_response()">Close
        </h5>
    </div>
@endif

<script src="/js/response.js"></script>
