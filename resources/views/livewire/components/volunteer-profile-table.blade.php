<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <caption
        class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Volunteer Profiles
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
    </caption>
    <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
    <tr>
        <th scope="col" class="py-3 px-6">
            Name
        </th>
        <th scope="col" class="py-3 px-6">
            Phone Number
        </th>
        <th scope="col" class="py-3 px-6">
            Email
        </th>
        <th scope="col" class="py-3 px-6">
            Adhaar Number
        </th>
        <th scope="col" class="py-3 px-6">
            Joining Time
        </th>
        <th scope="col" class="py-3 px-6">
            <span class="sr-only">Edit</span>
        </th>
    </tr>
    </thead>
    <tbody class="divide-y">
    @foreach($volunteerProfiles as $volunteerProfile)
        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
{{--            <td class="py-4 px-6">--}}
{{--                {{ $volunteerProfile->user->first_name }} {{ $volunteerProfile->user->last_name }}--}}
{{--            </td>--}}
{{--            <td class="py-4 px-6">--}}
{{--                {{ $volunteerProfile->user->mobile }}--}}
{{--            </td>--}}
{{--            <td class="py-4 px-6">--}}
{{--                {{ $volunteerProfile->user->email }}--}}
{{--            </td>--}}
{{--            <td class="py-4 px-6">--}}
{{--                {{ $volunteerProfile->aadhar_card }}--}}
{{--            </td>--}}
{{--            <td class="py-4 px-6">--}}
{{--                {{ Carbon\Carbon::parse($volunteerProfile->created_at)->format('d M Y') }}--}}
{{--            </td>--}}

{{--            <td class="py-4 px-6 text-right flex items-center justify-end gap-3">--}}
{{--                <a wire:click="openEditModal({{ $volunteerProfile }})" class="cursor-point font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>--}}
{{--                <a href="{{ route('volunteer.view.overview', ['signature' => $volunteerProfile->signature]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>--}}
{{--                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>--}}
{{--            </td>--}}

        </tr>
    @endforeach
    </tbody>
</table>
