<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="p-5 h-screen bg-gray-50">

        <x-button-link href="{{ route('posts.create') }}">Add new post</x-button-link>

        <div class="overflow-auto rounded-lg shadow">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">ID</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Title</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Published at<br>(My time)</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Published at<br>(Saved time)</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Created at<br>(My time)</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Created at<br>(Saved time)</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                @foreach($posts as $post)
                    <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $post->id }}</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $post->title }}</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ Timezone::convertToLocal($post->published_at, 'Y-m-d H:i:s') }}</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $post->published_at?->format('Y-m-d H:i:s') }}</td>

                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ Timezone::convertToLocal($post->created_at, 'Y-m-d H:i:s') }}</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $post->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot class="bg-gray-50 border-t-2 border-gray-200">
                <tr>
                    <td colspan="6" class="p-3">
                        {{ $posts->links() }}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>
</x-app-layout>
