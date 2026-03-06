<!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">Emails</h1>
    </div>
    <div class="px-3 py-4 flex flex-col gap-y-2 justify-center">
        <form action="{{ route('emails.filter') }}" method="POST" class="flex w-[50%] gap-x-2">
            @csrf
            
            <select id="pricingType" name="email_priority"
                class="w-full h-10 border-2 border-sky-500 focus:outline-none focus:border-sky-500 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
                <option value="all" selected="">All</option>
                <option value="urgent" @selected($prio == 'urgent')>Urgent</option>
                <option value="not_urgent" @selected($prio == 'not_urgent')>Not Urgent</option>
                <option value="important" @selected($prio == 'important')>Important</option>
            </select>
            <select  name="is_read"
                class="w-full h-10 border-2 border-sky-500 focus:outline-none focus:border-sky-500 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
                <option value="all" selected="">All</option>
                <option value="1" @selected($read == '1')>Read</option>
                <option value="0" @selected($read == '0')>Unread</option>
            </select>
            <button type="submit" class="w-[10vw] rounded-md bg-blue-700 text-white">Apply Filter</button>
        </form>
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Message</th>
                    <th class="text-left p-3 px-5">Status</th>
                    <th class="text-left p-3 px-5">Email Priority</th>
                    <th></th>
                </tr>
                @foreach ($emails as $email)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                        <td class="p-3 px-5">
                            {{ $email->name }}
                        </td>
                        <td class="p-3 px-5">
                            {{ $email->email }}

                        </td>
                        <td class="p-3 px-5">
                            {{ $email->message }}

                        </td>
                        <td class="p-3 px-5">
                            <span class="px-2 bg-green-200 rounded-full text-white">
                                {{ $email->is_read ? 'Read' : 'Unread' }}</span>

                        </td>
                        <td class="p-3 px-5">
                            {{ $email->email_priority }}

                        </td>
                        <td class="flex items-center px-6">
                            <form action="{{ route('emails.update', $email->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" name="is_read" value="1" @checked($email->is_read)
                                    onchange="submit()" />
                                <label for="">Mark As Read</label>
                            </form>

                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>
