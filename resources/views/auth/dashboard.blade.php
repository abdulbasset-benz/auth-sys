@vite('resources/css/app.css')
<x-forms.navigation />
<div>
    <h1 class="text-4xl font-bold text-center">this is the dashboard page</h1>
    <p class="text-4xl font-bold text-center">welcome back, {{ Auth()->user()->name }}</p>
</div>
