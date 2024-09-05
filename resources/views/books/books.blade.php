@extends('layout')
@section('name')

<a href={{ route('books.create') }}>Create</a>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Isbn
                </th>
                <th scope="col" class="px-6 py-3">
                    Stock
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Details
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$book->title}}
                </th>
                <td class="px-6 py-4">
                    {{$book->isbn}}
                </td>
                <td class="px-6 py-4">
                    {{$book->stock}}
                </td>
                <td class="px-6 py-4">
                    {{$book->price}}
                </td>
                <td class="px-6 py-4">
                   <a href={{ route('books.show', $book->id ) }}>Details</a>
                </td>
            </tr>
             @endforeach
        </tbody>
    </table>
    {{$books -> links()}}
</div>
@endsection

