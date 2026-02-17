<x-layout>
    <x-slot:heading>
        Let's Get In Touch!
    </x-slot:heading>

    <form method="POST" action="/contact" class="space-y-8">
    @csrf
        <div class="space-y-8">
            <input
                name="first_name"
                placeholder="First Name"
            >
        </div>

        <div class="space-y-8">
        <input
            name="last_name"
            placeholder="Last Name"
        >
        </div>

        <div class="space-y-8">
        <input
            name="email"
            placeholder="Email"
        >
        </div class="space-y-8">

        <div class="space-y-8">
        <input
            name="phone"
            placeholder="Phone"
        >
        </div>

        <div class="space-y-8">
        <textarea
            name="message"
            placeholder="Message"
        ></textarea>

        <button type="submit" class="relative rounded-full p-2 bg-sky-700 text-white hover:bg-sky-800 focus:outline-2 focus:outline-offset-2 focus:outline-sky-500">
        Message Me!
        </button>
        
        <div>
        Email: romerm15@my.erau.edu
        </div>

        <div>
        Phone: (928) 300-7844
        </div>

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
    </form>
</x-layout>