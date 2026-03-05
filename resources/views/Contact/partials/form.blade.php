<form action="{{ route('emails.store') }}" method="POST" class="space-y-6 bg-gray-400 p-5 rounded-md">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Full Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" name="name" placeholder="John Doe"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                required />
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" name="email" placeholder="john@example.com"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                required />
        </div>

        <!-- Mobile Number -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
            <input type="tel" name="phone" placeholder="+91 9876543210"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                required />
        </div>

        <!-- Course Selection -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Priority</label>
            <select name="email_priority"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 bg-white"
                required>
                <option selected disabled>Select Priority</option>
                <option value="urgent">Urgent</option>
                <option value="not_urgent">Not Urgent</option>
                <option value="important">Important</option>
            </select>
        </div>
    </div>

    <!-- Message -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
        <textarea name="message" rows="4" placeholder="Tell us about your interests and goals..."
            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
            required></textarea>
    </div>

    <!-- Submit -->
    <div>
        <button type="submit"
            class="w-full py-3 px-6 bg-red-600 text-white font-medium rounded-lg shadow-sm hover:bg-red-700 transition duration-300">
            Submit Enquiry
        </button>
    </div>
</form>
