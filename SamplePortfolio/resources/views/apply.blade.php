<x-layout>
    <x-slot:heading>
        Apply
    </x-slot:heading>

    <form method="POST" action="/apply">
    @csrf

        <div>
            <input
                name="first_name"
                placeholder="First Name"
            >
        </div>

        <input
            name="last_name"
            placeholder="Last Name"
        >

        <input
            name="email"
            placeholder="Email"
        >

        <input
            name="phone"
            placeholder="Phone"
        >

        <textarea
            name="message"
            placeholder="Message"
        ></textarea>

        <button>
            Submit Application :D
        </button>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

</x-layout>
